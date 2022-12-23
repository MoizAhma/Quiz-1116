<?php
class Database
{
    private $db; 
    function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=moiz",
             "root", 
             ""); 
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    function Insert($name, $reg, $clas)
    {
        $sql = "INSERT INTO `1116` (`id`, `name`, `reg_no`, `class`) VALUES (NULL, ?, ?, ?)";
        $st = $this->db->prepare($sql);
        if($st->execute(array($name, $reg,$clas))==true){
            header("Location: table.php");
            return true;
        }else{
            return false;
        }

        $db=null;

    }
}
?>
