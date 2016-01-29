{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}
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
            {include file="{$DOC_ROOT}/templates/lists/{$page}.tpl"}
        </div>
    </div>
</div>
