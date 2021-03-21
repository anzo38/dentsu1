<?php
/* Smarty version 3.1.36, created on 2021-03-20 15:37:15
  from '/data/inquiry2.local/src/templates/complete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6055981b7fa7e7_98514529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9970b2ceeb1855b78a80e6a4ac93e7ad8f88c2e2' => 
    array (
      0 => '/data/inquiry2.local/src/templates/complete.tpl',
      1 => 1616221738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6055981b7fa7e7_98514529 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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

 
<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<br>
<?php echo $_smarty_tpl->tpl_vars['e_mail']->value;?>
<br>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['question']->value, 'question_array', false, 'key');
$_smarty_tpl->tpl_vars['question_array']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['question_array']->value) {
$_smarty_tpl->tpl_vars['question_array']->do_else = false;
?>
 <?php echo $_smarty_tpl->tpl_vars['question_config_data']->value[$_smarty_tpl->tpl_vars['question_array']->value];?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><br>
<?php echo $_smarty_tpl->tpl_vars['category_config_data']->value[$_smarty_tpl->tpl_vars['category']->value];?>
<br>
<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
<br>
<?php echo $_smarty_tpl->tpl_vars['time_start']->value;?>
〜<?php echo $_smarty_tpl->tpl_vars['time_end']->value;?>
<br>
<?php echo $_smarty_tpl->tpl_vars['course']->value;?>
<br>
<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
<br>
<?php echo $_smarty_tpl->tpl_vars['login_id']->value;?>

<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>



 <br>
  <?php echo $_smarty_tpl->tpl_vars['successful']->value;?>

  <?php echo $_smarty_tpl->tpl_vars['decline']->value;?>
 
  
   

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
</html><?php }
}
