<?php
/* Smarty version 3.1.36, created on 2021-02-17 13:13:03
  from '/data/inquiry2.local/src/templates/member.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_602d165f8a2a65_14370023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6acc20700dd8c21f1235bc258835726c0e25609' => 
    array (
      0 => '/data/inquiry2.local/src/templates/member.tpl',
      1 => 1613567577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602d165f8a2a65_14370023 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
<title>ログインフォーム</title>

</head>

<body>
<form id="form1" class="form_wrap" action="download.php" method="POST">
<input type="submit" value="csvダウンロード">
</form>
<a href="logout.php">ログアウト</a>
</body>
</html>

<?php }
}
