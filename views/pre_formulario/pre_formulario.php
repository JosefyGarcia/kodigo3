<!DOCTYPE html>
    <html lang="en">
    <!-- BEGIN HEAD -->
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content="Panel administrador KODIGO" />
        <meta name="author" content="KODIGO" />
        
        <title>FORMULARIO DE POSTULACIÓN – KODIGO. | <?php echo GlobalValuesPage::TitleGlobal; ?></title>

        <!-- steps -->
        <link rel="stylesheet" href="<?php echo $this->_helpers->linkTo('plugins/steps/steps.css', 'Assets') ?>" />

        <?php $this->renderPartial('head', 'php') ?>
        <link rel="stylesheet"
        href="<?php echo $this->_helpers->linkTo('plugins/jquery-ui-1.12.1.custom/jquery-ui.min.css', 'Assets') ?>">
        <link href="<?php echo $this->_helpers->linkTo('plugins/select2/css/select2.css', 'Assets') ?>" rel="stylesheet"
        type="text/css">
        <link href="<?php echo $this->_helpers->linkTo('plugins/select2/css/select2-bootstrap.min.css', 'Assets') ?>"
        rel="stylesheet" type="text/css">
    </head>
    <!-- END HEAD -->
       <?php require_once "views/partials/_menu.php";?>
        <div class="page-wrapper">
         
            <!-- start page container -->
           
               
                
                <!-- end sidebar menu -->
                <!-- start page content -->
                <div class="page-content-wrapper">
                  
                    
                    <!-- wizard with validation-->
                    <div id="wizard" style="display:none;"></div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-body" style=" margin-top:50px">
                           
                             <center>
                                    <h2 ><b>FORMULARIO DE POSTULACIÓN – KODIGO. </b></h2>
                            </center>
                                <center>
                                    <h4>Para postular es necesario contar con correo electrónico. 
                                        <br>
                                        Deberás usar la misma dirección durante todo el proceso.
                                    </h4>
                                    </center>
                                    <div class="card-body " >
                                     <form id="form_inputs" >                   
                                        <fieldset >
                                            <div class="row" >
                                                <div class="col-md-12 col-sm-12" >
                                                    <div class="card-body " id="bar-parent2">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4">
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">

                                                        <div class="form-group" >
                                                                    <label >Primer Nombre:<span class="required"> * </span></label>
                                                                    
                                                                    <input type="text" class="form-control" maxlength="25" id="nombre1" name="nombre1" >
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Segundo Nombre:<span class="required"> * </span></label>
                                                                    
                                                                    <input type="text" class="form-control" maxlength="25" id="nombre2" name="nombre2" >
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Primer Apellido:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <input type="text" class="form-control"  maxlength="25" id="apellido" name="apellido" >
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Segundo Apellido:</label>
                                                                    <input type="text" class="form-control" maxlength="25" id="apellido2" name="apellido2" >
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Otros nombres:</label>
                                                                    <input type="text" class="form-control" maxlength="25" id="otrosnombres" name="otrosnombres" >
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <label>¿Cual es tu correo electrónico?<span class="required"> * </span></label>
                                                                    
                                                                    <input type="email"  class="form-control" maxlength="45"  id="correo_electronico" name="correo_electronico" >
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Celular: <span class="required"> * </span></label>
                                                                   
                                                                    <input type="text" class="form-control" id="celular" name="celular" >
                                                                </div>
                                                            
                                                                <div class="form-group">
                                                                    <label>¿Comó te enteraste de Kodigo?<span class="required"> * </span></label>
                                                                    
                                                                        <select class="form-control" id="forma_conocer_kodigo" name="forma_conocer_kodigo" onchange="conocerKodigo(this.value);">
                                                                            <option value=""></option>
                                                                            <option value="Google">Google</option>
                                                                            <option  value="Redes Sociales">Redes Sociales</option>
                                                                            <option  value="Periódico">Periódico </option>
                                                                            <option  value="Televisión">Televisión </option>
                                                                            <option  value="Radio">Radio </option>
                                                                            <option  value="Referencia de otra persona">Referencia de otra persona </option>
                                                                            
                                                                        </select>
                                                                    <input type="text" class="form-control" id="otraforma" name="forma_conocer_kodigo" style='display:none;'/>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>¿Cuántos días posees para recibir clase presencial de 2 horas entre semana?<span class="required"> * </span></label>
                                                                    
                                                                    <select class="form-control" id="dias_clase" name="dias_clase">
                                                                        <option value=""></option>
                                                                            <option value="2 dias">2 dias</option>
                                                                            <option value="3 dias">3 dias</option>
                                                                            <option value="4 dias">4 dias </option>
                                                                            <option value="Disponibilidad Completa">Disponibilidad Completa </option>
                                                                            <option value="No poseo esa Disponibilidad">No poseo esa Disponibilidad </option>
                                                                            
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>¿Has postulado con anterioridad a KODIGO? (Esta información no afecta en nada a tu proceso de selección)   <span class="required"> * </span></label>
                                                                 
                                                                    <div>
                                                                        <input type="radio" id="postulacion" name="postulacion" value="1" > Sí<br>
                                                                        <input type="radio" id="postulacion" name="postulacion" value="0" checked> No<br>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>¿Cuáles son las etapas que debes completar para postular a KODIGO?        <span class="required"> * </span></label>
                                                            
                                                                    <select class="form-control" id="etapas_kodigo" name="etapas_kodigo">
                                                                        <option value=""></option>
                                                                        <option value="Registro-Examen-Esperar que me llamen">Registro-Examen-Esperar que me llamen</option>
                                                                        <option  value="Registro-Examen-Curso básico-Entrevista">Registro-Examen-Curso básico-Entrevista</option>
                                                                        <option  value="Registro-Examen-Entrevista">Registro-Examen-Entrevista </option>
                                                                        <option  value="Registro-Pretrabajo-Entrevista-Preadmisión">Registro-Pretrabajo-Entrevista-Preadmisión</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>¿Cuál es la modalidad de clases en KODIGO?</label><span class="required"> * </span>
                                                                    
                                                                    <select class="form-control" id="modalidad_kodigo" name="modalidad_kodigo">
                                                                        <option value=""></option>
                                                                        <option value="Online">Online</option>
                                                                        <option  value="Presencial de Lunes a Viernes">Presencial de Lunes a Viernes</option>
                                                                        <option  value="Hybrida (Online y Presencial)">Hybrida (Online y Presencial) </option>            
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>¿Cuánto tiempo dura Bootcamp?<span class="required"> * </span></label>
                                                                    
                                                                    <select class="form-control" id="duracion_bootcamp" name="duracion_bootcamp">
                                                                        <option value=""></option>
                                                                        <option value="12 meses">12 meses</option>
                                                                        <option  value="6 meses">6 meses</option>
                                                                        <option  value="18 meses">18 meses</option>
                                                                        <option  value="24 meses">24 meses</option>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </fieldset>
                                 </form>
                                 <div class="row" >
                                            <div class="col-md-12 col-sm-12" >
                                                <div class="card-body " id="bar-parent2">
                                                    <div class="row">
                                                        <div class="col-md-5 col-sm-5">
                                                        </div>
                                                        <div class="col-md-2 col-sm-2">
                                                          <button  id="boton" name="boton" type="button" class="btn btn-warning btn-lg"  onclick="guardar()">Enviar Postulación</button> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
 
    </div>
   
	


