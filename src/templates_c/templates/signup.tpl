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
<style>
.error{
	color:red;
}

#e_195{
  display:none;
}
</style>


</head>

<body>
  <h1>signup.tpl</h1>

   
	<p>名前:{$name}</p>
    <p>メールアドレス:{$e_mail}</p>
 	<p>お聞きしたいこと:
   {foreach $question as $key => $question_array}
   {$question_array}
   {/foreach}
   </p>
    <p>カテゴリー:{$category}</p>
    <p>電話可能日:{$date}</p>
    <p>電話可能時間帯:{$time_start}-{$time_end}</p>
    <p>コース:{$course}</p>
    <p>お問合わせ内容:{$comment}</p>





  {* サインアップの情報をPOSTする *}
    <form   method="post" action="contact.php?gui=3">


        <p>ID（半角英数字のみ）</p><span class="error">{$login_id_error}{$login_id_word_error}</span>
        <input type="text"name="login_id"  placeholder="E-mail" value={$login_id}><br>

        <p>パスワード</p>
        <span class="error">{$pass_error}</span>
        <span class="error">{$pass_match_error}</span>
        <input type="password"  name="pass" placeholder="Password"  value="{$pass}" >

        <p>パスワード再入力</p>
        <span class="error">{$pass2_error}</span>
        <input type="password"  name="pass2" placeholder="Password" value="{$pass2}">
        <p><input type="submit" name="to_confirm" value="確認"></p>
        {* コンファームにPOSTする情報 *}
        <input type="hidden" name="name" value="{$name}">
        <input type="hidden" name="e_mail" value="{$e_mail}">
        <input type="hidden" name="question[]" value="">
        <input type="hidden" name="category" value="">
        <input type="hidden" name="date" value="{$date}">
        <input type="hidden" name="time_start" value="{$time_start}">
        <input type="hidden" name="time_end" value="{$time_end}">

        <input type="hidden" name="course" value="{$course_confirm}">
        <input type="hidden" name="comment" value="{$comment}">
    
    </form>

    {* コンファームにPOSTする情報 *}
    {* <form   method="post" action="contact.php?gui=3">

      
    </form> *}


{* 修正する *}
    <form method="post" action="contact.php?gui=1">

        <input type="hidden" name="name" value="{$name}">
        <input type="hidden" name="e_mail" value="{$e_mail}">
         {foreach $question as $key => $question_v}
					 <td><label><input type="hidden" name="question[]" value="{$question_v}">{$question_v}<label></td>
				 {/foreach}

         {foreach $category as $key => $category_v}
         <input type="hidden" name="category" value="{$category_v}">
         {/foreach}
        <input type="hidden" name="date" value="{$date}">
        <input type="hidden" name="time_start" value="{$time_start}">
        <input type="hidden" name="time_end" value="{$time_end}">

        <select name="course" id="e_195">
         {foreach $course as $key => $course_v}
         <option type="hidden">{$course_v}</option>
         {/foreach}
        <select>
        {* <input type="hidden" name="course" value="{$course}"> *}
        <input type="hidden" name="comment" value="{$comment}">

    <input type="submit" value="修正する">
    </form>

</body>
</html>
