<?php
/* Smarty version 4.3.1, created on 2023-08-17 14:12:33
  from '/var/www/html/admin637bvwfg2eqpkr6hcdi/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64de0eb1761bc1_07407245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dada4cd360eba64153a4551e36800fcba38d3d29' => 
    array (
      0 => '/var/www/html/admin637bvwfg2eqpkr6hcdi/themes/new-theme/template/content.tpl',
      1 => 1692273392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64de0eb1761bc1_07407245 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
