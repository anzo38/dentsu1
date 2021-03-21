<?php
/* Smarty version 3.1.36, created on 2021-03-20 15:25:30
  from '/data/inquiry2.local/src/templates/mail_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6055955adb3a65_37277946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe4c629771b1536cbd7caba64418e0dbfc841fbc' => 
    array (
      0 => '/data/inquiry2.local/src/templates/mail_admin.tpl',
      1 => 1615168714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6055955adb3a65_37277946 (Smarty_Internal_Template $_smarty_tpl) {
?>お問合わせがありました。各担当者は確認後、対応をお願いします
<?php echo $_smarty_tpl->tpl_vars['auto_time']->value;?>

名前：<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

メールアドレス：<?php echo $_smarty_tpl->tpl_vars['e_mail']->value;?>

お聞きしたいこと：<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['question']->value, 'question_array', false, 'key');
$_smarty_tpl->tpl_vars['question_array']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['question_array']->value) {
$_smarty_tpl->tpl_vars['question_array']->do_else = false;
?>
 <?php echo $_smarty_tpl->tpl_vars['question_config_data']->value[$_smarty_tpl->tpl_vars['question_array']->value];?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
カテゴリー：<?php echo $_smarty_tpl->tpl_vars['category_config_data']->value[$_smarty_tpl->tpl_vars['category']->value];?>

電話可能日：<?php echo $_smarty_tpl->tpl_vars['date']->value;?>

電話可能時間帯：<?php echo $_smarty_tpl->tpl_vars['time_start']->value;?>
〜<?php echo $_smarty_tpl->tpl_vars['time_end']->value;?>

お問い合わせ内容：<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>

ID：<?php echo $_smarty_tpl->tpl_vars['login_id']->value;?>

<?php }
}
