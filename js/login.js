$(window).load(function() {
    $('#username').bind("keypress", function(event){ 
        var key = event.which || event.keyCode;
        if(key == 13) DoLogin();
    })

    $('#password').bind("keypress", function(event){ 
        var key = event.which || event.keyCode;
        if(key == 13) DoLogin();
    })

});

function DoLogin(){
    $.ajax({
        type: "POST",
        url: WEB_ROOT+"/ajax/login.php",
        data: $("#frmLogin").serialize(true),
        beforeSend: function(){         
            $("#loader").html(LOADER);
            $("#txtErrMsg").hide(0);
        },
        success: function(response) {   
            console.log(response);
            var splitResp = response.split("[#]");
            
            $("#loader").html("");
            
            if(splitResp[0] == "ok"){               
              swal({
                  title: "Inicio de sesión exitoso!!",
                  type: "success",
                  closeOnConfirm: false,
                  showLoaderOnConfirm: true,
                },
                function(){
                  window.location.replace(WEB_ROOT);
                });
            }else if(splitResp[0] == "fail"){
               swal({
                  type: "warning",
                  title: "Atencion!",
                  text: splitResp[1],
                  timer: 1500,
                  showConfirmButton: false
                });            
            }else{
                alert("Ocurrio un error al cargar los datos.");
            }
            
        },
        error:function(){
              alert("Something went wrong...")
        }
    });
        
}//DoLogin