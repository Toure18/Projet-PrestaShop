<?php
/* Smarty version 3.1.43, created on 2022-09-23 01:35:11
  from '/Users/madjoulatoure/Desktop/prestashop_1/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_632cf12f22b182_26751452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '334f5d11c64c11ac3913085a17e2adec8812c63f' => 
    array (
      0 => '/Users/madjoulatoure/Desktop/prestashop_1/themes/classic/templates/_partials/helpers.tpl',
      1 => 1663885419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632cf12f22b182_26751452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/Users/madjoulatoure/Desktop/prestashop_1/var/cache/prod/smarty/compile/child_classiclayouts_layout_full_width_tpl/33/4f/5d/334f5d11c64c11ac3913085a17e2adec8812c63f_2.file.helpers.tpl.php',
    'uid' => '334f5d11c64c11ac3913085a17e2adec8812c63f',
    'call_name' => 'smarty_template_function_renderLogo_2123450895632cf12f20fa51_66459984',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_2123450895632cf12f20fa51_66459984 */
if (!function_exists('smarty_template_function_renderLogo_2123450895632cf12f20fa51_66459984')) {
function smarty_template_function_renderLogo_2123450895632cf12f20fa51_66459984(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_2123450895632cf12f20fa51_66459984 */
}
