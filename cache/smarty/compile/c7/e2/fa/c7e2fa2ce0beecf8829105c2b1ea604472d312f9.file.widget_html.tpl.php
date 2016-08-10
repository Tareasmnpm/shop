<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 12:22:31
         compiled from "C:\xampp\htdocs\shop\themes\ap_office\modules\leomanagewidgets\views\widgets\displayhome\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:954457ab62d721c405-34385285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7e2fa2ce0beecf8829105c2b1ea604472d312f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\themes\\ap_office\\modules\\leomanagewidgets\\views\\widgets\\displayhome\\widget_html.tpl',
      1 => 1470848911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '954457ab62d721c405-34385285',
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
  'unifunc' => 'content_57ab62d7227f80_71634753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab62d7227f80_71634753')) {function content_57ab62d7227f80_71634753($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
