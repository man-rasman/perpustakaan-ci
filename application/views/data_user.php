<?php $this->load->view('template/header');
if ($this->session->userdata('data') != "masuk") {
    redirect(base_url());
    }?>


<div class="box box-danger">
    <div class="box-header">
            <b>Halaman User</b>
        <div class="box-body">
        <table class="table table-bordered table-hover">
            <tr class='text-center'>
                <td><b>ID</b></td>
                <td><b>Nama User</b></td>
                <td><b>Alamat</b></td>
                <td><b>No Hp</b></td>
                <td><b>Username</b></td>
                <td><b>Password</b></td>
                <td><b>Aksi</b></td>
            </tr>
            <?php
            foreach ($data_user as $tampilkan) {
                echo "<tr class='text-left'>";
                    echo "<td class='text-center'>$tampilkan->id_user</td>";
                    echo "<td>$tampilkan->nama_user</td>";
                    echo "<td>$tampilkan->alamat_user</td>";
                    echo "<td>$tampilkan->no_hp</td>";
                    echo "<td>$tampilkan->username</td>";
                    echo "<td>$tampilkan->password</td>";
                    echo "<td><a href='Edituser/$tampilkan->id_user'><button class='btn btn-success btn-xs'>Edit</button></a><button class='btn btn-danger btn-xs ' onclick='hapus($tampilkan->id_user)'>Hapus</button></td>";
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
        <form action="<?= base_url()?>index.php/buku/simpan_user" method="post">
                            <input type="hidden" name="id_user">
            Nama User       <input class="form-control" type="text" name="nama_user">
            Alamat          <input class="form-control" type="text" name="alamat_user">
            No Hp           <input class="form-control" type="number" name="no_hp_user">
            Username        <input class="form-control" type="text" name="username">
            Password        <input class="form-control" type="text" name="password"><br>
                            <input type="submit" value="simpan" class="btn btn-primary btn-md pull-right">
            </form>
        <!-- Js -->
        <script>
function hapus(id){
 $('#form_hapus')[0].reset();
 $.ajax({
     url : "<?php echo base_url('index.php/Buku/Ambiliduser') ?>/"+id,
     type : "GET",
     dataType : "JSON",
     success: function(data){
         $('[name="id_user"]').val(data.id_user);
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
              <form action="<?php echo base_url() ?>index.php/Buku/Hapus_user" method="post" id="form_hapus">
              <input type="hidden" name="id_user" value="">              
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