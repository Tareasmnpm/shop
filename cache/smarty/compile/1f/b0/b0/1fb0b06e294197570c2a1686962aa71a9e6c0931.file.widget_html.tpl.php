<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 12:22:30
         compiled from "C:\xampp\htdocs\shop\themes\ap_office\modules\leomanagewidgets\views\widgets\displaybottom\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156057ab62d6299088-00247610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fb0b06e294197570c2a1686962aa71a9e6c0931' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\themes\\ap_office\\modules\\leomanagewidgets\\views\\widgets\\displaybottom\\widget_html.tpl',
      1 => 1470848911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156057ab62d6299088-00247610',
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
  'unifunc' => 'content_57ab62d62b8495_95318007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab62d62b8495_95318007')) {function content_57ab62d62b8495_95318007($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html nopadding">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4>
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
