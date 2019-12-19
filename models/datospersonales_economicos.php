<?php
class datospersonales_economicos extends ORM{

   #FUNCION PARA GUARDAR LOS DATOS PERSONALES_ECONOMICOS
   public function insertarDEconomico($nivelacademico,$ingreso_familiar,$personas_casa)
    {
        $result = 0;
        try {
            $sql = "INSERT INTO datospersonales_economicos(id_pre_formulario,id_nivel_academico,ingresos_familiares,cantidad_personas,carnet_alumno)
                   VALUES(:id_pre_formulario,:nivelacademico,:ingreso_familiar,:personas_casa,:carnet);";
            
            $all = $this->getConn()->prepare($sql);
            $all->bindParam(':id_pre_formulario',$_SESSION["vId_preformulario"], PDO::PARAM_INT);
            $all->bindParam(':carnet',$_SESSION["vCarnet"], PDO::PARAM_INT);
            $all->bindParam(':nivelacademico', $nivelacademico, PDO::PARAM_INT);
            $all->bindParam(':ingreso_familiar', $ingreso_familiar, PDO::PARAM_INT);
            $all->bindParam(':personas_casa', $personas_casa, PDO::PARAM_INT);
            $all->execute();
       } catch (Exception $e) {
           echo $e->getMessage();
       }
       return $result;
   }

    
}
