<?php
/* Smarty version 4.2.1, created on 2023-03-29 13:33:14
  from 'C:\xampp\htdocs\adorelifeshop\adorelifeshop-admin\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642413ea629f10_26040949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a30c4dcead943e89699f61cd34438e470dcf650d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\adorelifeshop\\adorelifeshop-admin\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1678447298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642413ea629f10_26040949 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
