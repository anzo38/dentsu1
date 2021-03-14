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

<tr><th>ID</th><th>名前</th><th>メールアドレス</th><th>ログインID</th><th>電話可能日</th></tr>
{* <tr><td>ID</td><td>{$result_name}</td><td>{$result_e_mail}</td><td>{$result_login_id}</td><td>{$result_date}</td></tr> *}


 {* {include file="$search_results_data.tpl"} *}



</table>
<form method="post" action="./download.php">
<input type="button" name="csv" value="CSVダウンロード">
</form>
</body>
</html>