<?php
/* Smarty version 3.1.43, created on 2022-09-22 17:51:28
  from '/Users/madjoulatoure/Desktop/prestashop_1/themes/child_classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_632c848091d699_83325661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d585782fc257e5364b4d1e8e05ee4ccad59e744' => 
    array (
      0 => '/Users/madjoulatoure/Desktop/prestashop_1/themes/child_classic/templates/index.tpl',
      1 => 1663861868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632c848091d699_83325661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2023531231632c8480914533_80336356', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1000065828632c84809159a3_17801486 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_2069225517632c8480918980_09705669 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_2096831364632c8480917813_96312428 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2069225517632c8480918980_09705669', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2023531231632c8480914533_80336356 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_2023531231632c8480914533_80336356',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1000065828632c84809159a3_17801486',
  ),
  'page_content' => 
  array (
    0 => 'Block_2096831364632c8480917813_96312428',
  ),
  'hook_home' => 
  array (
    0 => 'Block_2069225517632c8480918980_09705669',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1000065828632c84809159a3_17801486', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2096831364632c8480917813_96312428', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
