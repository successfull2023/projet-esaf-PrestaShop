<?php
/* Smarty version 4.3.1, created on 2023-10-27 12:42:54
  from 'C:\xampp\htdocs\prestashop\admin2023\themes\default\template\controllers\not_found\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653b942e971411_16106946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9a82aff056987ec1d53dab1e5bab4bac6c9e199' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin2023\\themes\\default\\template\\controllers\\not_found\\content.tpl',
      1 => 1697795479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653b942e971411_16106946 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['controller']->value)) && !empty($_smarty_tpl->tpl_vars['controller']->value) && $_smarty_tpl->tpl_vars['controller']->value != 'adminnotfound') {?>
	<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The controller %s is missing or invalid.','sprintf'=>array($_smarty_tpl->tpl_vars['controller']->value)),$_smarty_tpl ) );?>
</h1>
<?php }?>
<a class="btn btn-default" href="javascript:window.history.back();">
	<i class="icon-arrow-left"></i>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to the previous page'),$_smarty_tpl ) );?>

</a>
<a class="btn btn-default" href="index.php">
	<i class="icon-dashboard"></i>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to the dashboard'),$_smarty_tpl ) );?>

</a>
<?php }
}
