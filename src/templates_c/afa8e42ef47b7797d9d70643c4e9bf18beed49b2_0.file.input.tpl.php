<?php
/* Smarty version 3.1.36, created on 2021-03-21 20:53:02
  from '/data/inquiry2.local/src/templates/input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6057339e170c54_27536570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afa8e42ef47b7797d9d70643c4e9bf18beed49b2' => 
    array (
      0 => '/data/inquiry2.local/src/templates/input.tpl',
      1 => 1616327580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6057339e170c54_27536570 (Smarty_Internal_Template $_smarty_tpl) {
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
</style>
  
</head>
<body class="hold-transition login-page">
  <div class="card card-primary">
    <div class="card-header">
     <h3 class="card-title">お問合わせフォーム</h3>
   </div>
        <!-- /.card-header -->
        <!-- form start -->
      
              <form method="post" action="contact.php?gui=2" class="needs-validation" novalidate>

                <div class="card-body">
                  <div class="form-group">
                    <label>名前<span class="required">＊</span></label>
                      <span class="error"><?php echo $_smarty_tpl->tpl_vars['name_error']->value;?>
</span>
                    <input type="text" name="name"  class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" size="30" maxlength="50" required>
                  </div>

                  <div class="form-group">
                    <label>メールアドレス<span class="required">＊</span></label>
                      <span class="error"><?php echo $_smarty_tpl->tpl_vars['e_mail_error']->value;?>
</span>
                    <input type="email" name="e_mail"  class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['e_mail']->value;?>
" size="30" maxlength="50">
                  </div>
                  
                  <div class="form-group">
                   <label>お聞きしたい内容<span class="required">＊</span></label>
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['question_error']->value;?>
</span>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['question_config_data']->value, 'question_v', false, 'key');
$_smarty_tpl->tpl_vars['question_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['question_v']->value) {
$_smarty_tpl->tpl_vars['question_v']->do_else = false;
?>
                      <div class="form-check">
                        <?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['question']->value)) {?>
                        <label class="form-check-label"><input type="checkbox" name="question[]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" checked="checked"><?php echo $_smarty_tpl->tpl_vars['question_v']->value;?>
<label>
                        <?php } else { ?>
                        <label class="form-check-label"><input type="checkbox" name="question[]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['question_v']->value;?>
<label>
                        <?php }?>
                      </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                      
                  <div class="form-group">
                    <label>カテゴリ<span class="required">＊</span></label>
                     <span class="error"><?php echo $_smarty_tpl->tpl_vars['category_error']->value;?>
</span></th>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_config_data']->value, 'category_v', false, 'key');
$_smarty_tpl->tpl_vars['category_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['category_v']->value) {
$_smarty_tpl->tpl_vars['category_v']->do_else = false;
?>
                      <div class="form-check">
                        <?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['category']->value) {?>
                        <label class="form-check-label"><input type="radio" name="category" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" checked="checked"><?php echo $_smarty_tpl->tpl_vars['category_v']->value;?>
</label>
                        <?php } else { ?>
                         <label class="form-check-label"><input type="radio" name="category" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['category_v']->value;?>
</label>
                        <?php }?>
                      </div>
                     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                  <div class="form-group">
                    <label>電話可能日<span class="required">＊</span></label>
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['date_error']->value;?>
</span>
                    <input type="date" name="date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">
                  </div>

                  <div class="form-group">
                    <label>電話可能時間帯<span class="required">＊</span></label>
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['time_error']->value;?>
</span>
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['differ_time_error']->value;?>
</span>
                    <input type="time" name="time_start"  min="10:00" max="19:00" value=<?php echo $_smarty_tpl->tpl_vars['time_start']->value;?>
 >
                    <span>〜</span>
                    <input type="time" name="time_end" min="10:00" max="19:00" value=<?php echo $_smarty_tpl->tpl_vars['time_end']->value;?>
>
                  </div>

                  <div class="form-group">
                    <label>コース<span class="required">＊</span></label>
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['course_error']->value;?>
</span>
                    <select name="course" >
                    <option  selected="selected">---お選び下さい---</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['course_config_data']->value, 'course_v', false, 'key');
$_smarty_tpl->tpl_vars['course_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['course_v']->value) {
$_smarty_tpl->tpl_vars['course_v']->do_else = false;
?>
                      <?php if ($_smarty_tpl->tpl_vars['course_v']->value == $_smarty_tpl->tpl_vars['course']->value) {?>
                     <option selected><?php echo $_smarty_tpl->tpl_vars['course_v']->value;?>
</option>
                     <?php } else { ?>
                    <option ><?php echo $_smarty_tpl->tpl_vars['course_v']->value;?>
</option>
                      <?php }?>
                     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                     </select>
                  </div>

                  <div class="form-group">    
                      <label>お問い合わせ内容<span class="required">＊</span></label>
                       <span class="error"><?php echo $_smarty_tpl->tpl_vars['comment_error']->value;?>
</span>
                         <textarea name="comment"class="form-control" rows="4"><?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</textarea>
                  </div>

                </div>

                <div class="card-footer">
                 <input type="submit" name="to_signup" type="submit" class="btn btn-primary" value="確認" />
                </div>

              </form>
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
</html>
               
    <!--/fixPageTop-->
<!-- SiteCatalyst code version: H.21.
Copyright 1996-2010 Adobe, Inc. All Rights Reserved
More info available at http://www.omniture.com -->
<!--/DO NOT REMOVE/-->
<!-- End SiteCatalyst code version: H.21. -->
<!--/contentAll-->
    
<?php }
}
