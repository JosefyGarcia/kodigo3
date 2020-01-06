<?php
    if(!isset($_SESSION['vId_preformulario'])){
        Header('Location:/kodigo/index/acceso/acceso');
    }
    
$Datos = $_SESSION["vDatos"];
?>

<!DOCTYPE html>
    <html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        <meta name="description" content="Panel administrador KODIGO" />
        <meta name="author" content="KODIGO" />
        <title>SOLICITUD DE INGRESO – KODIGO. | <?php echo GlobalValuesPage::TitleGlobal; ?></title>

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
    <body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-blue white-sidebar-color logo-blue">
        <div class="page-wrapper">
            <?php require_once "views/partials/_header_top.php"; ?>
            <!-- start page container -->
            <div class="page-container">
                <!-- start sidebar menu -->
                
                <!-- end sidebar menu -->
                <!-- start page content -->
                <div class="page-content-wrapper">
                  
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                         
                        </div>
                    </div>
                    <!-- wizard with validation-->
                    <div id="wizard" style="display:none;"></div>
                    <div class="row" >
                        <div class="col-sm-12">
                            <div class="card-body" style=" margin-top:50px">
                                <div class="card-head">
                                    <header>SOLICITUD DE INGRESO – KODIGO.</header>
                                </div>
                                <div class="card-body ">
                                    <form id="form_inputs" >

                                        <h3>Datos Personales</h3>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="card-body " id="bar-parent2">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6">

                                                                <div class="form-group">
                                                                    <label>Primer Nombre:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <input type="text" class="form-control" id="nombre1" name="nombre1"   value="<?php echo $Datos["Vnombre1"]; ?>" disabled= true >
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Segundo Nombre:<span class="required"> * </span></label>
                                                                    <input type="text" class="form-control" id="nombre2" name="nombre2" disabled= true value="<?php echo $Datos["Vnombre2"]; ?>" >
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Primer Apellido:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <input type="text" class="form-control" id="apellido" name="apellido" disabled= true value="<?php echo $Datos["Vapellido"]; ?>" >
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Segundo Apellido:</label>
                                                                    <input type="text" class="form-control" id="apellido2" name="apellido2" disabled= true value="<?php echo $Datos["Vapellido2"]; ?>" >
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Otros nombres:</label>
                                                                    <input type="text" class="form-control" id="otrosnombres" name="otrosnombres" disabled= true value="<?php echo $Datos["Votrosnombres"]; ?>" >
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <label>Género:  <span class="required"> * </span></label>
                                                                    <select class="form-control" id="genero" name="genero">
                                                                        <option value=""></option>
                                                                        <option value="Femenino">Femenino</option>
                                                                        <option  value="Masculino">Masculino</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label">Fecha nacimiento:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="input-group">
                                                                        <input id="fecha_nacimiento" name="fecha_nacimiento" type="text"
                                                                        class="form-control" placeholder="AAAA/MM/DD" onChange="validarFech(this)">
                                                                        
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="form-group">
                                                                <label>Tipo Documento:<span class="required"> * </span></label>
                                                                <select class="form-control" id= "documento" name="documento"  onChange="selDocumento(this)">
                                                                    <option value=""></option>
                                                                    <?php foreach ($tipo_documentos as $tp) {?>
                                                                        <option value="<?php echo $tp['id_tipo_documento']?>"><?php echo $tp['nombre']?></option>
                                                                    <?php }?>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Número de documento:<span class="required"> * </span></label>
                                                                <input type="text" class="form-control" id="ndocumento" name="ndocumento"  disabled >
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Descríbete a ti mismo en máximo 50 caracteres:<span class="required"  > * </span></label>
                                                                <textarea class="form-control" rows="3" id="limite" name="limite" maxlength="50" ></textarea>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-6 col-sm-6">
                                                           
                                                            <div class="form-group">
                                                                <label>¿Por qué quieres ingresar a Kodigo?<span class="required"> * </span></label>
                                                                <textarea class="form-control" rows="3" id="ingresar" name="ingresar"  maxlength="100" ></textarea>
                                                            </div>
                                                            
                                                         

                                                            <div class="form-group">
                                                                <label>¿Conoces a algún estudiante o egresado de Kodigo?<span class="required"> * </span></label>
                                                                <div>
                                                                    <input type="radio" name="conocesestudiante_kodigo" value="1"> Sí<br>
                                                                    <input type="radio" name="conocesestudiante_kodigo" checked value="0"> No<br>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>En tus propias palabras, ¿qué crees que es Kodigo?<span class="required"> * </span></label>
                                                                <textarea class="form-control" rows="3" id="quees_kodigo" name="quees_kodigo"  maxlength="100" ></textarea>
                                                            </div>
                                                            

                                                            <div class="form-group">
                                                                <label>¿En qué departamento de El Salvador vives? <span class="required"> * </span></label>
                                                                <select class="form-control" id="departamento" name="departamento">
                                                                    <option value=""></option>
                                                                    <?php foreach ($departamento as $d) {?>
                                                                        <option value="<?php  echo  $d['id_departamento']?>"><?php echo ($d['departamento']) ?></option>
                                                                    <?php }?>
                                                                </select>
                                                            </div>


                                                    <!--   ####MUNICIPIOS######## -->

                                                    <div class="form-group">
                                                    <label>¿En qué Municipio vives? <span
                                                            class="required"> * </span></label>
                                                    <select class="form-control" id="muni"
                                                            name="muni">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            
                                                    <!--  FIN  ####MUNICIPIOS######## -->

                                                            
                                                            <div class="form-group">
                                                                <label>¿Cuál es tu dirección?<span class="required"> * </span></label>
                                                                <input type="text" class="form-control" id="direccion" name="direccion"  maxlength="200">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>En caso de ser aceptado en Kodigo, ¿crees poder asumir los costos en los que incurrirás por vivienda y/o transporte para asistir a clases?
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div>
                                                                    <input type="radio" name="aceptado_kodigo" checked value="1"> Sí<br>
                                                                    <input type="radio" name="aceptado_kodigo" value="0"> No<br>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label>En caso de no poder contactarte por medio de tu correo, intentaremos hacerlo por tu perfil de Facebook. Coloca el enlace aquí:</label>
                                                                <input type="text" class="form-control" id="facebook" name="facebook" >
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!--   ########################DATOS ACADEMICOS -->

                                    <h3>Datos Académicos</h3>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="card-body " id="bar-parent2">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">

                                                            <div class="form-group">
                                                                <label>¿Eres estudiante activo?<span class="required"> * </span></label>
                                                                <div>
                                                                    <input type="radio" name="estudiante_activo" checked value="1"> Sí<br>
                                                                    <input type="radio" name="estudiante_activo" value="0"> No<br>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label>Nivel académico:<span class="required"> * </span></label>
                                                                <select class="form-control" id="nivelacademicopersonal" onChange="nivelFuncion(this)" name="nivelacademicopersonal">
                                                                    <option value=""></option>
                                                                    <?php foreach ($nivelAcademico as $d) {?>
                                                                        <option value="<?php echo $d['id_nivel_academico']?>"><?php echo $d['tipo_nivel_academico']?></option>
                                                                    <?php }?>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>¿Qué carrera estudiaste / estás estudiando?</label>
                                                                <input type="text" disabled=true class="form-control" id="carrera" name="carrera"   maxlength="100"  ">
                                                                
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label>Nombre del centro de estudio al que asistes o asististe más reciente:<span class="required"> * </span></label>
                                                                <input type="text" disabled=true class="form-control" id="ce_procedencia"  maxlength="200"  name="ce_procedencia" >
                                                            </div>
                                                        </div>
                                                    </div>                                                      
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!--   ########################Información académica/profesional-->

                                    <h3>Información Profesional</h3>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">

                                                <div class="form-group">
                                                    <label>¿Has trabajado antes?<span class="required">*</span></label>
                                        <!--   Se llama a la funcion trabajoFuncion para los select-->
                                                    <select class="form-control" id="trabajo" name="trabajo" onChange="trabajoFuncion(this)" >
                                                        <option value=""></option>
                                                        <option value="Sí">Sí, estoy trabajando</option>
                                                        <option value="Sí, trabajé antes y no estoy trabajando actualmente">Sí, trabajé antes y no estoy trabajando actualmente</option>
                                                        <option value="No, nunca he trabajado">No, nunca he trabajado</option>
                                                    </select>
                                                </div>

                                             <!--  div donde se encuentran las opciones a ocultar-->

                                               
                                                <div class="form-group">
                                                    <label>¿Trabajas/trabajabas para una empresa o de manera independiente?</label>
                                                    <select class="form-control" id="trabajabas" name="trabajabas" disabled="true" >
                                                        <option value=""></option>
                                                        
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>¿Cuál es/era tu puesto de trabajo?</label>
                                                    <input type="text"  maxlength="100"  disabled="true"  id="roltrabajo" name="roltrabajo" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>¿Es/era un trabajo formal? (¿Recibías boletas de pago o estabas en planilla?)</label>
                                                    <div>
                                                        <input type="radio"  disabled="true"  id="trabajo1" name="trabajo_formal"  checked value="1"> Sí<br>
                                                        <input type="radio" disabled="true"  id="trabajo2" name="trabajo_formal"   value="0"> No<br>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>¿Cuánto recibes/recibías de sueldo al mes?</label>
                                                    <input type="text"  maxlength="4"  class="form-control" id="sueldo" name="sueldo"  disabled ="true">
                                                </div>

                                                <div class="form-group">
                                                    <label>¿Cuál es/era tu horario?</label>
                                                    <select class="form-control" disabled="true"  id="horario" name="horario">
                                                        <option value=""></option>
                                                        
                                                    </select>
                                                </div> 
                                                
                                            </div>

                                            <div class="col-md-6 col-sm-6">
   
                                            </div> 
                                        </div>  
                                    </fieldset>                                

                                   
                                    <!--   ######################## Socioeconomico-->


                                    <h3>Estudio Socioeconómico</h3>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">

                                                <div class="form-group">
                                                    <label>¿Cuál es el ingreso mensual de tu familia? (sin incluirte)
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <input type="text"  maxlength="4" class="form-control" id="ingreso_familiar" name="ingreso_familiar"  >
                                                </div>

                                                <div class="form-group">
                                                    <label>¿Cuántas personas más viven en tu casa? (sin incluirte)
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <input type="text"  maxlength="2" id="personas_casa" name="personas_casa" class="form-control" >
                                                </div>

                                                <div class="form-group">
                                                    <label>¿Cuál es el nivel de estudios más alto alcanzado por tus padres?<span class="required"> * </span></label>
                                                    <select class="form-control" id="nivelacademico" name="nivelacademico">
                                                        <option value=""></option>
                                                        <?php foreach ($nivelAcademico as $d) {?>
                                                            <option value="<?php echo $d['id_nivel_academico']?>"><?php echo $d['tipo_nivel_academico']?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>¿Tienes hijos?<span class="required"> * </span></label>
                                                    <div>
                                                        <input type="radio" name="tiene_hijos" value="1"> Sí<br>
                                                        <input type="radio" name="tiene_hijos" checked value="0"> No<br>
                                                    </div>
                                                </div>  
                                                   <div class="form-group">
                                                    <label>¿Qué recursos utilizarías para cubrir tus gastos?
                                                    <span class="required"> * </span>
                                                    </label>
                                                    <select class="form-control" id="recursos_gastos" name="recursos_gastos">
                                                        <option value=""></option>
                                                        <option value="ahorrospersonales">Utilizaría mis ahorros personales</option>
                                                        <option value="apoyofamilia">Mi familia me podría brindar apoyo económico</option>
                                                        <option value="prestamo">Pienso pedir un préstamo</option>
                                                        <option value="nopodria">No tendría cómo cubrir esos gastos</option>
                                                        <option value="nopodria">Utilizaría mi salario</option>
                                                    </select>
                                                </div>

                                            </div> 
                                        </div>
                                    </fieldset>

                                    <!--   ########################INTERESES -->



                                    <h3>Intereses</h3>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                
                                                <div class="form-group">
                                                    <label>Del 1 al 5, ¿cómo calificarías tu interés por la tecnología?
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <select class="form-control" id="interes_tecnologia" name="interes_tecnologia">
                                                        <option value=""></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>¿Qué nivel tienes programando?
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <select class="form-control" id="nivel_programacion" name="nivel_programacion">
                                                        <option value=""></option>
                                                        <option value="Nunca he programado">Nunca he programado</option>
                                                        <option value="basico">Básico</option>
                                                        <option value="intermedio">Intermedio</option>
                                                        <option value="avanzado">Avanzado</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>¿Cuál es tu actividad favorita relacionada a la tecnología?
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <select class="form-control" id="actividades" name="actividades">
                                                        <option value=""></option>
                                                        <option value="videojuegos">Videojuegos</option>
                                                        <option value="animaciones">Animaciones</option>
                                                        <option value="Realidad virtual">Realidad virtual</option>
                                                        <option value="Diseño web">Diseño web</option>
                                                        <option value="Programación/Desarrollo web">Programación/Desarrollo web</option>
                                                        <option value="Redes sociales">Redes sociales</option>
                                                        <option value="moviles">Móviles</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>¿Tienes computadora funcional en casa?<span class="required"> * </span></label>
                                                    <div>
                                                        <input type="radio" name="tiene_computadora" checked value="1"> Sí<br>
                                                        <input type="radio" name="tiene_computadora" value="0"> No<br>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>¿Tienes una conexión a Internet en casa?<span class="required"> * </span></label>
                                                    <div>
                                                        <input type="radio" name="tiene_internet" checked value="1"> Sí<br>
                                                        <input type="radio" name="tiene_internet" value="0"> No<br>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-6">

                                                <div class="form-group">
                                                    <label>¿Dónde accedes al internet normalmente?<span class="required"> * </span></label>
                                                    <select class="form-control" id="acceder_internet" name="acceder_internet">
                                                        <option value=""></option>
                                                        <option value="Con el wifi de mi casa">Con el wifi de mi casa</option>
                                                        <option value="Uso de datos móviles">Uso de datos móviles</option>
                                                        <option value="Con el wifi de un familiar/amigo">Con el wifi de un familiar/amigo</option>
                                                        <option value="Con el wifi del trabajo">Con el wifi del trabajo</option>
                                                        <option value="Con el wifi de la escuela o universidad">Con el wifi de la escuela o universidad</option>
                                                        <option value="En un ciber">En un ciber</option>
                                                        <option value="Con el wifi de lugares públicos">Con el wifi de lugares públicos</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>¿Con qué frecuencia usas internet?<span class="required"> * </span></label>
                                                    <select class="form-control" id="frecuencia_internet" name="frecuencia_internet">
                                                        <option value=""></option>
                                                        <option value="Todos los días">Todos los días</option>
                                                        <option value="Unas veces a la semana">Unas veces a la semana</option>
                                                        <option value="Unas veces al mes">Unas veces al mes</option>
                                                        <option value="Casi nunca">Casi nunca</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>¿Tienes smartphone?<span class="required"> * </span></label>
                                                    <div>
                                                        <input type="radio" name="tiene_smartphone" checked value="1"> Sí<br>
                                                        <input type="radio" name="tiene_smartphone" value="0"> No<br>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>¿Con qué frecuencia usas la computadora?<span class="required"> * </span></label>
                                                    <select class="form-control" id="frecuencia_computadora" name="frecuencia_computadora">
                                                        <option value=""></option>
                                                        <option value="Todos los días">Todos los días</option>
                                                        <option value="Unas veces a la semana">Unas veces a la semana</option>
                                                        <option value="Unas veces al mes">Unas veces al mes</option>
                                                        <option value="Casi nunca">Casi nunca</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>La próxima etapa consiste en realizar algunos exámenes. 
                                                    En caso de ser invitad@ a la próxima etapa, necesitarás una computadora 
                                                    y acceso a internet por al menos -- horas sin interrupción y un lugar 
                                                    donde puedas concentrarte. ¿Tienes cómo acceder a un espacio que cumpla con esas
                                                    características?<span class="required"> * </span></label>
                                                    <div>
                                                        <input type="radio" name="posibilidad_etapa_examen" checked value="1"> Sí<br>
                                                        <input type="radio" name="posibilidad_etapa_examen" value="0"> No<br>
                                                    </div>
                                                   
                                                </div> 
                                                 <div>

                                                <label style="display:none;" id="noPc"><b>No te preocupes, puedes ponerte en contacto al correo josselyn.quintanilla@kodigo.org y nosotros te 
                                                    proveeremos de una computadora para realizarlo en nuestras instalaciones.</b></label></div>
                                                    <br>

                                                <div class="form-group">
                                                    <label>Confirmo que todas las respuestas a este formulario son totalmente honestas:<span class="required"> * </span></label><br> 
                                                    <input type="radio" name="confirmo_honestidad" value="0"> Sí, confirmo.
                                                </div>

                                            </div>
                                        </div>  
                                       

                                    </fieldset>  



                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page content -->
        <!-- end chat sidebar -->
    </div>
    <!-- end page container -->
    <!-- start footer -->

<?php require_once "views/partials/_outputJs.php";?>
<script src="<?php echo $this->_helpers->linkTo('plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js', 'Assets') ?>" ></script>
<script src="<?php echo $this->_helpers->linkTo('plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js', 'Assets') ?>"></script>
<!-- steps -->
<script src="<?php echo $this->_helpers->linkTo('plugins/steps/jquery.steps.js', 'Assets') ?>"></script>
<script src="<?php echo $this->_helpers->linkTo('plugins/select2/js/select2.js', 'Assets') ?>"></script>
<!--  -->
<script src="<?php echo $this->_helpers->linkTo('js/crud/ajax_call_alert_validacion.js', 'Assets') ?>"></script>
<!--solicitud.js -->
<script src="<?php echo $this->_helpers->linkTo('js/solicitud/solicitudK.js', 'Assets') ?>"> </script>
  <script>
        if(window.history.forward(1) != null)   window.history.forward(1);
    </script>

<script>

//funcion que habilita otro input cuando selecciona otros en enteraste de kodigo

$("input[name='posibilidad_etapa_examen']").click(function(){
var value = $(this).val();
if(value=="0"){
  $("#noPc").fadeIn("fast");
}else{
  $("#noPc").fadeOut("fast");
}
});
</script>



<script>
 $(document).on('change', '#confirmo_honestidad', function(event) {
    
    var vRespuesta = $("#confirmo_honestidad").val()
    if(vRespuesta === "1"){
       //activar boton
    }else {
       //no activar boton
    }
    });


    function selDocumento(sel){
    varDoc = document.getElementById("ndocumento");
    if(sel.value==="1"||sel.value==="2"||sel.value==="3"){
        varDoc.disabled = false;
    }

}



    $(document).on('change', '#documento', function(event) {
    var tdocumento = $("#documento").val()
    if(tdocumento === "1"){
        $('#ndocumento').mask('00000000-0');
    }else if(tdocumento === "2"){
        $('#ndocumento').mask('0000-000000-0');
    }else if(tdocumento === "3"){
        $('#ndocumento').unmask();
    }
    });
  
    $('#fecha_nacimiento').mask('0000/00/00');

   
    
    $('#ingreso_familiar').mask('0000');
    $('#personas_casa').mask('00');
    $('#sueldo').mask('00000');
    $(document).ready(function () {
            //lenguaje
            
            $('#genero').select2({
                placeholder: 'Seleccione género',
                allowClear: false
            });
            $('#documento').select2({
                placeholder: 'Seleccione  documento',
                allowClear: false
            });
            $('#nivelacademicopersonal').select2({
                placeholder: 'Seleccione su nivel académico',
                allowClear: false
            });
            $('#depto_estudio_anterior').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#trabajo').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#trabajabas').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#horario').select2({
                placeholder: 'Seleccione ',
                allowClear: false
            });
            $('#nivelacademico').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#recursos_gastos').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#interes_tecnologia').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#nivel_programacion').select2({
                placeholder: 'Seleccione el nivel de programacion',
                allowClear: false
            });
            $('#actividades').select2({
                placeholder: 'Seleccione la actividad ',
                allowClear: false
            });
            $('#tiene_computadora').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#tiene_internet').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#acceder_internet').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#frecuencia_internet').select2({
                placeholder: 'Seleccione la frecuencia del uso del internet',
                allowClear: false
            });
            $('#tiene_smartphone').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#frecuencia_computadora').select2({
                placeholder: 'Seleccione la frecuencia del uso de la computadora',
                allowClear: false
            });
            $('#departamento').select2({
                placeholder: 'Seleccione departamento donde vive',
                allowClear: false
            });

            $('#muni').select2({
                placeholder: 'Seleccione municipio donde vive',
                allowClear: false
            });
        });


      function existeFecha(fecha){
      var fechaf = fecha.split("/");
      var day = fechaf[2];
      var month = fechaf[1];
      var year = fechaf[0];
      var date = new Date(year,month,'0');
      if((day-0)>(date.getDate()-0)){
            return false;
      }
      return true;
}

