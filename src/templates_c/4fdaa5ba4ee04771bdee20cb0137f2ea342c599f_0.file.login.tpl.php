<?php
/* Smarty version 3.1.36, created on 2021-03-14 09:37:08
  from '/data/inquiry2.local/src/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_604dd9444d9793_69497160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fdaa5ba4ee04771bdee20cb0137f2ea342c599f' => 
    array (
      0 => '/data/inquiry2.local/src/templates/login.tpl',
      1 => 1615714626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604dd9444d9793_69497160 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="./css/admin_lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./css/admin_lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./css/admin_lte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <title>ログインフォーム</title>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in </p>
<?php echo $_smarty_tpl->tpl_vars['login_error']->value;?>

      <form action="" method="post" class="needs-validation" novalidate>
       <label for="sign_in_name">sign in</label>
       <div class="input-group mb-3">
          <input type="email" class="form-control" id="sign_in_name" placeholder="Email" name="e_mail" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <div class="invalid-feedback">
           <?php echo $_smarty_tpl->tpl_vars['e_mail_error']->value;?>

          </div>
        </div>

        <label for="pass_word_n">password</label>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="pass_word_n" placeholder="password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <div class="invalid-feedback">
          <?php echo $_smarty_tpl->tpl_vars['pass_error']->value;?>

          </div>
        </div>
  
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" class="btn btn-primary btn-block" name="submit_btn" value="Sign In">
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<?php echo '<script'; ?>
>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
<?php echo '</script'; ?>
>
<!-- jQuery -->

<?php echo '<script'; ?>
 src="./css/admin_lte/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap 4 -->
<?php echo '<script'; ?>
 src="./css/admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="./css/admin_lte/dist/js/adminlte.min.js"><?php echo '</script'; ?>
>

</body>
</html>






<?php }
}
