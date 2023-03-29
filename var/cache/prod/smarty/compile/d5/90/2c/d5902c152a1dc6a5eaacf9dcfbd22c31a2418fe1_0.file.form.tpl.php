<?php
/* Smarty version 4.2.1, created on 2023-03-29 13:33:35
  from 'C:\xampp\htdocs\adorelifeshop\adorelifeshop-admin\themes\default\template\controllers\carrier_wizard\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642413ffa11760_63077714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5902c152a1dc6a5eaacf9dcfbd22c31a2418fe1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\adorelifeshop\\adorelifeshop-admin\\themes\\default\\template\\controllers\\carrier_wizard\\helpers\\form\\form.tpl',
      1 => 1678447298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/carrier_wizard/helpers/form/form_ranges.tpl' => 1,
  ),
),false)) {
function content_642413ffa11760_63077714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1038328509642413ff9b3493_98056453', "script");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_343321048642413ff9b8e66_58938472', "field");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "script"} */
class Block_1038328509642413ff9b3493_98056453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1038328509642413ff9b3493_98056453',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	var string_price = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Will be applied when the price is','js'=>1,'d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
';
	var string_weight = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Will be applied when the weight is','js'=>1,'d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
';
<?php
}
}
/* {/block "script"} */
/* {block "field"} */
class Block_343321048642413ff9b8e66_58938472 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_343321048642413ff9b8e66_58938472',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'zones') {?>
		<div class="ranges_not_follow warn" style="display:none">
			<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ranges are not correctly ordered:','d'=>'Admin.Shipping.Notification'),$_smarty_tpl ) );?>
</label>
			<a href="#" onclick="checkRangeContinuity(true); return false;" class="btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reordering','d'=>'Admin.Shipping.Notification'),$_smarty_tpl ) );?>
</a>
		</div>
		<?php $_smarty_tpl->_subTemplateRender('file:controllers/carrier_wizard/helpers/form/form_ranges.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="new_range">
			<a href="#" onclick="add_new_range();return false;" class="btn btn-default" id="add_new_range"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new range','d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
</a>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'logo') {?>
		<div class="col-lg-8">
			<input id="carrier_logo_input" class="hide" type="file" onchange="uploadCarrierLogo();" name="carrier_logo_input" />
			<input type="hidden" id="logo" name="logo" value="" />
			<div class="dummyfile input-group">
				<span class="input-group-addon"><i class="icon-file"></i></span>
				<input id="attachement_filename" type="text" name="filename" readonly="" />
				<span class="input-group-btn">
					<button id="attachement_fileselectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
						<i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

					</button>
				</span>
			</div>
			<p class="help-block">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Format:','d'=>'Admin.Shipping.Help'),$_smarty_tpl ) );?>
 JPG, GIF, PNG, WEBP. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filesize:','d'=>'Admin.Shipping.Help'),$_smarty_tpl ) );?>
 <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['max_image_size']->value);?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MB max.','d'=>'Admin.Shipping.Help'),$_smarty_tpl ) );?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Current size:','d'=>'Admin.Shipping.Help'),$_smarty_tpl ) );?>
 <span id="carrier_logo_size"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'undefined','d'=>'Admin.Shipping.Help'),$_smarty_tpl ) );?>
</span>.
			</p>
		</div>
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
