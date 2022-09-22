<?php
/* Smarty version 3.1.43, created on 2022-09-22 17:43:56
  from '/Users/madjoulatoure/Desktop/prestashop_1/themes/classic/templates/_partials/microdata/product-list-jsonld.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_632c82bc1ec5b2_40969136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ae1c368eefb264a6640fd650eda7b129712342c' => 
    array (
      0 => '/Users/madjoulatoure/Desktop/prestashop_1/themes/classic/templates/_partials/microdata/product-list-jsonld.tpl',
      1 => 1663853232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632c82bc1ec5b2_40969136 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ItemList",
    "itemListElement": [
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['products'], 'item', false, NULL, 'productsForJsonLd', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['total'];
?>
      {
        "@type": "ListItem",
        "position": <?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
,
        "name": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
",
        "url": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
      }<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['last'] : null)) {?>,<?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    ]
  }
<?php echo '</script'; ?>
>
<?php }
}
