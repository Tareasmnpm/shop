<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 18:14:48
         compiled from "C:\xampp\htdocs\shop\themes\default-bootstrap\modules\cashondelivery\views\templates\hook\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2725857ab52f8994e58-98616507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9f73a7a9eb311c6e63bb3d3ef381032e412f74f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\themes\\default-bootstrap\\modules\\cashondelivery\\views\\templates\\hook\\payment.tpl',
      1 => 1470839205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2725857ab52f8994e58-98616507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab52f89a4860_23038143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab52f89a4860_23038143')) {function content_57ab52f89a4860_23038143($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
        <p class="payment_module">
            <a class="cash" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cashondelivery','validation',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>
" rel="nofollow">
            	<?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>

            	<span>(<?php echo smartyTranslate(array('s'=>'You pay for the merchandise upon delivery','mod'=>'cashondelivery'),$_smarty_tpl);?>
)</span>
            </a>
        </p>
    </div>
</div>
<?php }} ?>
