<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
<title>ログインフォーム</title>

</head>

<body>

{* {$result_id}<br> *}
<p>名前：{$result_name}{$no_data}</p><br>
<p>メールアドレス：{$result_e_mail}{$no_data}</p><br>

<p>カテゴリ：{$no_data}
{foreach $result_question as $k => $v}
 {if $v@last}
 {#$v#}  
 {else}
 {#$v#},
 {/if}
{/foreach}</p><br>
<p>カテゴリー：{#$result_category#}{$no_data}</p><br>
<p>電話可能日：{$result_date}{$no_data}</p><br>
<p>電話可能時間：{$result_time_start}-{$result_time_end}{$no_data}</p><br>
<p>お問い合わせ内容：{$result_comment}{$no_data}</p><br>
<p>ID：{$result_login_id}{$no_data}</p><br>



<a href="./member.php">一覧へ戻る</a>

<a href="./logout.php">ログアウト</a>

</body>
</html>
