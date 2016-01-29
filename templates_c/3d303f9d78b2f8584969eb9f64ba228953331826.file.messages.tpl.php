<?php /* Smarty version Smarty3-b7, created on 2016-01-27 17:17:34
         compiled from "/var/www//controlobra_1/templates/boxes/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110757019756a9500e7058a0-40098555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d303f9d78b2f8584969eb9f64ba228953331826' => 
    array (
      0 => '/var/www//controlobra_1/templates/boxes/messages.tpl',
      1 => 1453936652,
    ),
  ),
  'nocache_hash' => '110757019756a9500e7058a0-40098555',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (count($_smarty_tpl->getVariable('errors')->value['value'])>0){?>
   <?php  $_smarty_tpl->tpl_vars["error"] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('errors')->value['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["error"]->key => $_smarty_tpl->tpl_vars["error"]->value){
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["error"]->key;
?>
       <div class="alert alert-<?php echo $_smarty_tpl->getVariable('errors')->value['type'][$_smarty_tpl->getVariable('key')->value];?>
">
       <button class="close" data-dismiss="alert"></button>
           <strong>!Atención!</strong> <?php echo $_smarty_tpl->getVariable('error')->value;?>

       </div>
   <?php }} ?>          
<?php }?>