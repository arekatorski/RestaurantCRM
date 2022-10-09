<?php
require("../src/conn.php");
     $seats = $_POST['seats'];
     $place = $_POST['place'];
     $query = "DELETE FROM `tables` WHERE `tables`.`id` =".$_POST['tableid'];
     if($conn->query($query) == TRUE){
         echo "Succes!";
     }
 header("Location: ../admin/tables.php");
    ?>