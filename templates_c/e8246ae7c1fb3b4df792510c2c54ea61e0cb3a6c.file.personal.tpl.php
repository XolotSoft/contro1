<?php /* Smarty version Smarty3-b7, created on 2016-01-28 12:39:37
         compiled from "/var/www//controlobra_1/templates/lists/personal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27697557956aa6069e54185-01294663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8246ae7c1fb3b4df792510c2c54ea61e0cb3a6c' => 
    array (
      0 => '/var/www//controlobra_1/templates/lists/personal.tpl',
      1 => 1454006317,
    ),
  ),
  'nocache_hash' => '27697557956aa6069e54185-01294663',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<input type="hidden" id="clienteA" value="<?php echo $_smarty_tpl->getVariable('clienteA')->value;?>
" disabled="true">
<input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('clienteId')->value;?>
" />
<table class="table table-bordered" id="sample_3">
    <thead>
    <tr>
        <th aling="center" width="100">No.</th>
        <th width="">Nombre</th>
        <th width="200">Usuario</th>
        <th width="100">Activo</th>
        <th width="100" class="nosort">Acciones</th>
     </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('personals')->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
        <tr>
            <td align="center" height="40"><?php echo $_smarty_tpl->getVariable('key')->value+1;?>
</td>       
            <td>&nbsp;<?php echo $_smarty_tpl->getVariable('item')->value['name'];?>
</td>
            <td align="center"><?php echo $_smarty_tpl->getVariable('item')->value['username'];?>
</td>
            <td align="center"><?php if ($_smarty_tpl->getVariable('item')->value['active']){?>Si<?php }else{ ?>No<?php }?></td>
            <td align="center">   
            <a href="javascript:void(0)" onClick="DeleteReg(<?php echo $_smarty_tpl->getVariable('item')->value['personalId'];?>
)" title="Eliminar">
                <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/action_delete.gif" class="spanDelete" title="Eliminar"/>
            </a>
            <a href="javascript:void(0)" onClick="EditReg(<?php echo $_smarty_tpl->getVariable('item')->value['personalId'];?>
)" title="Editar">
                <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/edit.gif" class="spanEdit"| title="Editar"/>
            </a>
            <a href="javascript:void(0)" onClick="editarCon(<?php echo $_smarty_tpl->getVariable('item')->value['personalId'];?>
)">
                <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/key.png" class="spanPass" title="Contrase&ntilde;a"/>
            </a>
            </td>
        </tr>
    <?php }} else { ?>
    <tr><td colspan="5" align="center" height="40">Ning&uacute;n registro encontrado.</td></tr>
    <?php } ?>
    </tbody>
</table>