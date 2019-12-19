<?php
class datospersonales_informativos extends ORM
{
   
    #FUNCION PARA EXTRAER LOS DATOS DE NIVEL ACADEMICO
    public function nivelAcademico()
    {
        $result = 0;
        try {
            $sql = "SELECT * FROM nivel_academico";
            $all = $this->getConn()->prepare($sql);
            $all->execute();
            $result = $all->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;
    }
    

       public function insertarDInformativos($limite, $ingresar,$quees_kodigo,$aceptado_kodigo)
    {
        $result = 0;
        try {
            $sql = "INSERT INTO datospersonales_informativos
            (
             id_pre_formulario,
             descripcion_personal,
             razon_ingreso,
             descripcion_kodigo,
             asumir_costos,
             carnet_alumno)
             VALUES(:id_pre_formulario,:limite,:ingresar,:quees_kodigo,:aceptado_kodigo,:carnet);";
            
            $all = $this->getConn()->prepare($sql);
            $all->bindParam(':id_pre_formulario',$_SESSION["vId_preformulario"], PDO::PARAM_INT);
            $all->bindParam(':carnet',$_SESSION["vCarnet"], PDO::PARAM_INT);
            $all->bindParam(':limite', $limite, PDO::PARAM_STR); //Limite descripcion de ti mismo
            $all->bindParam(':ingresar', $ingresar, PDO::PARAM_STR);
            $all->bindParam(':quees_kodigo', $quees_kodigo, PDO::PARAM_STR);
            $all->bindParam(':aceptado_kodigo', $aceptado_kodigo, PDO::PARAM_STR);
            $all->execute();
       } catch (Exception $e) {
           echo $e->getMessage();
       }
       return $result;
   }

   
}
?>