<?php require_once "views/partials/_outputJs.php";?>
<?php require_once "views/partials/_footer.php";?>

<script src="<?php echo $this->_helpers->linkTo('plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js', 'Assets') ?>" ></script>
<script src="<?php echo $this->_helpers->linkTo('plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js', 'Assets') ?>"></script>
<!-- steps -->
<script src="<?php echo $this->_helpers->linkTo('plugins/steps/jquery.steps.js', 'Assets') ?>"></script>
<script src="<?php echo $this->_helpers->linkTo('plugins/select2/js/select2.js', 'Assets') ?>"></script>
<!--  -->
<script src="<?php echo $this->_helpers->linkTo('js/crud/ajax_call_alert_validacion.js', 'Assets') ?>"></script>
  <script>
        if(window.history.forward(1) != null)   window.history.forward(1);
    </script>
<!--solicitud.js -->

<script>

    $(document).ready(function(){
        $('#celular').mask('0000-0000');
  
            $('#forma_conocer_kodigo').select2({
                placeholder: 'Seleccione ',
                allowClear: false
            });

            $('#dias_clase').select2({
                placeholder: 'Seleccione ',
                allowClear: false
            });
    
            $('#etapas_kodigo').select2({
                placeholder: 'Seleccione ',
                allowClear: false
            });

            $('#modalidad_kodigo').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });

            $('#duracion_bootcamp').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });

            
 });

//Metodo para poder usar q ue solo sean letras y especios en los input 
    $.validator.addMethod("lettersonly", function (value, element) {
    return this.optional(element) || /^[ a-záéíóúüñ]*$/i.test(value);
}, "");

