<?php $this->load->view('template/header'); 
if ($this->session->userdata('data') != "masuk") {
    redirect(base_url());
    }?>
<div class="box">
    <div class="box-header">
            
        <div class="box-body">
        <table class="table table-hover">

    <?php foreach ($ambil_id_isi_buku as $tampilkan) {
        echo "<tr>";
            echo "<td><b>Judul Buku: </b>$tampilkan->nama_buku</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td><b>Jenis Buku: </b>$tampilkan->jenis_buku</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td><b>Penulis: </b>$tampilkan->penulis_buku</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td><b>Penerbit: </b>$tampilkan->penerbit_buku</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td><b>Keterangan: </b>$tampilkan->keterangan</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td><b>Isi Buku:</b><br><p>$tampilkan->isi_buku</p></td>";
        echo "</tr>";   
    }
    ?>
        </table>
        </div>
    </div>
</div>
