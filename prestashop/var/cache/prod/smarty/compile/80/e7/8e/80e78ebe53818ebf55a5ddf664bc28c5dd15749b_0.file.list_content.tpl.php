<?php
/* Smarty version 4.3.1, created on 2023-10-27 12:57:38
  from 'C:\xampp\htdocs\prestashop\modules\ps_mainmenu\views\templates\admin\_configure\helpers\list\list_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653b97a2844fa2_86237295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80e78ebe53818ebf55a5ddf664bc28c5dd15749b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\ps_mainmenu\\views\\templates\\admin\\_configure\\helpers\\list\\list_content.tpl',
      1 => 1675358719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653b97a2844fa2_86237295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1090467927653b97a2843366_93603570', "td_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_content.tpl");
}
/* {block "td_content"} */
class Block_1090467927653b97a2843366_93603570 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'td_content' => 
  array (
    0 => 'Block_1090467927653b97a2843366_93603570',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['type'])) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'link') {?>
		<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'html','UTF-8' ));?>
" target="_blank"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'html','UTF-8' ));?>
</a>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "td_content"} */
}
