<?php $this->load->view('template/header');
if ($this->session->userdata('data') != "masuk") {
    redirect(base_url());
    }?>

<div class="box box-primary">
    <div class="box-header">
    <div class="navbar-form">
        </div>
        <div class="box-body">
        <form action="<?= base_url()?>index.php/Perpustakaan_ci/edit_user" method="post">
        <?php 
        foreach ($ambil_id_user as $tampilkan) { ?>
                                         <input type="hidden" name="id_user" value="<?php echo $tampilkan->id_user ?>">
            Nama User       <input class="form-control" type="text" name="nama_user" value="<?php echo $tampilkan->nama_user ?>">
            Alamat          <input class="form-control" type="text" name="alamat_user" value="<?php echo $tampilkan->alamat_user ?>">
            No Hp           <input class="form-control" type="text" name="no_hp_user" value="<?php echo $tampilkan->no_hp ?>">
            Username        <input class="form-control" type="text" name="username" value="<?php echo $tampilkan->username ?>">
            Password        <input class="form-control" type="text" name="password" value="<?php echo $tampilkan->password ?>"><br>
                            <input type="submit" value="simpan" class="btn btn-primary pull-right">

        <?php } ?>
        </form>
        </div>
    </div>
</div>