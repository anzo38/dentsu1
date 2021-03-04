<?php
/* Smarty version 3.1.36, created on 2021-02-11 07:00:57
  from '/data/inquiry2.local/src/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6024d629aeedd4_94775691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fdaa5ba4ee04771bdee20cb0137f2ea342c599f' => 
    array (
      0 => '/data/inquiry2.local/src/templates/login.tpl',
      1 => 1613026854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6024d629aeedd4_94775691 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
<title>ログインフォーム</title>

</head>
<style>
 .is-error{
   color:red;
   font-size: 14px;
   }
</style>
<body>

<form method="post"  action="">
<?php echo $_smarty_tpl->tpl_vars['login_error']->value;?>


<p>ログインE-mail</p>
<p class="is-error"><?php echo $_smarty_tpl->tpl_vars['email_error']->value;?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['const_error']->value;?>
</p>
<input type="text" placeholder="E-mail" name ="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">


<p>ログインパスワード</p>
<p class="is-error"><?php echo $_smarty_tpl->tpl_vars['pass_error']->value;?>
</p>
<?php echo $_smarty_tpl->tpl_vars['const_error']->value;?>

<input type="password" placeholder="Password" name="loginpass" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">

<input type="submit" name="submit_btn" value="ログインする">
</form>
</body>
</html>

<?php }
}
