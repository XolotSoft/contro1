<?php /* Smarty version Smarty3-b7, created on 2016-01-28 14:22:27
         compiled from "/var/www//controlobra_1/templates/boxes/personal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89827899156aa7883185b01-55638850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f72854ae857c1248b3ad8c12fd42cd92ec074f07' => 
    array (
      0 => '/var/www//controlobra_1/templates/boxes/personal.tpl',
      1 => 1454012294,
    ),
  ),
  'nocache_hash' => '89827899156aa7883185b01-55638850',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h3 id="myModalLabel1">Agregar Pago</h3>
</div>
<div class="modal-body">
    <!-- START FORM -->
    <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/forms/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <!-- END FORM -->
</div>
<div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
    <button class="btn yellow" onclick="guardarPago()"><?php if ($_smarty_tpl->getVariable('info')->value['idReg']){?>Actualizar<?php }else{ ?>Guardar<?php }?></button>
    <o style="float: left;padding: 0px;">
        <span class="reqIcon">*</span> Campos requeridos
    </o></br><?php }?>
    <div align="center" id="loader"></div>
    <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
</div>
