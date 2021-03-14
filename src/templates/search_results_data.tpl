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
<table>
{* {foreach $v as$v as $i => $j }
<tr><td>{$result_id}</td><td>{$result_name}</td><td>{$result_e_mail}</td><td>{$result_login_id}</td><td>{$result_date}</td></tr>
{/foreach} *}
{* <tr><th>ID</th><th>名前</th><th>メールアドレス</th><th>ログインID</th><th>電話可能日</th></tr> *}
<tr><td><form method="post" action="member.detail.php">
{* <input  type="hidden" name="search_id"> *}
<input  type="submit" name="search_id" value="{$result_id}">
</form></td><td>{$result_name}</td><td>{$result_e_mail}</td><td>{$result_login_id}</td><td>{$result_date}</td></tr>

</table>

{* <form method="post" action="member.detail.php">
<input  type="hidden" name="{$result_id}">
<input  type="submit" value="CSVダウンロード">
</form> *}
{* <a href="./member.detail.php" >CSVダウンロード<a> *}


<body>
<html>