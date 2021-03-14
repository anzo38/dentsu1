<?php
/* Smarty version 3.1.36, created on 2021-03-13 00:40:24
  from '/data/inquiry2.local/src/templates/complete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_604c09f84a6141_47590034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9970b2ceeb1855b78a80e6a4ac93e7ad8f88c2e2' => 
    array (
      0 => '/data/inquiry2.local/src/templates/complete.tpl',
      1 => 1615193470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604c09f84a6141_47590034 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>コンタクトフォーム（完了）</title>
<link href="../bootstrap.min.css" rel="stylesheet">
<link href="../style.css" rel="stylesheet">
</head>
<body>
<div class="container">
 
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
 
  
   
</div>
</body>
</html><?php }
}
