<?php

    try {
        $db1 = new PDO("mysql:host=localhost;dbname=moiz",
         "root", 
         ""); 
         $db1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch (PDOException $e) {
        die($e->getMessage());
    }


        $query1= "SELECT * FROM `1116`";
        $result1= $db1->query($query1);
        echo "<table border='5px'>";
        echo "Student Data";
        while($row=$result1->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['reg_no']."</td>
                <td>".$row['class']."</td>
            </tr>";
        }
        echo "</table>";
        
        // print_r($row);
        $db=null;
    
 


?>