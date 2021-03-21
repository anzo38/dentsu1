<?php
/* Smarty version 3.1.36, created on 2021-03-20 15:17:46
  from '/data/inquiry2.local/src/templates/signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6055938a8fbea9_61058895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd7b0937b1841d3827b55da89eab7b3492f25a4b' => 
    array (
      0 => '/data/inquiry2.local/src/templates/signup.tpl',
      1 => 1616221061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6055938a8fbea9_61058895 (Smarty_Internal_Template $_smarty_tpl) {
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
  <style>
  .required{
   color:red;
   font-size: 14px;
   }
   .error{
   color:red;
   font-size: 14px;
   }
  .no-display{
    display:none;
  }
  </style>

</head>
<body  class="hold-transition login-page">
  <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">サインアップ</h3>
      </div>
     <div class="card-body">
        <p>名前:<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
        <p>メールアドレス:<?php echo $_smarty_tpl->tpl_vars['e_mail']->value;?>
</p>
        <p>お聞きしたいこと:
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['question']->value, 'question_array', false, 'key');
$_smarty_tpl->tpl_vars['question_array']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['question_array']->value) {
$_smarty_tpl->tpl_vars['question_array']->do_else = false;
?>
            <?php echo $_smarty_tpl->tpl_vars['question_config_data']->value[$_smarty_tpl->tpl_vars['question_array']->value];?>

          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </p>
        <p>カテゴリー:<?php echo $_smarty_tpl->tpl_vars['category_config_data']->value[$_smarty_tpl->tpl_vars['category']->value];?>
</p>
        <p>電話可能日:<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</p>
        <p>電話可能時間帯:<?php echo $_smarty_tpl->tpl_vars['time_start']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['time_end']->value;?>
</p>
        <p>コース:<?php echo $_smarty_tpl->tpl_vars['course']->value;?>
</p>
        <p>お問合わせ内容:<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</p>
     </div>
     
     <form method="post" action="contact.php?gui=3" class="needs-validation" novalidate>
       <div class="card-body">
                    <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
          <input type="hidden" name="e_mail" value="<?php echo $_smarty_tpl->tpl_vars['e_mail']->value;?>
">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['question']->value, 'question_v', false, 'key');
$_smarty_tpl->tpl_vars['question_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['question_v']->value) {
$_smarty_tpl->tpl_vars['question_v']->do_else = false;
?>
            <td><label><input type="hidden" name="question[]" value="<?php echo $_smarty_tpl->tpl_vars['question_v']->value;?>
"><label></td>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'category_v', false, 'key');
$_smarty_tpl->tpl_vars['category_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['category_v']->value) {
$_smarty_tpl->tpl_vars['category_v']->do_else = false;
?>
          <input type="hidden" name="category" value="<?php echo $_smarty_tpl->tpl_vars['category_v']->value;?>
">
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <input type="hidden" name="date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">
          <input type="hidden" name="time_start" value="<?php echo $_smarty_tpl->tpl_vars['time_start']->value;?>
">
          <input type="hidden" name="time_end" value="<?php echo $_smarty_tpl->tpl_vars['time_end']->value;?>
">
          
          <input type="hidden" name="comment" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
">
         

          <div class="form-group">
            <p>ID（半角英数字のみ）</p>
            <span class="error"><?php echo $_smarty_tpl->tpl_vars['login_id_error']->value;?>
</span><br>
            <span class="error"><?php echo $_smarty_tpl->tpl_vars['login_id_word_error']->value;?>
</span><br>
            <input type="text" name="login_id" value="<?php echo $_smarty_tpl->tpl_vars['login_id']->value;?>
">
          </div>
          
          <div class="form-group">
            <p>パスワード</p>
            <span class="error"><?php echo $_smarty_tpl->tpl_vars['pass_error']->value;
echo $_smarty_tpl->tpl_vars['strlen_error']->value;?>
</span><br>
            <span class="error"><?php echo $_smarty_tpl->tpl_vars['pass_match_error']->value;?>
</span><br>
            <input type="password"  name="pass" placeholder="Password"  value="<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
" >
          </div>

          <div class="form-group">
            <p>パスワード再入力</p>
            <span class="error"><?php echo $_smarty_tpl->tpl_vars['pass2_error']->value;?>
</span><br>
            <input type="password"  name="pass2" placeholder="Password" value="<?php echo $_smarty_tpl->tpl_vars['pass2']->value;?>
">
          </div>
              
        </div>
      
        <div class="card-footer">
          <input type="submit" name="to_confirm" class="btn btn-primary" value="確認" >
        </div>

      </form>
           <div class="card-footer">
         <form method="post" action="contact.php?gui=1">
              <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
              <input type="hidden" name="e_mail" value="<?php echo $_smarty_tpl->tpl_vars['e_mail']->value;?>
">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['question']->value, 'question_v', false, 'key');
$_smarty_tpl->tpl_vars['question_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['question_v']->value) {
$_smarty_tpl->tpl_vars['question_v']->do_else = false;
?>
                <td><label><input type="hidden" name="question[]" value="<?php echo $_smarty_tpl->tpl_vars['question_v']->value;?>
"><label></td>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'category_v', false, 'key');
$_smarty_tpl->tpl_vars['category_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['category_v']->value) {
$_smarty_tpl->tpl_vars['category_v']->do_else = false;
?>
              <input type="hidden" name="category" value="<?php echo $_smarty_tpl->tpl_vars['category_v']->value;?>
">
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <input type="hidden" name="date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">
              <input type="hidden" name="time_start" value="<?php echo $_smarty_tpl->tpl_vars['time_start']->value;?>
">
              <input type="hidden" name="time_end" value="<?php echo $_smarty_tpl->tpl_vars['time_end']->value;?>
">
              <select name="course"class="no-display">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['course']->value, 'course_v', false, 'key');
$_smarty_tpl->tpl_vars['course_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['course_v']->value) {
$_smarty_tpl->tpl_vars['course_v']->do_else = false;
?>
              <option type="hidden"><?php echo $_smarty_tpl->tpl_vars['course_v']->value;?>
</option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <select>
              <input type="hidden" name="comment" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
">

              <input type="hidden"name="login_id"  placeholder="E-mail" value="<?php echo $_smarty_tpl->tpl_vars['login_id']->value;?>
">
             <input type="submit" class="btn btn-primary" value="修正する">
        </form>
      </div>
     </div>
  </div>
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
