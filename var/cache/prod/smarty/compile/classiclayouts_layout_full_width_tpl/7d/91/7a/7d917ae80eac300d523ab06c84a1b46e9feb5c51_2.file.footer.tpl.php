<?php
/* Smarty version 4.2.1, created on 2023-03-29 13:17:39
  from 'C:\xampp\htdocs\adorelifeshop\themes\classic\templates\checkout\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64241043da7109_23878555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d917ae80eac300d523ab06c84a1b46e9feb5c51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\adorelifeshop\\themes\\classic\\templates\\checkout\\_partials\\footer.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64241043da7109_23878555 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade js-checkout-modal" id="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="js-modal-content"></div>
    </div>
  </div>
</div>

<div class="text-sm-center">
  <?php if ($_smarty_tpl->tpl_vars['tos_cms']->value != false) {?>
    <span class="d-block js-terms"><?php echo $_smarty_tpl->tpl_vars['tos_cms']->value;?>
</span>
  <?php }?>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php }
}
