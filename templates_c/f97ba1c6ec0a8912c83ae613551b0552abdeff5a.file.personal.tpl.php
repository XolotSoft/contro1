<?php /* Smarty version Smarty3-b7, created on 2016-01-28 14:22:08
         compiled from "/var/www//controlobra_1/templates/personal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213226800756aa787011b931-77769307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f97ba1c6ec0a8912c83ae613551b0552abdeff5a' => 
    array (
      0 => '/var/www//controlobra_1/templates/personal.tpl',
      1 => 1454012300,
    ),
  ),
  'nocache_hash' => '213226800756aa787011b931-77769307',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">           
            <h3 class="page-title">
                <i class="fa fa-user fa-lg"></i> Usuarios
            </h3>
        </div>
    </div>
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>   
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption"><i class="fa fa-cogs"></i>Listado</div>
            <div class="actions"> 
                <label class="btn grey btn-outline btn-circle btn-sm" href="javascript:void(0)" onclick="AddReg()">
                        <i class="fa fa-user-plus"></i> Agregar
                </label>  
            </div>
        </div>
        <div class="portlet-body" id="tblContent">
            <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        </div>
    </div>
</div>
