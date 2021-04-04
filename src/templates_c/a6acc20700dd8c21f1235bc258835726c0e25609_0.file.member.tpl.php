<?php
/* Smarty version 3.1.36, created on 2021-04-03 00:29:08
  from '/data/inquiry2.local/src/templates/member.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6067b6d40c9719_63540731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6acc20700dd8c21f1235bc258835726c0e25609' => 
    array (
      0 => '/data/inquiry2.local/src/templates/member.tpl',
      1 => 1616417818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6067b6d40c9719_63540731 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="./css/admin_lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./css/admin_lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./css/admin_lte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <title>検索フォーム</title>
<body class="hold-transition login-page">

    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">検索フォーム</h3>
        </div>
        
         <?php echo $_smarty_tpl->tpl_vars['no_data']->value;?>

        <form method="post" action="member.php?member=1" class="needs-validation">
            <div class="card-body">
               <div class="form-group">
                    <p>id:</p>
                    <input type="text" name="search_id" value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
>
                </div>
                <div class="form-group">
                    <p>name:</p>
                    <input type="text" name="search_name" value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
>
                </div>
                <div class="form-group">
                    <p>e_mail:</p>
                    <input type="text" name="search_e_mail" value=<?php echo $_smarty_tpl->tpl_vars['e_mail']->value;?>
>
                </div>
                <div class="form-group">
                    <p>login_id:</p>
                    <input type="text" name="search_login_id" value=<?php echo $_smarty_tpl->tpl_vars['login_id']->value;?>
>
                </div>
                <div class="form-group">
                    <p>date:</p>
                    <input type="date" name="search_date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">
                </div>
            </div>
                <div class="card-footer">
                    <input type="submit" name="search" class="btn btn-primary" value="検索する">
                    <input type="reset" class="btn btn-primary" value="リセット">
                    <form method="get" action=""> 
                        <a href="./logout.php" class="btn btn-primary">ログアウト</a>
                    </form>
                </div>   
        </form>



<table>
<tr>
<td>ID</td>
<td>名前</td>
<td>メールアドレス</td>
<td>電話可能日時</td>
<td>ログインID</td>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
<tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value, 'j', false, 'i');
$_smarty_tpl->tpl_vars['j']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['i']->value == "id") {?>
        
            <td>
            <form method="post" action="member.detail.php">
            <input  type="hidden" name="search_id"  value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
            <input  type="hidden" name="search_name"  value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
            <input  type="hidden" name="search_e_mail"  value="<?php echo $_smarty_tpl->tpl_vars['e_mail']->value;?>
">
            <input  type="hidden" name="search_login_id"  value="<?php echo $_smarty_tpl->tpl_vars['login_id']->value;?>
">
            <input  type="hidden" name="search_date"  value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">
            <input  type="submit" name="result_id"  value="<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
">
            </form>
            </td>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['i']->value == "name") {?>
           <td>  <?php echo $_smarty_tpl->tpl_vars['j']->value;?>
</td>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['i']->value == "e_mail") {?>
           <td> <?php echo $_smarty_tpl->tpl_vars['j']->value;?>
</td>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['i']->value == "date") {?>
            <td><?php echo $_smarty_tpl->tpl_vars['j']->value;?>
</td>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['i']->value == "login_id") {?>
           <td> <?php echo $_smarty_tpl->tpl_vars['j']->value;?>
</td>
        <?php }?>
       
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tr>

</table>
<a href="/download.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&name=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
&e_mail=<?php echo $_smarty_tpl->tpl_vars['e_mail']->value;?>
&login_id=<?php echo $_smarty_tpl->tpl_vars['login_id']->value;?>
&date=<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">CSVダウンロード</a>
      
     
    </div>
 



</body>
</html><?php }
}
