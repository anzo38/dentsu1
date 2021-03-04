<?php
/* Smarty version 3.1.36, created on 2021-01-25 13:13:25
  from '/var/www/html/templates/confirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600e4565bb2e56_77080736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cbb02f929da08575168abb2cea6df728e513f9a' => 
    array (
      0 => '/var/www/html/templates/confirm.tpl',
      1 => 1611499143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600e4565bb2e56_77080736 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
<title>コンタクトフォーム（確認）</title>

</head>
<body>


<!-- //変数の初期化 -->

  <form method="post" action="complete.php">

      <h1>confirm</h1>
      <body>
        <!-- // -->
      <p>氏名: <?php echo $_POST['name'];?>
</p>
       
      <p>趣味:<?php echo $_POST['hobby'];?>
</p>
      
      <P>好きな食べもの: <?php echo $_POST['food'];?>
</P>
     
      <P>お住まいの地域:  <?php echo $_POST['area'];?>
</P> 
      <P>ログインID:<?php echo $_POST['login'];?>
</P>
    
      <p><input type="submit" value="完了する"></p>
</form>

 

</body>
</htm<?php }
}
