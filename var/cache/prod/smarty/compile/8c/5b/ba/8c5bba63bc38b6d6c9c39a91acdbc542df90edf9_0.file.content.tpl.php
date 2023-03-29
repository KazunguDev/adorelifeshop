<?php
/* Smarty version 4.2.1, created on 2023-03-29 13:32:10
  from 'C:\xampp\htdocs\adorelifeshop\adorelifeshop-admin\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642413aab13674_29092322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c5bba63bc38b6d6c9c39a91acdbc542df90edf9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\adorelifeshop\\adorelifeshop-admin\\themes\\default\\template\\content.tpl',
      1 => 1678447298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642413aab13674_29092322 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
