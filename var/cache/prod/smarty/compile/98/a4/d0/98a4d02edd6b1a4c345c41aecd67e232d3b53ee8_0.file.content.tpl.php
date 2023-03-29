<?php
/* Smarty version 4.2.1, created on 2023-03-29 13:32:37
  from 'C:\xampp\htdocs\adorelifeshop\adorelifeshop-admin\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642413c585b528_61224790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98a4d02edd6b1a4c345c41aecd67e232d3b53ee8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\adorelifeshop\\adorelifeshop-admin\\themes\\new-theme\\template\\content.tpl',
      1 => 1678447298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642413c585b528_61224790 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
