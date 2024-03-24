<?php
    include("pages/com.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>MovieWave</title>
</head>

<body>
    <!-- Header -->
    <nav>
        <a class="logoblok">
            <img src="assets/moviewave.png" class="logoblokimg">
        </a>
        <div class="dropdownblok">
            <a class="dropdowntekst">Home</a>
            <a class="dropdowntekst">Store</a>
            <a class="dropdowntekst">Catagories</a>
        </div>
        </div>
        <div class="signin_nav">
            <div class="signin_navspace"></div>
            <div class="signin_blok">
                <div class="settings">

                </div>
                <button class="signintekst" onclick="location.href='pages/signin.php'">Sign in</button>
            </div>
        </div>
    </nav>
    <header id="1">
      <a href="movies/movie.php" class="headerbox1">
            <img src="assets/duneparttwo.webp" class="headerimg1">
      </a>
        <a class="headerbox2">
            <img src="assets/placeholder.jpg" class="headerimg2">
        </a>

        <!-- <?php
        $stmt = $connection->query("SELECT * FROM user WHERE id = 1");
        $user = $stmt->fetch();

        echo $user['username'];
        echo "<br>";

        while ($row = $stmt->fetch()) {
            echo $row["username"] ."<br />\n";
        }
        ?> -->
    </header>
    <!-- Body -->
    <div class="container1">
        <!-- Movierow 1 -->
    <?php
    include("include/movierow1.php");
    ?>
        <!-- Movierow 2 -->
    <?php
    include("include/movierow2.php");
    ?>
        <!-- Movierow 3 -->
    <?php
    include("include/movierow3.php");
    ?>
        <!-- Movierow 4 -->
    <?php
    include("include/movierow4.php");
    ?>


    <div class="container3">

    </div>
    <!-- Footer -->
</body>

</html>
