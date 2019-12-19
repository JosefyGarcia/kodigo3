<?php
class datospersonales_intereses extends ORM
{

   #FUNCION PARA GUARDAR LOS DATOS PERSONALES_INTERESES
   public function insertarDIntereses($interes_tecnologia,$nivel_programacion,$actividades,$tiene_computadora,$tiene_internet,$acceder_internet,$frecuencia_internet,$tiene_smartphone,$frecuencia_computadora)
    {
        $result = 0;
        try {
            $sql = "INSERT INTO datospersonales_intereses(id_pre_formulario,puntaje_tecnologia,nivel_programacion,actividades,computadora,internet,acceso_internet,frecuencia_internet,smartphone,frecuencia_computadora,carnet_alumno)
                   VALUES(:id_pre_formulario,:interes_tecnologia,:nivel_programacion,:actividades,:tiene_computadora,:tiene_internet,:acceder_internet,:frecuencia_internet,:tiene_smartphone,:frecuencia_computadora,:carnet);";
           
           $all = $this->getConn()->prepare($sql);
            $all->bindParam(':id_pre_formulario',$_SESSION["vId_preformulario"], PDO::PARAM_INT);
            $all->bindParam(':carnet',$_SESSION["vCarnet"], PDO::PARAM_INT);
            $all->bindParam(':interes_tecnologia', $interes_tecnologia, PDO::PARAM_INT);
            $all->bindParam(':nivel_programacion', $nivel_programacion, PDO::PARAM_STR);
            $all->bindParam(':actividades', $actividades, PDO::PARAM_STR);
            $all->bindParam(':tiene_computadora', $tiene_computadora, PDO::PARAM_INT);
            $all->bindParam(':tiene_internet', $tiene_internet, PDO::PARAM_INT);
            $all->bindParam(':acceder_internet', $acceder_internet, PDO::PARAM_STR);
            $all->bindParam(':frecuencia_internet', $frecuencia_internet, PDO::PARAM_STR);
            $all->bindParam(':tiene_smartphone', $tiene_smartphone, PDO::PARAM_INT);
            $all->bindParam(':frecuencia_computadora', $frecuencia_computadora, PDO::PARAM_STR);
            
            $all->execute();
       } catch (Exception $e) {
           echo $e->getMessage();
       }
       return $result;
   }
}
?>