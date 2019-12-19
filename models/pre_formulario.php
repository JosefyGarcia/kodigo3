<?php
class pre_formulario extends ORM
{

   #FUNCION PARA GUARDAR PREFORMULARIO 
   public function insertarPreformulario(
    $correo_electronico,
    $celular,
    $nombre1, 
    $nombre2, 
    $apellido, 
    $apellido2,
    $otrosnombres,
    $forma_conocer_kodigo,
    $dias_clase,
    $postulacion,
    $etapas_kodigo,
    $modalidad_kodigo,
    $duracion_bootcamp)
    {
        $result = 0;
        try {
            $sql = "INSERT INTO pre_formulario
            (
            correo_electronico,
            celular,
            primer_nombre, 
            segundo_nombre, 
            primer_apellido, 
            segundo_apellido,
            otro_nombre,
            forma_conocer_kodigo,
            dias_clase,
            postulacion,
            etapas_kodigo,
            modalidad_kodigo,
            duracion_bootcamp)
            VALUES(
            :correo_electronico,
            :celular,
            :nombre1, 
            :nombre2, 
            :apellido, 
            :apellido2,
            :otrosnombres,
            :forma_conocer_kodigo,
            :dias_clase,
            :postulacion,
            :etapas_kodigo,
            :modalidad_kodigo,
            :duracion_bootcamp);";
            $all = $this->getConn()->prepare($sql);
            $all->bindParam(':correo_electronico', $correo_electronico, PDO::PARAM_STR);
            $all->bindParam(':celular', $celular, PDO::PARAM_STR);
            $all->bindParam(':nombre1', $nombre1, PDO::PARAM_STR);
            $all->bindParam(':nombre2', $nombre2, PDO::PARAM_STR);
            $all->bindParam(':apellido', $apellido, PDO::PARAM_STR);
            $all->bindParam(':apellido2', $apellido2, PDO::PARAM_STR);
            $all->bindParam(':otrosnombres', $otrosnombres, PDO::PARAM_STR);
            $all->bindParam(':forma_conocer_kodigo', $forma_conocer_kodigo, PDO::PARAM_STR);
            $all->bindParam(':dias_clase', $dias_clase, PDO::PARAM_STR);
            $all->bindParam(':postulacion', $postulacion, PDO::PARAM_INT);
            $all->bindParam(':etapas_kodigo', $etapas_kodigo, PDO::PARAM_STR);
            $all->bindParam(':modalidad_kodigo', $modalidad_kodigo, PDO::PARAM_STR);
            $all->bindParam(':duracion_bootcamp', $duracion_bootcamp, PDO::PARAM_STR);
            $all->execute();
            $id_preformulario =  $this->getConn()->lastInsertId();
            $_SESSION["vId_preformulario"]= $id_preformulario;
           
            $carne_id = str_pad($id_preformulario, 3, 0, STR_PAD_LEFT);
            $carne = (date("Y")-2000).$carne_id;

            $sql2 = "UPDATE pre_formulario SET carnet_alumno = :carne WHERE id_pre_formulario = :id_pre";
            $all = $this->getConn()->prepare($sql2);
            $all->bindParam(':id_pre', $id_preformulario, PDO::PARAM_INT);
            $all->bindParam(':carne', $carne, PDO::PARAM_INT);
            $_SESSION["vCarnet"]= $carne;
            $Datos = [
                "Vnombre1" => $nombre1,
                "Vnombre2" => $nombre2,
                "Vapellido" => $apellido,
                "Vapellido2" => $apellido2,
                "Votrosnombres" => $otrosnombres,
                ];
            $_SESSION["vDatos"]= $Datos;
           
  
            $all->execute();

            //$result = $id_preformulario;
          

            
       } catch (Exception $e) {
           $result = -1;

           echo $e->getMessage(); 
       }
       return $result;
   }


}
?>