<?php
require("../src/conn.php");
     $query = "DELETE FROM `reservations` WHERE `reservations`.`id` =".$_POST['reservationid'];
     if($conn->query($query) == TRUE){
         echo "Succes!";
     }
 header("Location: ../admin/reserv.php");
    ?>