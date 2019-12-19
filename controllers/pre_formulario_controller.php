<?php
class pre_formulario_controller extends base_controller{
 /*para la vista es carpeta/vista y para la llamada en el navegador es el nombre del controlador y el nombre de la vista*/

//FUNCION GUARDAR 
 public function guardarpre_formularioK()
     {
        $correo_electronico          = $this->request['correo_electronico'];
        $celular                     = $this->request['celular'];
        $nombre1                     = $this->request['nombre1'];
        $nombre2                     = $this->request['nombre2'];
        $apellido                    = $this->request['apellido'];
        $apellido2                   = $this->request['apellido2'];
        $otrosnombres                = $this->request['otrosnombres'];
        $forma_conocer_kodigo        = $this->request['forma_conocer_kodigo'];
        $dias_clase                  = $this->request['dias_clase'];
        $postulacion                 = $this->request['postulacion'];
        $etapas_kodigo               = $this->request['etapas_kodigo'];
        $modalidad_kodigo            = $this->request['modalidad_kodigo'];
        $duracion_bootcamp           = $this->request['duracion_bootcamp'];

        $pre_f           = new pre_formulario();
        $datos_pre_f = $pre_f->insertarPreformulario(
             $correo_electronico,
             $celular,$nombre1,
             $nombre2, 
             $apellido, 
             $apellido2,
             $otrosnombres,
             $forma_conocer_kodigo,
             $dias_clase, 
             $postulacion, 
             $etapas_kodigo,
             $modalidad_kodigo, 
             $duracion_bootcamp);
       
         if ($datos_pre_f != -1 ) {
            echo $this->responseJSON(array('mensaje' => 'success'));
            //require_once('index_controller.php'); index_controller::index($datos_pre_f); 
            exit;
         } else {
             echo $this->responseJSON(array('mensaje' => 'error')); // muestra este msj porque no guarda
            exit;
         }
       

     }

}









