<?php
/* Smarty version 3.1.43, created on 2022-09-22 16:48:55
  from '/Users/madjoulatoure/Desktop/prestashop_1/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_632c75d71951c0_45074850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '849aefddff2761656b2c84454467abde7ae7c6fd' => 
    array (
      0 => '/Users/madjoulatoure/Desktop/prestashop_1/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1663853232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632c75d71951c0_45074850 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
