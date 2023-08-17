<?php
/* Smarty version 4.3.1, created on 2023-08-17 14:12:04
  from '/var/www/html/admin637bvwfg2eqpkr6hcdi/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64de0e94c893a3_83527121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7065d5777dfd2108719c41a3aa3ba6380f8e3d5' => 
    array (
      0 => '/var/www/html/admin637bvwfg2eqpkr6hcdi/themes/default/template/content.tpl',
      1 => 1692273398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64de0e94c893a3_83527121 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