function validarFechaMenorActual(date){
      var x=new Date();
      var fecha = date.split("/");
      x.setFullYear(fecha[2],fecha[1]-1,fecha[0]);
      var today = new Date();
 
      if (x >= today)
        return false;
      else
        return true;
}



function validarFech(val){
fecha = document.getElementById("fecha_nacimiento").value;
       
        var fechaf = fecha.split("/");
        var year = fechaf[0];
       // alert("a;o"+year);
        var month = fechaf[1];
       // alert("mes"+month);
        var day = fechaf[2];
       // alert("dia"+day);
        var fechaN = new Date();
        var anoActual = fechaN.getFullYear();
    
        if(year < 1900 || year > (anoActual-10)){
       // alert("fallo el año");
        $(fecha_nacimiento).val('');
        }
        if(month > 12 || month <1){
       // alert("fallo el mes");
        $(fecha_nacimiento).val('');
        }
        if(day > 31 || day <1){
       // alert("fallo el dia");
        $(fecha_nacimiento).val('');
        
    
}
     
}

//FUNCION MUNICIPIO POR DEPARTAMENTO###########
$("#departamento").change(function(){        
    var baselocation ='/inscripcion/consultarMunicipios'
        var idDepto = document.getElementById("departamento").value;
        $.post(baselocation,{id_departamento: idDepto},function (data) {
            $("#muni").html(data);
        });
});



    </script>