//funcion para guardar
    function guardar() {

           $('#form_inputs').validate({

            rules: {
                nombre1: {
                required : true,
                lettersonly: true
                 },
                correo_electronico:  {
                 required : true,
                 email: true
               },
               celular:"required",
               nombre2:{
                required : true,
                lettersonly: true
                 }, 
               apellido: {
                required : true,
                lettersonly: true
                 },
                apellido2: {
                required : false,
                lettersonly: true
                 },
                 otrosnombres: {
                required : false,
                lettersonly: true
                 },
               forma_conocer_kodigo:"required",
               dias_clase:"required",
               postulacion:"required",
               etapas_kodigo:"required",
               modalidad_kodigo:"required",
               duracion_bootcamp:"required"
                
            },

            messages: {
                nombre1: {
                     required: "Requerido",
                     lettersonly: "Ingrese solo letras y espacios"
                     },
                correo_electronico:  {
                required : "Requerido",
                email: "Ingrese un correo válido"
                 },
               celular:"Requerido",
               nombre2: {
                     required: "Requerido",
                     lettersonly: "Ingrese solo letras y espacios"
                     },
               apellido:{
                     required: "Requerido",
                        lettersonly: "Ingrese solo letras y espacios"
                     },
                apellido2:{
                       lettersonly: "Ingrese solo letras y espacios"
                     },
               otrosnombres: {
                        lettersonly: "Ingrese solo letras y espacios"
                 },
               forma_conocer_kodigo:"Requerido",
               dias_clase:"Requerido",
               postulacion:"Requerido",
               etapas_kodigo:"Requerido",
               modalidad_kodigo:"Requerido",
               duracion_bootcamp:"Requerido"

                
            }
        }); 
        
         if ($('#form_inputs').valid()) {
            $("#failSent").attr('style', 'display:none;');
            $("#successSent").attr('style', 'display:none;');
            $("#emptyRec").attr('style', 'display:none;');
           
        var rootLocation = 'https://localhost/kodigo3/pre_formulario/guardarpre_formularioK';
        var correo_electronico = $("#correo_electronico").val();
        var celular = $("#celular").val();
        var nombre1 = $("#nombre1").val();
        var nombre2 = $("#nombre2").val();
        var apellido = $("#apellido").val();
        var apellido2 = $("#apellido2").val();
        var otrosnombres = $("#otrosnombres").val();
        var forma_conocer_kodigo = $("#forma_conocer_kodigo").val();
        var dias_clase = $("#dias_clase").val();
        var postulacion = $("#postulacion").val();
        var etapas_kodigo = $("#etapas_kodigo").val();
        var modalidad_kodigo = $("#modalidad_kodigo").val();
        var duracion_bootcamp = $("#duracion_bootcamp").val();
        if ((etapas_kodigo==="Registro-Examen-Curso básico-Entrevista")&& 
        (modalidad_kodigo==="Hybrida (Online y Presencial)") && (duracion_bootcamp==="18 meses")){
        var respuestasCorrectas=true;
        //alert(respuestasCorrectas);
         callAlert();


    }else{
        var respuestasCorrectas=false;
        //alert(respuestasCorrectas);
         var rootLocation ='https://localhost/kodigo3/index/acceso_solicitud_negado/';
         window.location.href = rootLocation;
        }
            
                //var str = $("#form_inputs").serialize();
                $.ajax({
                    method: 'POST',
                    dataType: 'json',
                    url: rootLocation,
                    data: {correo_electronico:correo_electronico,celular:celular,nombre1:nombre1,nombre2:nombre2,apellido:apellido,apellido2:apellido2,otrosnombres:otrosnombres,forma_conocer_kodigo:forma_conocer_kodigo,dias_clase:dias_clase,postulacion:postulacion,etapas_kodigo:etapas_kodigo,modalidad_kodigo:modalidad_kodigo,duracion_bootcamp:duracion_bootcamp},
                    success: function (dt) {
                        //console.log(dt);
                        if (dt['mensaje'] == 'success') {
                            $("#successSent").removeAttr('style');
                            //callAlert();
                            //alert(dt['id']);
                        } else {
                            if (dt.mensaje == "existe") {
                                $("#emptyRec").removeAttr('style');
                                $('#emptyRec').html("Debe seleccionar");
                            } else {
                                $("#failSent").removeAttr('style');
                            }
                        }
                    },
                    error: function (d) {
                        $("#loading").attr('style', 'display:none;');
                        $("#successSent").attr('style', 'display:none;');
                        $("#failSent").removeAttr('style');
                    }
                });
            
        }
     }
    

    //funcion que levanta pop y redirige a la vista
    function callAlert() {
        swal({
            title: "Postulación Enviada",
            text: "Espera un momento,revisaremos tus respuestas",
            type: "success",
            showCancelButton: false,
            confirmButtonClass: 'btn-warning',
            confirmButtonText: "Continuar",
            closeOnConfirm: true
        }, function () {
            var rootLocation = "https://localhost/kodigo3/index/acceso_solicitud_nuevo/acceso_solicitud_aceptada";
           
            window.location.href = rootLocation;
        });
    }
</script>

<script>
//funcion que habilita otro input cuando selecciona otros en enteraste de kodigo
    function conocerKodigo(val){
      var element=document.getElementById("otraforma");
      if(val === "Otra")
       element.style.display="block";
      else  
       element.style.display="none";
    }
</script>


</body>
</html>