<?php
session_start();
if (empty($_POST["username"]) || empty($_POST["password"])){
    header("Location: signin.php");
    exit();
}
include 'com.php';


    $username = $_POST["username"];
    $password = $_POST["password"];
   
    $stmt = $connection->prepare("SELECT * FROM user WHERE username=:user AND password=:pass");
    $stmt->execute(['user' => $username,'pass' => $password]);
    $user = $stmt ->fetch();
 
    if (!$user){
        header("Location: signin.php");
    } else {
        $_SESSION["user"] = $username;
        header("Location: dashboard.php");
    }
?>