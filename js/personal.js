var AJAX_PATH = WEB_ROOT+"/ajax/personal.php";

function AddReg(){
    
    $.ajax({
        type: "POST",
        url: AJAX_PATH,
        data: "type=add",       
        success: function(splitResponse) {           
            var splitResp = response.split("[#]");             
            if(splitResp[0] == "ok")
                $("#frmModal").html(splitResp[1]);
            else
                alert(msgFail);
        },
        error:function(){
            alert(msgError);
        }
    });
    
    $("#frmModal").modal("show");
    
}//AddReg

function EditReg(id){
    var tip = "edita";
    $.ajax({
        type: "POST",
        url: AJAX_PATH,
        data: "type=edit&id="+id+"&tip="+tip,
        success: function(response) {           
            var splitResp = response.split("[#]");
                                    
            if(splitResp[0] == "ok")    
                $("#frmModal").html(splitResp[1]);
            else
                alert(msgFail);
        },
        error:function(){
            alert(msgError);    
        }
    });
    
    $("#frmModal").modal("show");
    
}//EditReg

function SaveReg(){
    
    var p = $("#page").val();
    var id = $("#id").val();
            
    $.ajax({
        type: "POST",
        url: AJAX_PATH,
        data: $("#frmGral").serialize(true),
        beforeSend: function(){         
            $("#loader").html(LOADER);
            $("#txtErrMsg").hide(0);
        },
        success: function(response) {           
            var splitResp = response.split("[#]");

            $("#loader").html("");
            
            if(splitResp[0] == "ok"){
                $("#frmModal").modal("hide");
                
                if(id == "") 
                    p = 0;
                    
                LoadPage(p);
            }else if(splitResp[0] == "fail"){
                $("#txtErrMsg").show();
                $("#txtErrMsg").show();
                $("#txtErrMsg").html(splitResp[1]);             
            }else{
                alert(msgFail);
            }
            
        },
        error:function(){
            alert(msgError);
        }
    });
        
}//SaveReg

function DeleteReg(id){
    
    swal({
      title: "Estas seguro?",
      text: "Al eliminar se perdera la informacion del usuario!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Si, Eliminar!",
      closeOnConfirm: false
    },
    function(){
      swal("Eliminado!", "Su registro ha sido borrado.", "success");
    });
    
    $.ajax({
        type: "POST",
        url: AJAX_PATH,
        data: "type=delete&id="+id,
        success: function(response) {           
            var splitResp = response.split("[#]");

            $("#tblContent").html("");
            
            if(splitResp[0] == "ok")
                LoadPage(p);
            else if(splitResp[0] == "fail")
                alert(msgFail);             
        },
        error:function(){
            alert(msgError);
        }
    });
        
}//DeleteReg

function ViewReg(id){
    
    $.ajax({
        type: "POST",
        url: AJAX_PATH,
        data: "type=view&id="+id,
        success: function(response) {           
            var splitResp = response.split("[#]");
                                    
            if(splitResp[0] == "ok"){               
                $("#frmModal").html(splitResp[1]);
            }else{
                alert(msgFail);
            }
        },
        error:function(){
            alert(msgError);
        }
    });
    
    $("#frmModal").modal("show");
    
}//ViewReg

function LoadMunicipios(){
    
    var id = $("#estadoId").val();
        
    $.ajax({
        type: "POST",
        url: AJAX_PATH,
        data: "type=loadMunicipios&estadoId="+id,
        beforeSend: function(){         
            $("#enumMunicipios").html(LOADER2);
        },
        success: function(response) {           
            var splitResp = response.split("[#]");

            $("#enumMunicipios").html("");
            
            if(splitResp[0] == "ok"){
                $("#enumMunicipios").html(splitResp[1]);
            }else if(splitResp[0] == "fail"){
                alert(msgFail);
            }
            
        },
        error:function(){
            alert(msgError);
        }
    });
    
}//LoadMunicipios

function LoadPage(p){
    
    $.ajax({
        type: "POST",
        url: AJAX_PATH,
        data: "type=loadPage&p="+p,
        beforeSend: function(){         
            $("#tblContent").html(LOADER3);
        },
        success: function(response) {   
            var splitResp = response.split("[#]");
            
            if(splitResp[0] == "ok")
                $("#tblContent").html(splitResp[1]);
            else
                alert(msgFail);
        },
        error:function(){
            alert(msgError);
        }
    });
    
}//LoadPage