<script>
 $(document).on('change', '#confirmo_honestidad', function(event) {
    
    var vRespuesta = $("#confirmo_honestidad").val()
    if(vRespuesta === "1"){
       //activar boton
    }else {
       //no activar boton
    }
    });


    function selDocumento(sel){
    varDoc = document.getElementById("ndocumento");
    if(sel.value==="1"||sel.value==="2"||sel.value==="3"){
        varDoc.disabled = false;
    }

}



    $(document).on('change', '#documento', function(event) {
    var tdocumento = $("#documento").val()
    if(tdocumento === "1"){
        $('#ndocumento').mask('00000000-0');
    }else if(tdocumento === "2"){
        $('#ndocumento').mask('0000-000000-0');
    }else if(tdocumento === "3"){
        $('#ndocumento').unmask();
    }
    });
  
    $('#fecha_nacimiento').mask('0000/00/00');

   
    
    $('#ingreso_familiar').mask('0000');
    $('#personas_casa').mask('00');
    $('#sueldo').mask('00000');
    $(document).ready(function () {
            //lenguaje
            
            $('#genero').select2({
                placeholder: 'Seleccione género',
                allowClear: false
            });
            $('#documento').select2({
                placeholder: 'Seleccione  documento',
                allowClear: false
            });
            $('#nivelacademicopersonal').select2({
                placeholder: 'Seleccione su nivel académico',
                allowClear: false
            });
            $('#depto_estudio_anterior').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#trabajo').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#trabajabas').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#horario').select2({
                placeholder: 'Seleccione ',
                allowClear: false
            });
            $('#nivelacademico').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#recursos_gastos').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#interes_tecnologia').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#nivel_programacion').select2({
                placeholder: 'Seleccione el nivel de programacion',
                allowClear: false
            });
            $('#actividades').select2({
                placeholder: 'Seleccione la actividad ',
                allowClear: false
            });
            $('#tiene_computadora').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#tiene_internet').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#acceder_internet').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#frecuencia_internet').select2({
                placeholder: 'Seleccione la frecuencia del uso del internet',
                allowClear: false
            });
            $('#tiene_smartphone').select2({
                placeholder: 'Seleccione',
                allowClear: false
            });
            $('#frecuencia_computadora').select2({
                placeholder: 'Seleccione la frecuencia del uso de la computadora',
                allowClear: false
            });
            $('#departamento').select2({
                placeholder: 'Seleccione departamento donde vive',
                allowClear: false
            });

            $('#muni').select2({
                placeholder: 'Seleccione municipio donde vive',
                allowClear: false
            });
        });


      function existeFecha(fecha){
      var fechaf = fecha.split("/");
      var day = fechaf[2];
      var month = fechaf[1];
      var year = fechaf[0];
      var date = new Date(year,month,'0');
      if((day-0)>(date.getDate()-0)){
            return false;
      }
      return true;
}

