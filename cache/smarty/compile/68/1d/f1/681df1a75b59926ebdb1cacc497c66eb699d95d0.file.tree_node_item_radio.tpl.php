<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 12:51:25
         compiled from "C:\xampp\htdocs\shop\admin1621ptqug\themes\default\template\helpers\tree\tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2231857ab699d4092a8-80066613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '681df1a75b59926ebdb1cacc497c66eb699d95d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin1621ptqug\\themes\\default\\template\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1470839118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2231857ab699d4092a8-80066613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab699d41cb21_11661136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab699d41cb21_11661136')) {function content_57ab699d41cb21_11661136($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
