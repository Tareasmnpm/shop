<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 12:51:25
         compiled from "C:\xampp\htdocs\shop\admin1621ptqug\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22557ab699da2f799-94340024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b44c4818b0c8cd41d5a6ee32e637e74b9eda71ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin1621ptqug\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1470839118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22557ab699da2f799-94340024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab699da37497_13987349',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab699da37497_13987349')) {function content_57ab699da37497_13987349($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
