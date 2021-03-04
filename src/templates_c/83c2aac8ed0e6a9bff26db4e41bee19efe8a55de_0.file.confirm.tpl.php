<?php
/* Smarty version 3.1.36, created on 2021-02-28 02:06:47
  from '/data/inquiry2.local/src/templates/confirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_603afab7ac9056_91573818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83c2aac8ed0e6a9bff26db4e41bee19efe8a55de' => 
    array (
      0 => '/data/inquiry2.local/src/templates/confirm.tpl',
      1 => 1614242630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603afab7ac9056_91573818 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="keywords" content="電通,Dentsu,でんつう,広告会社,広告代理店,GoodInnovation,新規お取引のご相談,投資家情報に関するお問い合わせ,株式に関するお問い合わせ,採用に関するお問い合わせ,クリエイティブに関するお問い合わせ,個人情報に関するお問い合わせ,その他のお問い合わせ" />
<meta name="description" content="電通へのお問い合わせに関しての情報をご覧頂けます。" />
<title>クリエイティブに関するお問い合わせ - 電通</title>
<link rel="stylesheet" type="text/css" href="mycss.css">
<link rel="stylesheet" type="text/css" href="index.css">

<link rel="stylesheet" type="text/css" href="https://contact.dentsu.jp/img?id=8&t=9lwd&v=4fa273ee">
<link rel="stylesheet" type="text/css" href="https://contact.dentsu.jp/img?id=9&t=9lwd&v=9deac94d">
<link rel="stylesheet" type="text/css" href="https://contact.dentsu.jp/img?id=10&t=9lwd&v=11ca2aa3">
<link rel="stylesheet" type="text/css" href="https://contact.dentsu.jp/img?id=11&t=9lwd&v=f2198aa5">
<?php echo '<script'; ?>
 type="text/javascript" src="https://contact.dentsu.jp/img?id=12&t=9lwd&v=4be94c2c"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="https://contact.dentsu.jp/img?id=13&t=9lwd&v=d43c19a6"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="https://contact.dentsu.jp/img?id=14&t=9lwd&v=88eb5d97"><?php echo '</script'; ?>
>
</head>

<body>
<h1>confirm.tpl</h1>
	<p>名前:<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
    <p>メールアドレス:<?php echo $_smarty_tpl->tpl_vars['e_mail']->value;?>
</p>
 	<p>お聞きしたいこと:</p>
    <p>カテゴリー:</p>
    <p>電話可能日:<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</p>
    <p>電話可能時間帯:<?php echo $_smarty_tpl->tpl_vars['time_start']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['time_end']->value;?>
</p>
    <p>コース:<?php echo $_smarty_tpl->tpl_vars['course']->value;?>
</p>
    <p>お問合わせ内容:<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</p><br>

    <p>ログインID:<?php echo $_smarty_tpl->tpl_vars['login_id']->value;?>
</p>
    <p>パスワード:<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
</p>
    <form method="post" action="contact.php?gui=4">

    <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
    <input type="hidden" name="e_mail" value="<?php echo $_smarty_tpl->tpl_vars['e_mail']->value;?>
">
        <input type="hidden" name="date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">
    <input type="hidden" name="time_start" value="<?php echo $_smarty_tpl->tpl_vars['time_start']->value;?>
">
    <input type="hidden" name="time_end" value="<?php echo $_smarty_tpl->tpl_vars['time_end']->value;?>
">
    <input type="hidden" name="course" value="<?php echo $_smarty_tpl->tpl_vars['course_confirm']->value;?>
">
    <input type="hidden" name="comment" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
">

    <input type="hidden"name="login_id" >
    <input type="hidden"  name="pass" placeholder="Password">
  
    <input type="submit" value="送信する">

    </form>
<form  method="post" action="contact.php?gui=2">
    <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
    <input type="hidden" name="e_mail" value="<?php echo $_smarty_tpl->tpl_vars['e_mail']->value;?>
">
        <input type="hidden" name="date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">
    <input type="hidden" name="time_start" value="<?php echo $_smarty_tpl->tpl_vars['time_start']->value;?>
">
    <input type="hidden" name="time_end" value="<?php echo $_smarty_tpl->tpl_vars['time_end']->value;?>
">

    <input type="hidden" name="course" value="<?php echo $_smarty_tpl->tpl_vars['course_confirm']->value;?>
">
    <input type="hidden" name="comment" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
">

    <input type="hidden"name="login_id" value="<?php echo $_smarty_tpl->tpl_vars['login_id']->value;?>
">
    <input type="hidden"  name="pass" placeholder="Password"  value="<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
">
   <input type="submit" name="to_signup" value="修正する">
</form>







 


</body>
</html><?php }
}
