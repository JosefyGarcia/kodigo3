<?php
    if(!isset($_SESSION['vId_preformulario'])){
        Header('Location:/kodigo3/index/acceso/acceso');
    }
    
$Datos = $_SESSION["vDatos"];
?>
<!DOCTYPE html>
    <html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        <meta name="description" content="Panel administrador KODIGO" />
        <meta name="author" content="KODIGO" />
        <title>ACCESO SOLICITUD – KODIGO. | <?php echo GlobalValuesPage::TitleGlobal; ?></title>

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
                    <div id="wizard" ></div>
                    <div class="row" style="padding-top: 40px">
                        <div class="col-sm-12">
                            
                        <center>
                        <b><h2>¡Gracias por aplicar a Kodigo <?php echo $Datos["Vnombre1"]; ?>!<br><h2>
                        <h4><b>
                        Tu postulación ha sido recibida y será revisada dentro de los próximos días.<br> Si cumples con el perfil te estaremos contactando para darte más información <br> sobre las siguientes etapas del reclutamiento. 
                        Para mantenerte  al tanto de otras <br>noticias importantes, te recomendamos que nos sigas en <a style= "color: #ff6600" href="https://www.facebook.com/KOD1GO.ORG/">Facebook</a> e <a style= "color: #ff6600" href="https://www.instagram.com/kodigosv/">Instagram</a></b>
                        </h4>
                        </center>
                        
                        <div class="card-body ">
                                <center><img class="img-fluid" src="<?php echo $this->_helpers->linkTo('img/bienvenido.jpg', 'Assets') ?>" alt=""></center>

                            </div>
                        <center><a href="<?php echo $this->_helpers->linkTo('web/home') ?>" class="btn btn-warning btn-lg ">Ir a Home</a></center>

                        <br>  
                      
                    </div>
                </div>
               
            </div>
        </div>
        <!-- end page content -->
        <!-- end chat sidebar -->
    </div>
    <!-- end page container -->
    <!-- start footer -->
    <!-- end footer -->

<?php require_once "views/partials/_outputJs.php";?>

<script src="<?php echo $this->_helpers->linkTo('plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js', 'Assets') ?>" ></script>
<script src="<?php echo $this->_helpers->linkTo('plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js', 'Assets') ?>"></script>
<!-- steps -->
<script src="<?php echo $this->_helpers->linkTo('plugins/steps/jquery.steps.js', 'Assets') ?>"></script>
<script src="<?php echo $this->_helpers->linkTo('plugins/select2/js/select2.js', 'Assets') ?>"></script>
<!--  -->
<script src="<?php echo $this->_helpers->linkTo('js/crud/ajax_call_alert_validacion.js', 'Assets') ?>"></script>
<!--solicitud.js -->
  <script>
        if(window.history.forward(1) != null)   window.history.forward(1);
    </script>


</body>
</html>