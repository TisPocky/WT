<?php
    $car=array(array("Toyota",10,18),array("BMW",20,20),array("Sudan",20,18));
    for($row=0;$row<3;$row++){
        echo "Row Number $row";
        echo "<br>";
        echo"<ul>";
        for($col=0;$col<3;$col++){
            echo "<li>".$car[$row][$col]."</li><br>";
        }
        echo "</ul>";
    }
?>