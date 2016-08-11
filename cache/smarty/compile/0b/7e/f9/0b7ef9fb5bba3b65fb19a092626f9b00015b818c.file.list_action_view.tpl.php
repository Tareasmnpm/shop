<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 12:56:47
         compiled from "C:\xampp\htdocs\shop\admin1621ptqug\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:734157ab6adf29f7e2-14775887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b7ef9fb5bba3b65fb19a092626f9b00015b818c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin1621ptqug\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1470839118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '734157ab6adf29f7e2-14775887',
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
  'unifunc' => 'content_57ab6adf2ab363_56696690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab6adf2ab363_56696690')) {function content_57ab6adf2ab363_56696690($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