function validarFechaMenorActual(date){
      var x=new Date();
      var fecha = date.split("/");
      x.setFullYear(fecha[2],fecha[1]-1,fecha[0]);
      var today = new Date();
 
      if (x >= today)
        return false;
      else
        return true;
}



function validarFech(val){
fecha = document.getElementById("fecha_nacimiento").value;
       
        var fechaf = fecha.split("/");
        var year = fechaf[0];
       // alert("a;o"+year);
        var month = fechaf[1];
       // alert("mes"+month);
        var day = fechaf[2];
       // alert("dia"+day);
        var fechaN = new Date();
        var anoActual = fechaN.getFullYear();
    
        if(year < 1900 || year > (anoActual-10)){
       // alert("fallo el año");
        $(fecha_nacimiento).val('');
        }
        if(month > 12 || month <1){
       // alert("fallo el mes");
        $(fecha_nacimiento).val('');
        }
        if(day > 31 || day <1){
       // alert("fallo el dia");
        $(fecha_nacimiento).val('');
        
    
}
     
}

//FUNCION MUNICIPIO POR DEPARTAMENTO###########
$("#departamento").change(function(){        
    var baselocation = localRuta + '/inscripcion/consultarMunicipios'
        var idDepto = document.getElementById("departamento").value;
        $.post(baselocation,{id_departamento: idDepto},function (data) {
            $("#muni").html(data);
        });
});



    </script>


</body>
</html>