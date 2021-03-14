<?php
/* Smarty version 3.1.36, created on 2021-03-10 13:20:51
  from '/data/inquiry2.local/src/templates/test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6048c7b3f29423_69339502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7dd49106f449421219530ab087c78d99c02fa6e' => 
    array (
      0 => '/data/inquiry2.local/src/templates/test.tpl',
      1 => 1615382152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6048c7b3f29423_69339502 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE >
<html >
<head>

<title>クリエイティブに関するお問い合わせ - 電通</title>



</head>

<body>

<form method="post" action="test1.php">
       <p>id <input type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"></p>
       <p>name <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"></p>
       <p>e_mail <input type="text" name="e_mail" value="<?php echo $_smarty_tpl->tpl_vars['e_mail']->value;?>
"></p>
       <p>login_id <input type="text" name="login_id" value="<?php echo $_smarty_tpl->tpl_vars['login_id']->value;?>
"></p>
       <p>date <input type="text" name="date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
"></p>

       
         

  
    <input type="submit" name="search" value="検索">

    </form>


 </form>


</body>
</html>
<?php }
}
