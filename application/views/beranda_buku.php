<?php $this->load->view('template/header'); 
if ($this->session->userdata('data') != "masuk") {
    redirect(base_url());
    }?>

<div class="box box-primary">
    <div class="box-header">
        <b>Halaman Beranda</b>
        <div class="box-body">
        <table class="table table-hover">
            <tr>
                <th><h4>No.</h4></th>
                <th><h4>Judul buku</h4></th>
                <th><h4>Penulis</h4></th>
            </tr>
              <?php foreach ($data_beranda as $tampilkan) {
              echo "<tr>";
              echo "<th><h4>$tampilkan->id_buku</h4></th>";
              echo "<th><a href='Isibuku/$tampilkan->id_buku'><h3>$tampilkan->nama_buku</h3></a></th>";
              echo "<th class='bg-success col-xs-3'><p>$tampilkan->penulis_buku</p></th>";
              echo "</tr>";
                } ?>
        </table>
        </div>
    </div>
</div>