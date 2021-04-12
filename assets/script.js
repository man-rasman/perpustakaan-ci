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
//use jQuery
//<!-- jQuery 3 -->
//<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
$(document).ready(function(){
  const password = $('#password');
  $('#eye').click(function(){
    if(password.prop('type') == 'password'){
      $(this).addClass('fa-eye-slash');
      password.attr('type','text');
    }else{
      $(this).removeClass('fa-eye-slash');
      password.attr('type','password');
    }
  })
})