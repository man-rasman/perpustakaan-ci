<?php $this->load->view('template/header');?>
<body class="hold-transition login-page">
<div class="login-box">

  <!-- /.login-logo -->
  <div class="login-box-body">
  <div class="login-logo">
    <b>MASUK</b>
  </div>
    <form action="<?php echo base_url(); ?>index.php/Welcome/Login" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" id="username" placeholder="Username" name="username">
        <span class="fa fa-user form-control-feedback"></span>
      </div>
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
    <p>Belum punya akun? <a href="<?php echo base_url(); ?>index.php/Welcome/index2" class="text-center">daftar</a></p>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- show hide password -->
<script src="assets/script.js"></script>
</body>
</html>
