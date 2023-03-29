<?php
/* Smarty version 4.2.1, created on 2023-03-29 11:19:57
  from 'C:\xampp\htdocs\adorelifeshop\modules\blockreassurance\views\templates\hook\displayBlockProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6423f4ad6b69c6_64348780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a667ec1baea52e0ade7b40453504075077eee444' => 
    array (
      0 => 'C:\\xampp\\htdocs\\adorelifeshop\\modules\\blockreassurance\\views\\templates\\hook\\displayBlockProduct.tpl',
      1 => 1649431700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6423f4ad6b69c6_64348780 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="blockreassurance_product">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block', false, 'key');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
        <div<?php if ($_smarty_tpl->tpl_vars['block']->value['type_link'] !== $_smarty_tpl->tpl_vars['LINK_TYPE_NONE']->value && !empty($_smarty_tpl->tpl_vars['block']->value['link'])) {?> style="cursor:pointer;" onclick="window.open('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['link'], ENT_QUOTES, 'UTF-8');?>
')"<?php }?>>
            <span class="item-product">
                <?php if ($_smarty_tpl->tpl_vars['block']->value['icon'] != 'undefined') {?>
                    <?php if ($_smarty_tpl->tpl_vars['block']->value['custom_icon']) {?>
                    <img <?php if ($_smarty_tpl->tpl_vars['block']->value['is_svg']) {?>class="svg invisible" <?php }?>src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['custom_icon'], ENT_QUOTES, 'UTF-8');?>
">
                    <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['icon']) {?>
                    <img class="svg invisible" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['icon'], ENT_QUOTES, 'UTF-8');?>
">
                    <?php }?>
                <?php }?>&nbsp;
            </span>
            <?php if (empty($_smarty_tpl->tpl_vars['block']->value['description'])) {?>
              <p class="block-title" style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['textColor']->value, ENT_QUOTES, 'UTF-8');?>
;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php } else { ?>
              <span class="block-title" style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['textColor']->value, ENT_QUOTES, 'UTF-8');?>
;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
              <p style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['textColor']->value, ENT_QUOTES, 'UTF-8');?>
;"><?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>
</p>
            <?php }?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <div class="clearfix"></div>
</div>
<?php }
}
