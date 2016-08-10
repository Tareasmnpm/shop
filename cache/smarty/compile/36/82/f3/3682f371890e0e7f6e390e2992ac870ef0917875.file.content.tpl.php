<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 18:14:45
         compiled from "C:\xampp\htdocs\shop\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2727057ab52f595d899-60469895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3682f371890e0e7f6e390e2992ac870ef0917875' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\themes\\default\\template\\content.tpl',
      1 => 1470839110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2727057ab52f595d899-60469895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab52f5990526_95028298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab52f5990526_95028298')) {function content_57ab52f5990526_95028298($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
