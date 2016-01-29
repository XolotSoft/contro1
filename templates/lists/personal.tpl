{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}
<input type="hidden" id="clienteA" value="{$clienteA}" disabled="true">
<input type="hidden" name="id" id="id" value="{$clienteId}" />
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
    {foreach from=$personals.items item=item key=key}
        <tr>
            <td align="center" height="40">{$key + 1}</td>       
            <td>&nbsp;{$item.name}</td>
            <td align="center">{$item.username}</td>
            <td align="center">{if $item.active}Si{else}No{/if}</td>
            <td align="center">   
            <a href="javascript:void(0)" onClick="DeleteReg({$item.personalId})" title="Eliminar">
                <img src="{$WEB_ROOT}/images/icons/action_delete.gif" class="spanDelete" title="Eliminar"/>
            </a>
            <a href="javascript:void(0)" onClick="EditReg({$item.personalId})" title="Editar">
                <img src="{$WEB_ROOT}/images/icons/edit.gif" class="spanEdit"| title="Editar"/>
            </a>
            <a href="javascript:void(0)" onClick="editarCon({$item.personalId})">
                <img src="{$WEB_ROOT}/images/icons/key.png" class="spanPass" title="Contrase&ntilde;a"/>
            </a>
            </td>
        </tr>
    {foreachelse}
    <tr><td colspan="5" align="center" height="40">Ning&uacute;n registro encontrado.</td></tr>
    {/foreach}
    </tbody>
</table>