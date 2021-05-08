<?php $this->load->view('template/header');?>
<body class="hold-transition login-page">
<div class="login-box">

  <!-- /.login-logo -->
  <div class="login-box-body">
  <div class="login-logo">
    <b>MASUK</b>
  </div>
    <form action="<?= base_url('index.php/login/login'); ?>" method="post">
    <?php echo form_error('username'); ?>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" id="username" placeholder="Username" name="username">
        <span class="fa fa-user form-control-feedback"></span>
      </div>
      

      <?php echo form_error('password'); ?>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        <span id="eye" onclick="toggle()">
        <i id="eyeshow" class="fa fa-eye"></i>
        <i id="eyehide" class="fa fa-eye-slash"></i>
        </span>
      </div>

      <div class="row pull-right">
        <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-s">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <p>Belum punya akun? <a href="<?= base_url('index.php/login/daftar'); ?>" class="text-center">daftar</a></p>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- show hide password -->
<script src="assets/script.js"></script>
</body>
</html>
