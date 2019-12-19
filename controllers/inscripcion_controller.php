<?php
class inscripcion_controller extends base_controller{

    //************ACTUALIZAR BASICA

     #FUNCION PARA GUARDAR FORMULARIO DE SOLICITUD
     public function guardarSolicitudK()
     {
        //TABLA DATOS PERSONALES USUARIO
        $genero                  = $this->request['genero'];
        $fecha_nacimiento        = $this->request['fecha_nacimiento'];
        $documento               = $this->request['documento'];
        $ndocumento              = $this->request['ndocumento'];
       // $limite       = $this->request['limite'];
         $direccion               = $this->request['direccion'];
         $facebook                = $this->request['facebook'];
         $tiene_hijos             = $this->request['tiene_hijos'];
         $estudiante_activo       = $this->request['estudiante_activo'];
        $departamento            = $this->request['departamento'];
         $muni           = $this->request['muni'];
        $nivelacademicopersonal  = $this->request['nivelacademicopersonal'];
        if($nivelacademicopersonal=="8"){
            $carrera                 = NULL;
            $ce_procedencia          = NULL;
        }if ($nivelacademicopersonal=="1" ||$nivelacademicopersonal=="2" ){
            $carrera                 = NULL;
          $ce_procedencia          = $this->request['ce_procedencia'];

        }
        if ($nivelacademicopersonal!="1" and $nivelacademicopersonal!="2" and $nivelacademicopersonal!="8"){
          $ce_procedencia          = $this->request['ce_procedencia'];
          $carrera = $this->request['carrera'];
        }

        
        $d1           = new datospersonales_usuario();
        $idUsuario = $d1->insertarDUsuario($genero,$fecha_nacimiento,$documento,$ndocumento,$nivelacademicopersonal,$direccion
        ,$facebook,$tiene_hijos,$estudiante_activo,$departamento,$muni,$carrera,$ce_procedencia);

//TABLA DATOS PERSONALES ECONOMICOS

        $nivelacademico   = $this->request['nivelacademico'];
        $ingreso_familiar = $this->request['ingreso_familiar'];
        $personas_casa    = $this->request['personas_casa'];
        $d2               = new datospersonales_economicos();
        $datosEconomico   = $d2->insertarDEconomico($nivelacademico, $ingreso_familiar,$personas_casa);
//TABLA DATOS PERSONALES PROFESIONALES 

        $trabajo            = $this->request['trabajo'];
        if($trabajo=="No, nunca he trabajado"){
            $trabajabas = NULL;
            $roltrabajo = NULL;
            $trabajo_formal = NULL;
            $sueldo = NULL;
            $horario = NULL;
            $recursos_gastos = NULL;
        }else{ 
            $trabajabas         = $this->request['trabajabas'];
            $roltrabajo         = $this->request['roltrabajo'];
            $trabajo_formal     = $this->request['trabajo_formal'];
            $sueldo             = $this->request['sueldo'];
            $horario            = $this->request['horario'];
            $recursos_gastos    = $this->request['recursos_gastos'];
        }

        $d3                 = new datospersonales_profesionales();
        $datosProfesional   = $d3->insertarDProfesionales($trabajo, $trabajabas,$roltrabajo,$trabajo_formal,$sueldo,$trabajabas,$recursos_gastos);
         
         
//TABLA DATOS PERSONALES INFORMATIVOS

        $limite           = $this->request['limite'];
        $ingresar         = $this->request['ingresar'];
        $quees_kodigo     = $this->request['quees_kodigo'];
        $aceptado_kodigo  = $this->request['aceptado_kodigo'];
        $d4               = new datospersonales_informativos();
        $datosInformativo  = $d4->insertarDInformativos($limite, $ingresar,$quees_kodigo,$aceptado_kodigo);

//TABLA DATOS PERSONALES INTERESES

        $interes_tecnologia      = $this->request['interes_tecnologia'];
        $nivel_programacion      = $this->request['nivel_programacion'];
        
        $actividades             = $this->request['actividades'];
        $tiene_computadora       = $this->request['tiene_computadora'];
        $tiene_internet          = $this->request['tiene_internet'];
        $acceder_internet        = $this->request['acceder_internet'];
        $frecuencia_internet     = $this->request['frecuencia_internet'];
        $tiene_smartphone        = $this->request['tiene_smartphone'];
        $frecuencia_computadora  = $this->request['frecuencia_computadora'];
        $d5               = new datospersonales_intereses();
        $datosInteres = $d5->insertarDIntereses($interes_tecnologia, $nivel_programacion,$actividades,$tiene_computadora,$tiene_internet,$acceder_internet,$frecuencia_internet,$tiene_smartphone,$frecuencia_computadora);

         if ($datosEconomico == 0 && $datosProfesional==0 && $datosInformativo==0 && $datosInteres==0 ) {
             echo $this->responseJSON(array('mensaje' => 'success'));
                    exit;
         } else {
             echo $this->responseJSON(array('mensaje' => 'error'));
            exit;
         }

 
    }

// CONSULTAR MUNICIPIOS POR DEPARTAMENTO

    public function consultarMunicipios(){
    
        $d = new datospersonales_usuario();        

        $municipio = "";
        $id_departamento = $this->request["id_departamento"];
        $municipios = $d->consultarMunicipiosPorDepto($id_departamento);

        foreach ($municipios as $d) {            
            $municipio .= "<option value=" . $d['id_municipio'] . ">" . $d['municipio'] . "</option>";
            
        }
        echo $municipio;
        
    }
// FIN CONSULTAR MUNICIPIOS POR DEPARTAMENTO

}