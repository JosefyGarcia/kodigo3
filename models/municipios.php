
<?php
$id=$_SESSION["depto_id"];
class municipios extends ORM
{

 public function municipio()
    {
        $result = 0;
        try {
            $sql = "SELECT * FROM municipios where id_departamento = $id";
            $all = $this->getConn()->prepare($sql);
            $all->execute();
            $result = $all->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;
    }

    
}
?>