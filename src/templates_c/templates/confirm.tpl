<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<script type="text/javascript" src="https://contact.dentsu.jp/img?id=12&t=9lwd&v=4be94c2c"></script>
<script type="text/javascript" src="https://contact.dentsu.jp/img?id=13&t=9lwd&v=d43c19a6"></script>
<script type="text/javascript" src="https://contact.dentsu.jp/img?id=14&t=9lwd&v=88eb5d97"></script>
</head>

<body>
<h1>confirm.tpl</h1>
	<p>名前:{$name}</p>
    <p>メールアドレス:{$e_mail}</p>
 	<p>お聞きしたいこと:}</p>
    <p>カテゴリー:{$category_assign}</p>
    <p>電話可能日:{$date}</p>
    <p>電話可能時間帯:{$time_start}-{$time_end}</p>
    <p>コース:{$course}</p>
    <p>お問合わせ内容:{$comment}</p><br>

    <p>ログインID:{$login_id}</p>
    <p>パスワード:{$pass}</p>
    <form method="post" action="contact.php?gui=4">

    <input type="hidden" name="name" value="{$name}">
    <input type="hidden" name="e_mail" value="{$e_mail}">
    {* <input type="hidden" name="question" value="">
    <input type="hidden" name="category" value=""> *}
    <input type="hidden" name="date" value="{$date}">
    <input type="hidden" name="time_start" value="{$time_start}">
    <input type="hidden" name="time_end" value="{$time_end}">
    <input type="hidden" name="course" value="{$course_confirm}">
    <input type="hidden" name="comment" value="{$comment}">

    <input type="hidden"name="login_id" >
    <input type="hidden"  name="pass" placeholder="Password">
  
    <input type="submit" value="送信する">

    </form>
<form  method="post" action="contact.php?gui=2">
    <input type="hidden" name="name" value="{$name}">
    <input type="hidden" name="e_mail" value="{$e_mail}">
    {* <input type="hidden" name="question" value="">
    <input type="hidden" name="category" value=""> *}
    <input type="hidden" name="date" value="{$date}">
    <input type="hidden" name="time_start" value="{$time_start}">
    <input type="hidden" name="time_end" value="{$time_end}">

    <input type="hidden" name="course" value="{$course_confirm}">
    <input type="hidden" name="comment" value="{$comment}">

    <input type="hidden"name="login_id" value="{$login_id}">
    <input type="hidden"  name="pass" placeholder="Password"  value="{$pass}">
   <input type="submit" name="to_signup" value="修正する">
</form>







 


</body>
</html>