<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 12:22:30
         compiled from "C:\xampp\htdocs\shop\modules\leomanagewidgets\views\widgets\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1880357ab62d66cf387-71447039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cedb3a82af28685fec4d96a1da9e1fc2ee259cd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\modules\\leomanagewidgets\\views\\widgets\\widget_html.tpl',
      1 => 1470848912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1880357ab62d66cf387-71447039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab62d66f2614_53866736',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab62d66f2614_53866736')) {function content_57ab62d66f2614_53866736($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
