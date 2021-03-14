<!DOCTYPE html>
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
<h1>login.php</h1>
{$login_error}
<p>ログインE-mail</p>
<p class="is-error">{$email_error}</p>
<input type="text" placeholder="E-mail" name ="email" value="{$email}">
<p>ログインパスワード</p>
<p class="is-error">{$pass_error}</p>
<input type="password" placeholder="Password" name="loginpass" value="{$email}">
<input type="submit" name="submit_btn" value="ログインする">
</form>



{* <form method="post"  action="">
<h1>login.php</h1>
<p>ログインE-mail</p>
<p class="is-error">{$email_error}</p>

<input type="text" placeholder="E-mail" name ="email" value="{$email}">



<p>ログインパスワード</p>
<p class="is-error">{$pass_error}</p>

<input type="password" placeholder="Password" name="loginpass" value="{$email}">

<input type="submit" name="submit_btn" value="ログインする">
</form> *}
{* <form method="post" action="login.php?login=1">
<input type="hidden" name ="email" value="{$email}">
<input type="hidden" name="loginpass" value="{$email}">
</form> *}
</body>
</html>
