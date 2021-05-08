<?php $this->load->view('template/header');?>
<?php $this->load->view('template/footer');?>
<body class="hold-transition register-page">
<div class="register-box">

  <div class="register-box-body">
  <div class="register-logo">
  <b>DAFTAR</b>
  </div>
    <form action="<?= base_url('index.php/login/aksi_daftar')?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nama lengkap" name="nama">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Alamat" name="alamat">
        <span class="fa fa-map-marker form-control-feedback"></span>
        
      </div>
      <div class="form-group has-feedback">
        <input type="number" class="form-control" placeholder="No Hp" name="no_hp_daftar">
        <span class="fa fa-phone-square form-control-feedback"></span>
        
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username_daftar">
        <span class="fa fa-user form-control-feedback"></span>

      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
      </div>
      <div class="row pull-right">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary">Daftar</button>
        </div>
      </div>
    </form>
    <p>Sudah punya akun? <a href="<?= base_url(); ?>" class="text-center">masuk</a></p>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
<!-- show hide password -->
<script src="assets/script.js"></script>
</body>
</html>

