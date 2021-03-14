<?php
/* Smarty version 3.1.36, created on 2021-03-06 13:48:46
  from '/data/inquiry2.local/src/templates/mail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6043883ed589f8_37759659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd05e89c84909dde36ee7ec4d1061defcd8a4bb0c' => 
    array (
      0 => '/data/inquiry2.local/src/templates/mail.tpl',
      1 => 1615037792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6043883ed589f8_37759659 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['name']->value;?>

<?php echo $_smarty_tpl->tpl_vars['e_mail']->value;?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['question']->value, 'question_array', false, 'key');
$_smarty_tpl->tpl_vars['question_array']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['question_array']->value) {
$_smarty_tpl->tpl_vars['question_array']->do_else = false;
?>
 <?php echo $_smarty_tpl->tpl_vars['question_config_data']->value[$_smarty_tpl->tpl_vars['question_array']->value];?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo $_smarty_tpl->tpl_vars['category_config_data']->value[$_smarty_tpl->tpl_vars['category']->value];?>

<?php echo $_smarty_tpl->tpl_vars['date']->value;?>

<?php echo $_smarty_tpl->tpl_vars['time_start']->value;?>
〜<?php echo $_smarty_tpl->tpl_vars['time_end']->value;?>

<?php echo $_smarty_tpl->tpl_vars['course']->value;?>

<?php echo $_smarty_tpl->tpl_vars['comment']->value;
}
}
