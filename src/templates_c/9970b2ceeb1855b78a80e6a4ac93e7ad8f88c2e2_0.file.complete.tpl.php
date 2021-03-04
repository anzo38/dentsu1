<?php
/* Smarty version 3.1.36, created on 2021-02-07 08:35:34
  from '/data/inquiry2.local/src/templates/complete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_601fa6562b0d28_74788242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9970b2ceeb1855b78a80e6a4ac93e7ad8f88c2e2' => 
    array (
      0 => '/data/inquiry2.local/src/templates/complete.tpl',
      1 => 1612686932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601fa6562b0d28_74788242 (Smarty_Internal_Template $_smarty_tpl) {
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
  <h2>お問い合わせフォーム</h2>

 
<?php echo $_smarty_tpl->tpl_vars['successful']->value;?>

<?php echo $_smarty_tpl->tpl_vars['decline']->value;?>



 
</div>
</body>
</html><?php }
}
