<?php
/* Smarty version 4.3.1, created on 2023-10-27 12:42:51
  from 'C:\xampp\htdocs\prestashop\admin2023\themes\new-theme\template\components\layout\information_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653b942b6720b3_90328626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '858917a083366583ffe11dbcb695d4cd7752dbd9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin2023\\themes\\new-theme\\template\\components\\layout\\information_messages.tpl',
      1 => 1697795479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653b942b6720b3_90328626 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['informations']->value)) && count($_smarty_tpl->tpl_vars['informations']->value) && $_smarty_tpl->tpl_vars['informations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul id="infos_block" class="list-unstyled">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['informations']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>
<?php }
}
}
