<?php $this->load->view('template/header');?>
<body class="hold-transition register-page">
<div class="register-box">

  <div class="register-box-body">
  <div class="register-logo">
  <b>DAFTAR</b>
  </div>
    <form action="./" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nama lengkap" name="nama">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Alamat" name="alamat">
        <span class="fa fa-map-marker form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="number" class="form-control" placeholder="No Hp" name="np_hp">
        <span class="fa fa-phone-square form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
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
          <button type="submit" class="btn btn-primary">Daftar</button>
        </div>
      </div>
    </form>
    <p>Sudah punya akun? <a href="<?php echo base_url(); ?>./" class="text-center">masuk</a></p>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- show hide password -->
<script>
function toggle(){
  var x = document.getElementById("password");
  var y = document.getElementById("eyeshow");
  var z = document.getElementById("eyehide");

  if(x.type === 'password'){
    x.type = "text";
    y.style.display = "block";
    z.style.display = "none";
  }else{
    x.type = "password";
    y.style.display = "none";
    z.style.display = "block";
  }
}
</script>
</body>
</html>
