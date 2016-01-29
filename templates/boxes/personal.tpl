<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h3 id="myModalLabel1">Agregar Pago</h3>
</div>
<div class="modal-body">
    <!-- START FORM -->
    {include file="{$DOC_ROOT}/templates/forms/{$page}.tpl"}
    <!-- END FORM -->
</div>
<div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    {if !$info.view}
    <button class="btn yellow" onclick="guardarPago()">{if $info.idReg}Actualizar{else}Guardar{/if}</button>
    <o style="float: left;padding: 0px;">
        <span class="reqIcon">*</span> Campos requeridos
    </o></br>{/if}
    <div align="center" id="loader"></div>
    <div align="center" id="txtErrMsg" class="alert alert-error hide"></div>
</div>
