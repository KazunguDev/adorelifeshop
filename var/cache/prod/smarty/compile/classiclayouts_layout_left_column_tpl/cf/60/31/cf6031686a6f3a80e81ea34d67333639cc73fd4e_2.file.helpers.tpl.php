<?php
/* Smarty version 4.2.1, created on 2023-03-29 11:20:29
  from 'C:\xampp\htdocs\adorelifeshop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6423f4cda367d3_10192385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf6031686a6f3a80e81ea34d67333639cc73fd4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\adorelifeshop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6423f4cda367d3_10192385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\adorelifeshop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\cf\\60\\31\\cf6031686a6f3a80e81ea34d67333639cc73fd4e_2.file.helpers.tpl.php',
    'uid' => 'cf6031686a6f3a80e81ea34d67333639cc73fd4e',
    'call_name' => 'smarty_template_function_renderLogo_6022402996423f4cda2a2f5_57979769',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_6022402996423f4cda2a2f5_57979769 */
if (!function_exists('smarty_template_function_renderLogo_6022402996423f4cda2a2f5_57979769')) {
function smarty_template_function_renderLogo_6022402996423f4cda2a2f5_57979769(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_6022402996423f4cda2a2f5_57979769 */
}
