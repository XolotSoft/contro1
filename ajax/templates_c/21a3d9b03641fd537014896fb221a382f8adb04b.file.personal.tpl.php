<?php /* Smarty version Smarty3-b7, created on 2016-01-28 14:13:44
         compiled from "/var/www//controlobra_1/templates/forms/personal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78544556aa7678f3d7e9-44268666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21a3d9b03641fd537014896fb221a382f8adb04b' => 
    array (
      0 => '/var/www//controlobra_1/templates/forms/personal.tpl',
      1 => 1454011515,
    ),
  ),
  'nocache_hash' => '78544556aa7678f3d7e9-44268666',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="row-fluid">
    <div class="tab-pane" id="tab_5">
        <div class="portlet box blue"  style="margin-bottom:5px">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i><?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>Ingrese los <?php }?>Datos</div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal form-bordered">
                <input type="hidden" name="type" value="save" />
                <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('info')->value['id'];?>
" />
                <input type="hidden" name="tip" id="tip" value="<?php echo $_smarty_tpl->getVariable('tip')->value;?>
" />
                <input type="hidden" name="passwod" id="passwod" value="<?php echo $_smarty_tpl->getVariable('info')->value['passwd'];?>
" />
                    <div class="control-group">
                        <label class="control-label">
                            <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                                <span class="reqIcon">*</span>
                            <?php }?> Nombre:
                        </label>
                        <div class="controls">
                            <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="nombre" value="<?php echo $_smarty_tpl->getVariable('info')->value['nombre'];?>
" maxlength="60" />
                            <?php }else{ ?>
                                <?php echo $_smarty_tpl->getVariable('info')->value['nombre'];?>

                            <?php }?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                                <span class="reqIcon">*</span>
                            <?php }?> Tel&eacute;fono:</label>
                        <div class="controls">
                            <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="text" class="m-wrap span12" name="telefono" value="<?php echo $_smarty_tpl->getVariable('info')->value['telefono'];?>
" maxlength="15">
                             <?php }else{ ?>
                                <?php echo $_smarty_tpl->getVariable('info')->value['telefono'];?>

                            <?php }?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                                <span class="reqIcon">*</span>
                            <?php }?> Email:</label>
                        <div class="controls">
                            <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                                <input type="text" class="m-wrap span12" name="email"  value="<?php echo $_smarty_tpl->getVariable('info')->value['email'];?>
" maxlength="80"/>
                            <?php }else{ ?>
                                <?php echo $_smarty_tpl->getVariable('info')->value['email'];?>

                            <?php }?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                                <span class="reqIcon">*</span>
                            <?php }?> Usuario:</label>
                        <div class="controls">
                            <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                                <input type="text" class="m-wrap span12" name="usuario" value="<?php echo $_smarty_tpl->getVariable('info')->value['usuario'];?>
" maxlength="13" />
                            <?php }else{ ?>
                                <?php echo $_smarty_tpl->getVariable('info')->value['usuario'];?>

                            <?php }?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                                <span class="reqIcon">*</span>
                            <?php }?> Contrase&ntilde;a:</label>
                        <div class="controls">
                            <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                                <input type="text" class="m-wrap span12" name="passwd" value="" maxlength="13">
                            <?php }else{ ?>
                                <?php echo $_smarty_tpl->getVariable('info')->value['passwd'];?>

                            <?php }?>
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" >
                            <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                                <span class="reqIcon">*</span>
                            <?php }?> Tipo de usuario:</label>
                        <div class="controls">
                            <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <select class="m-wrap span12" name="tipo" id="tipo">
                                <option value="1" <?php if ($_smarty_tpl->getVariable('info')->value['tipo']=="1"){?>selected<?php }?>>Direcci&oacute;n</option>
                                <option value="2" <?php if ($_smarty_tpl->getVariable('info')->value['tipo']=="2"){?>selected<?php }?>>Gerencia</option>
                                <option value="3" <?php if ($_smarty_tpl->getVariable('info')->value['tipo']=="3"){?>selected<?php }?>>Recepcion senior</option>
                                <option value="4" <?php if ($_smarty_tpl->getVariable('info')->value['tipo']=="4"){?>selected<?php }?>>Recepcion junior</option>
                            </select>
                             <?php }else{ ?>
                                <?php echo $_smarty_tpl->getVariable('info')->value['tipo'];?>

                            <?php }?>
                        </div>
                   </div>
                   <div class="control-group">
                        <label class="control-label" >Activo:</label>
                        <div class="controls">
                            <?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>
                            <input type="checkbox" name="activo" value="1" <?php if ($_smarty_tpl->getVariable('info')->value['activo']=="1"){?>checked<?php }?> />
                             <?php }else{ ?>
                                <?php if ($_smarty_tpl->getVariable('info')->value['activo']==1){?>S&iacute;<?php }else{ ?>No<?php }?>
                            <?php }?>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>