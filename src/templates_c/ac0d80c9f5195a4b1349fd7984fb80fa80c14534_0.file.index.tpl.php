<?php
/* Smarty version 3.1.36, created on 2021-01-25 13:13:26
  from '/var/www/html/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600e4566050d54_97658187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac0d80c9f5195a4b1349fd7984fb80fa80c14534' => 
    array (
      0 => '/var/www/html/templates/index.tpl',
      1 => 1611498298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600e4566050d54_97658187 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  
  <head>
  <title>サンプル</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
  </head>
  <style>
    .is-error{
      color:red;
      font-size: 14px;

    }
  </style>
  <body>
    <?php echo Smarty::SMARTY_VERSION;?>

    <h1>お問い合わせ</h1>
    <form  id="form" method="post" action="confirm.php">
      <p>name</p>
      <p class="is-error-name"></p>
      <!-- <span class="error"></span> -->
      <input type="text" name="name" value="" class="validate">
          
   <!-- <span><?php echo $_smarty_tpl->tpl_vars['test']->value;?>
</span> -->
   <p>趣味</p>
   <p class="is-error-hobby"></p>
     
       <span class="error"></span>
        <input type="checkbox" name="hobby[]" value="ギター">ギター
        <input type="checkbox" name="hobby[]" value="料理">料理
        <input type="checkbox" name="hobby[]" value="釣り">釣り
        <input type="checkbox" name="hobby[]" value=">旅行">旅行
    
        
      
        <p>好きな食べもの</p>
        <p class="is-error-food"></p>
        <input type="radio" name="food" value="たこ焼き">たこ焼き
        <input type="radio" name="food" value="パフェ"> パフェ
        <input type="radio" name="food" value="タピオカ">タピオカ
        <input type="radio" name="food"value="ラーメン">ラーメン

       <p>お住まいの地域</p>
       <p class="is-error-area"></p>
        <input type="radio" name="area" value="東京">東京
        <input type="radio" name="area" value="富山">富山
        <input type="radio" name="area" value="千葉">千葉
        <input type="radio" name="area" value="埼玉">埼玉

      <p>ログインID</p>
      <p class="is-error-login"></p>
        <input type="text" placeholder="Username" name="login">
        <p>パスワード</p>
        <p class="is-error-pass1"></p>
        <input type="password" placeholder="Password" name="pass1">
        <p>パスワード再入力</p>
        <p class="is-error-pass2"></p>
        <input type="password" placeholder="Password" name="pass2">
        <p><input type="submit" nema="btn_confirm" id="btn_confirm" value="確認する"></p>
        <p><input type="reset" value="取消する"></p>

    </form>

  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
  
  <?php echo '<script'; ?>
>
$(function(){
$("#form").validate({
  errorElement:'p', 
  
 
	rules: {
		name: {
			required:true,
			maxlength:10
    },
    food: {
			required: true
    },
    area: {
			required: true
    },
    login:{
      required: true
    },
    pass1:{
      required: true,
      minlength:6,
      passwordStrength:true
    },
    pass2:{
      required: true,
      equalTo: "#pass1"
    },
  
		'hobby[]': {
      required: true,
      rengelength: [1, 3],

		},
	
  },
  
	messages: {
		name: {
			required: "名前を入力して下さい"
    },

   food: {
			required: "選択してください"
    },
    area: {
			required: "選択してください"
    },
    login:{
      required: "IDを入力してください"
    },
    pass1:{
      required: "passwordを入力してください"
    },
    pass2:{
      required: "passwordwを再入力してください"
    },
  
    'hobby[]': {
      required: "選択してください（３つまで可）"
     }
    },

   
    
  errorPlacement: function(error, element){
    var name = element.attr('name');
    
        if(element.attr('name') === 'hobby[]'){
            error.appendTo($('.is-error-hobby'));

        } else if (element.attr('name') === name){
            error.appendTo($('.is-error-'+name));
           
      }else{
        error.appendTo($('.is-error-'+name));
      }
    },
    errorElement: "span",
    errorClass: "is-error",  
});
});
<?php echo '</script'; ?>
>
  </body>
  </html><?php }
}
