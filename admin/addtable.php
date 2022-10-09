<?php
require("../src/conn.php");
     $seats = $_POST['seats'];
     $place = $_POST['place'];
     $query = "INSERT INTO tables  VALUES (NULL ,$seats, '$place')";
     if($conn->query($query) == TRUE){
         echo "Succes!";
     }
 header("Location: ../admin/tables.php");
    ?>