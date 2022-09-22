<?php
/* Smarty version 3.1.43, created on 2022-09-22 16:29:28
  from '/Users/madjoulatoure/Desktop/prestashop_1/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_632c714855d998_96177182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eee3dff67f71e818a60f006952c2575f7faffb3' => 
    array (
      0 => '/Users/madjoulatoure/Desktop/prestashop_1/themes/classic/templates/index.tpl',
      1 => 1663853232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632c714855d998_96177182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_760676151632c7148555f97_82694564', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_42082167632c7148557637_45800777 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_34032635632c7148559f41_23295334 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1420026677632c7148558f19_56058602 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34032635632c7148559f41_23295334', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_760676151632c7148555f97_82694564 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_760676151632c7148555f97_82694564',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_42082167632c7148557637_45800777',
  ),
  'page_content' => 
  array (
    0 => 'Block_1420026677632c7148558f19_56058602',
  ),
  'hook_home' => 
  array (
    0 => 'Block_34032635632c7148559f41_23295334',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42082167632c7148557637_45800777', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1420026677632c7148558f19_56058602', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
