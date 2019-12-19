<?php
class datospersonales_profesionales extends ORM
{

       public function insertarDProfesionales($trabajo, $trabajabas,$roltrabajo,$trabajo_formal,$sueldo,$horario,$recursos_gastos)
    {
        $result = 0;
        try {
            $sql = "INSERT INTO datospersonales_profesionales
            (id_pre_formulario,
             trabajo_previo,
             tipo_trabajo,
             puesto_trabajo, 
             trabajo_formal,
             sueldo_mensual,
             horario,
             recursos_pagar,
             carnet_alumno)
             VALUES(:id_pre_formulario,:trabajo,:trabajabas,:roltrabajo,:trabajo_formal,:sueldo,:horario,:recursos_gastos,:carnet);";
            
            $all = $this->getConn()->prepare($sql);
            $all->bindParam(':id_pre_formulario',$_SESSION["vId_preformulario"], PDO::PARAM_INT);
            $all->bindParam(':carnet',$_SESSION["vCarnet"], PDO::PARAM_INT);
            $all->bindParam(':trabajo', $trabajo, PDO::PARAM_STR);
            $all->bindParam(':trabajabas', $trabajabas, PDO::PARAM_STR);
            $all->bindParam(':roltrabajo', $roltrabajo, PDO::PARAM_STR);
            $all->bindParam(':trabajo_formal', $trabajo_formal, PDO::PARAM_INT);
            $all->bindParam(':sueldo', $sueldo, PDO::PARAM_INT);
            $all->bindParam(':horario', $horario, PDO::PARAM_STR);//
            $all->bindParam(':recursos_gastos', $recursos_gastos, PDO::PARAM_STR);
            $all->execute();
       } catch (Exception $e) {
           echo $e->getMessage();
       }
       return $result;
   }

    

    
}
?>