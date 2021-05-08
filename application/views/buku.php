<?php $this->load->view('template/header');
if ($this->session->userdata('data') != "masuk") {
    redirect(base_url());
    }?>


<div class="box box-danger">
    <div class="box-header">
            <b>Halaman Pustaka</b>
        <div class="box-body">
        <table class="table table-bordered table-hover">
            <tr class='text-center'>
                <td><b>ID</b></td>
                <td><b>Nama Buku</b></td>
                <td><b>Jenis Buku</b></td>
                <td><b>Penulis</b></td>
                <td><b>Penerbit</b></td>
                <td><b>Isi Buku</b></td>
                <td><b>Keterangan</b></td>
                <td><b>Aksi</b></td>
            </tr>
            <?php
            foreach ($data_buku as $tampilkan) {
                echo "<tr class='text-left'>";
                    echo "<td>$tampilkan->id_buku</td>";
                    echo "<td>$tampilkan->nama_buku</td>";
                    echo "<td>$tampilkan->jenis_buku</td>";
                    echo "<td>$tampilkan->penulis_buku</td>";
                    echo "<td>$tampilkan->penerbit_buku</td>";
                    echo "<td class='bg-info'>$tampilkan->isi_buku</td>";
                    echo "<td>$tampilkan->keterangan</td>";
                    echo "<td class='col-md-2 text-center'><a href='Editbuku/$tampilkan->id_buku'><button class='btn btn-success btn-xs'>Edit</button></a><button class='btn btn-danger btn-xs ' onclick='hapus($tampilkan->id_buku)'>Hapus</button></td>";
                echo "</tr>";
            }
            ?>
        </table>
        </div>
    </div>
</div>

<div class="box box-info">
    <div class="box-header">
            
        <div class="box-body">
        <form action="<?= base_url()?>index.php/buku/simpan_buku" method="post">
                            <input type="hidden" name="id_buku">
            Nama buku       <input class="form-control" type="text" name="nama_buku">
            Jenis buku      <select class="form-control" type="text" name="jenis_buku">
                                <option value="fiksi">Fiksi</option>
                                <option value="non fiksi">Non Fiksi</option>
                            </select>
            Penulis         <input class="form-control" type="text" name="penulis_buku">
            Penerbit        <input class="form-control" type="text" name="penerbit_buku">
            Isi buku        <input class="form-control" type="text" name="isi_buku">
            Keterangan        <input class="form-control" type="text" name="keterangan_buku"><br>
                              <input type="submit" value="simpan" class="btn btn-primary pull-right btn-md">
          </form>
        <!-- Js -->
<script>
function hapus(id){
 $('#form_hapus')[0].reset();
 $.ajax({
     url : "<?php echo base_url('index.php/Buku/Ambilidbuku') ?>/"+id,
     type : "GET",
     dataType : "JSON",
     success: function(data){
         $('[name="id_buku"]').val(data.id_buku);
         $('#modal-default').modal('show');
     },
     error : function(jqHXR,textStatus,errorThrown){
         alert('Gagal ambil data ajax');
     }
 });
}
</script>
<!-- /.Js -->

<!-- Modal -->
<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Konfirmasi</h4>
              </div>
              <div class="modal-body">
              <form action="<?php echo base_url() ?>index.php/Buku/Hapus_buku" method="post" id="form_hapus">
              <input type="hidden" name="id_buku" value="">              
                <p>Yakin mau dihapus?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-primary">Iya</button>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
