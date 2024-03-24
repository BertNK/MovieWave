<?php
session_start();
if (!isset($_SESSION["user"])){
    header("Location: signup.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>MovieWave</title>
</head>

<body>
    <!-- Header -->
    <nav>
        <a class="logoblok">
            <img src="/assets/moviewave.png" class="logoblokimg">
        </a>
        <div class="dropdownblok">
        </div>
        <div class="signin_nav">
            <div class="signin_navspace"></div>
            <div class="signin_blok">
            </div>
            <button class="gobackdash" onclick="location.href='/index.php'">Go to the main menu..</button>
        </div>
        </div>
    </nav>
    <!-- Body -->
    <div class="dashcontainer">
        <div class="dashblok">

        </div>
    </div>
</body>

</html>