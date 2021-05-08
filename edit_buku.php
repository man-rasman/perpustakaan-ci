<?php $this->load->view('template/header');
if ($this->session->userdata('data') != "masuk") {
    redirect(base_url());
    }?>

<div class="box box-primary">
    <div class="box-header">
    <div class="navbar-form">
        </div>
        <div class="box-body">
        <form action="<?= base_url()?>index.php/Perpustakaan_ci/edit_buku" method="post">
        <?php 
        foreach ($ambil_id_buku as $tampilkan) { ?>
                         <input type="hidden" name="id_buku" class="form-control" value="<?php echo $tampilkan->id_buku ?>">
            Nama buku    <input type="text" name="nama_buku" class="form-control" value="<?php echo $tampilkan->nama_buku ?>">
            Jenis buku   <select type="text" name="jenis_buku" class="form-control" value="<?php echo $tampilkan->jenis_buku ?>">
                         <option value="1">Fiksi</option>
                         <option value="2">Non Fiksi</option>
                         </select>
            Penulis      <input type="text" name="penulis_buku" class="form-control" value="<?php echo $tampilkan->penulis_buku ?>">
            Penerbit     <input type="text" name="penerbit_buku" class="form-control" value="<?php echo $tampilkan->penerbit_buku ?>">
            Isi buku     <input type="text" name="isi_buku" class="form-control" value="<?php echo $tampilkan->isi_buku ?>">
            Keterangan   <input type="text" name="keterangan" class="form-control" value="<?php echo $tampilkan->keterangan ?>"><br>
                         <input type="submit" value="simpan" class="btn btn-primary pull-right">

        <?php } ?>
        </form>
        </div>
    </div>
</div>