
<?php
class departamentos extends ORM
{

 public function departamento()
    {
        $result = 0;
        try {
            $sql = "SELECT * FROM `departamento` WHERE 1";;
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