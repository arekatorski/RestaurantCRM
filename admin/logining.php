<?php
session_start();
require_once('../src/conn.php');

if($conn->connect_errno!=0){
    echo "Error:".$conn->connect_errno." Because:".$conn->connect_error;
}else{
    $email = $_POST['email'];
    $passwd = $_POST['password'];
    $query = "SELECT * FROM users where email='$email' AND password='$passwd'";

    if($result = @$conn->query($query)){
        $users = $result->fetch_assoc();
        if($users>0){
            $result->free_result();
            header('Location: ../admin/adminpanel.php');
            $_SESSION["check"] = "yes";
        }else{
            $_SESSION["check"] = "no";
            header("Location: ../admin/login.php");
        }
    }

    $conn->close();
}

?>