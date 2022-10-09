<?php
require("./src/conn.php");
     $date = $_POST['date'];
     $name = $_POST['name'];
     $query = "INSERT INTO reservations VALUES (NULL ,'$name', '$date')";
     if($conn->query($query) == TRUE){
         echo "Succes!";
     }
 header("Location: ./reservation.php");
    ?>