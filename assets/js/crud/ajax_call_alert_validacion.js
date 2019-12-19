//funcion para guardar
function ajax_call_validacion(url_form,str,text1,text2,alert,mensajeRedireccion,urlRedireccion,tipoRedireccion){
    $.ajax({
        url: url_form,
        dataType: 'json',
        type: 'POST',
        data: str,
        success: function (dt) {
            if (dt.mensaje == 'success') {
                cleanInputs();
                if(alert == "1"){
                    alerta_redireccion(text1,mensajeRedireccion,urlRedireccion,tipoRedireccion);
                }
            } 
        },
        error: function (d) {
            alerta_redireccion2(text2,mensajeRedireccion,"error");
            $("#loading").attr('style', 'display:none;');
        }
    });
}

function alerta_redireccion(mensaje1,mensajeRedireccion,urlRedireccion,tipoRedireccion) {
    swal({
        title: mensaje1,
        text: mensajeRedireccion,
        type: tipoRedireccion,
        showCancelButton: false,
        confirmButtonClass: 'btn-warning',
        confirmButtonText: "Finalizar Proceso",
        closeOnConfirm: true
    }, function () {
        var rootLocation = urlRedireccion;
        window.location.href = rootLocation;
    });
}

function alerta_redireccion2(mensaje1,mensajeRedireccion,tipoRedireccion) {
    swal({
        title: mensaje1,
        text: mensajeRedireccion,
        type: tipoRedireccion,
        showCancelButton: false,
        confirmButtonClass: 'btn-warning',
        confirmButtonText: "¡Ups ocurrió un error!",
        closeOnConfirm: true
    }, function () {
        var rootLocation = localRuta + "index/acceso_solicitud_negado/acceso_solicitud_negado";
        window.location.href = rootLocation;
    });
}
function alerta_message(mensaje1,mensajeRedireccion,urlRedireccion,tipoRedireccion) {
    swal({
        title: mensaje1,
        text: mensajeRedireccion,
        type: tipoRedireccion,
        showCancelButton: false,
        confirmButtonClass: 'btn-warning',
        confirmButtonText: "Ok",
        closeOnConfirm: true
    }, function () {

    });
}
