<?php
class datospersonales_usuario extends ORM

{
  
   #FUNCION PARA GUARDAR LOS DATOS PERSONALES_USUARIO
   public function insertarDUsuario(
    $genero,
    $fecha_nacimiento,
    $documento,
    $ndocumento,
    $nivelacademicopersonal,
    $direccion,
    $facebook,
    $tiene_hijos,
    $estudiante_activo,
    $departamento,
    $muni,
    $carrera,
    $ce_procedencia)
   {
       $result = 0;
       try {
           $sql = "INSERT INTO datospersonales_usuario (id_pre_formulario,
           genero,
           fecha_nacimiento,
           id_tipo_documento,
           numero_documento,
           id_nivel_academico,
           direccion,
           facebook,
           hijos,
           estudiante_activo,
           id_departamento,
           id_municipio,
           carrera_estudiada,
           centro_estudio,
           carnet_alumno)
          VALUES(:id_pre_formulario,:genero,:fecha_nacimiento,:documento,:ndocumento,:nivelacademicopersonal,:direccion,:facebook,:tiene_hijos,:estudiante_activo,:departamento,:muni,:carrera,:ce_procedencia,:carnet)";
           $all = $this->getConn()->prepare($sql);
           
           $all->bindParam(':id_pre_formulario',$_SESSION["vId_preformulario"], PDO::PARAM_INT);
           
           $all->bindParam(':genero', $genero, PDO::PARAM_STR);
           $all->bindParam(':fecha_nacimiento', $fecha_nacimiento, PDO::PARAM_STR);
           $all->bindParam(':documento', $documento, PDO::PARAM_INT);
           $all->bindParam(':ndocumento', $ndocumento, PDO::PARAM_STR);
           $all->bindParam(':nivelacademicopersonal', $nivelacademicopersonal, PDO::PARAM_STR);
           $all->bindParam(':direccion', $direccion , PDO::PARAM_STR);
           $all->bindParam(':facebook', $facebook  , PDO::PARAM_STR);
        // $all->bindParam(':correo  ', $correo  , PDO::PARAM_STR);
           $all->bindParam(':tiene_hijos', $tiene_hijos , PDO::PARAM_INT);
           $all->bindParam(':estudiante_activo', $estudiante_activo , PDO::PARAM_INT);
           $all->bindParam(':departamento', $departamento , PDO::PARAM_INT);
           $all->bindParam(':muni', $muni , PDO::PARAM_INT);
           $all->bindParam(':carrera', $carrera, PDO::PARAM_STR);
           $all->bindParam(':ce_procedencia', $procedencia , PDO::PARAM_STR);
           $all->bindParam(':carnet',$_SESSION["vCarnet"], PDO::PARAM_INT);          
           $all->execute();
           //$result =  $this->getConn()->lastInsertId();
       } catch (Exception $e) {
           echo $e->getMessage();
       }
       return $result;
    } 
    
    public function consultarMunicipiosPorDepto($depto){
        $result = 0;
        try {                    
            $sql = "SELECT * FROM municipios WHERE id_departamento= :id_depto";
            $all = $this->getConn()->prepare($sql);
            $all->bindParam(':id_depto', $depto, PDO::PARAM_INT);
            $all->execute();
            $result = $all->fetchAll(PDO::FETCH_ASSOC);                    
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $result;
    }

    public function consultarMunicipios(){
        $result = 0;
        try {
            $sql = "SELECT * FROM  municipios;";
            $all = $this->getConn()->prepare($sql);
            $all->execute();
            $result = $all->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $result;
    }
}