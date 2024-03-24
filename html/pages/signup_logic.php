<?php
session_start();
if (empty($_POST["username"]) || empty($_POST["password"])){
    header("Location: dashboard.php");
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];

    if ($f = "admin" && $password = "admin"){
        $_SESSION["user"] = $username;
        header("Location: dashboard.php");
    } else{
        header("Location: signup.php");
    }
?>