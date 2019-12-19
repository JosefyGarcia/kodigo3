<?php
class index_controller extends base_controller{

    public function index(){
       
        $n = new datospersonales_informativos();
        $nivelAcademico = $n->nivelAcademico();

        $dep = new departamentos();
        $departamento = $dep->departamento();
        
        //MUNICIPIOS 
        $muUsuario = new datospersonales_usuario();
        $municipios = $muUsuario->consultarMunicipios();

        $t_doc = new tipo_documento();
        $tipo_documentos = $t_doc->tipo_documentos();

        
        require_once $this->_helpers->linkTo('ingresoKodigo.php', 'Views', 'require');
    }


     public function pre_formulario() {    	
             require_once $this->_helpers->linkTo('pre_formulario/pre_formulario.php', 'Views', 'require');
		
      }
       

     public function acceso_solicitud() {      
             require_once $this->_helpers->linkTo('acceso_solicitud/acceso_solicitudv.php', 'Views', 'require');
    
      }

      public function acceso_solicitud_negado() {      
             require_once $this->_helpers->linkTo('acceso_solicitud/acceso_solicitud_negado.php', 'Views', 'require');
    
      }
      
       public function acceso_solicitud_nuevo() {      
             require_once $this->_helpers->linkTo('acceso_solicitud/acceso_solicitud_aceptada.php', 'Views', 'require');
    
      }


      public function acceso() {      
       require_once $this->_helpers->linkTo('acceso/acceso.php', 'Views', 'require');

}


    
}