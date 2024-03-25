<?php
session_start();
if (empty($_POST["username"]) || empty($_POST["password"])){
    header("Location: signup.php");
    exit();
}
include 'com.php';

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$age = $_POST["age"];

$stmt = $connection->prepare("INSERT INTO user (username, password, email, age) VALUES(:user, :pass, :mail, :age)");
$stmt->bindParam(":user", $username);
$stmt->bindParam(":pass", $password);
$stmt->bindParam(":mail", $email);
$stmt->bindParam(":age", $age);
$stmt->execute();

if ($f = "admin" && $password = "admin"){
    $_SESSION["user"] = $username;
    header("Location: dashboard.php");
} else{
    header("Location: signup.php");
}
?>