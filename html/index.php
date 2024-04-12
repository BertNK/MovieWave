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
        </div>
        <div class="signin_nav">
            <div class="signin_navspace"></div>
            <div class="signin_blok">
                <div class="settings">

                </div>
                
                <button class="signintekst" onclick="location.href='pages/signin.php'">Dashboard</button>
            </div>
        </div>
    </nav>
    <header>
      <a href="movies/movie.php" class="headerbox1">
            <img src="assets/duneparttwo.webp" class="headerimg1">
      </a>
        <div class="headerbox2">
            <a class="headerboxtekst1">Dune: Part two.</a>
            <a class="headerboxtekst2">Paul Atreides unites with Chani and the Fremen while seeking revenge against the conspirators who destroyed his family.</a>
        </div>
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
    </div>

    <div class="container3">
        <div class="container3blok1">
        <a class="container3tekst1">If you're not a member already, sign up!</a>
        <a class="container3tekst1">Benefits:</a>
        <a class="container3tekst2"> ➕ Watch movies for completely free! ➕ </a>
        <a class="container3tekst2"> ➕ Create a watchlist with all your favorites. ➕ </a>
        <a class="container3tekst2"> ➕ Watch the latest movies free of charge! ➕ </a>
        <a class="container3tekst1">If you already have an account,</a>
        <a class="container3tekst2">login here:</a>
        <a class="container3button" onclick="location.href='pages/singin.php'">
                    Login
        </a>

        </div>
        <div class="container3blok2">
        <form class='signup_form' name="register" method="POST" action="pages/signup_logic.php">
                <a class='register_tekst2'>Sign Up</a>
                <div class="signin_row">
                    <p class="rowtekst">Username
                    <p>
                        <input type='tekst' name='username' class="rowinput" required>
                </div>
                <div class="signin_row">
                    <p class="rowtekst">Email
                    <p>
                        <input type='tekst' name='email' class="rowinput" required>
                </div>
                <div class="signin_row">
                    <p class="rowtekst">Password
                    <p>
                        <input type='password' name='password' class="rowinput" required>
                </div>
                <div class="signin_row">
                    <p class="rowtekst">Age
                    <p>
                        <input type='tekst' name='age' class="ageimput" required>
                </div>
                <div class="signin_row">
                    <p class="rowtekst">Terms and conditions:
                    <p>
                        <input type='checkbox' name='terms' class="rowcheckbox" required>
                </div>
                <div class="signin_row">
                    <input type='submit' name='submit' value='Register' class="rowsubmit" required>
                </div>
            </form>
        </div>
    </div>
    <!-- Footer -->
    <footer>
        <div class="footerblok">
            <div class="footerblok1">
                <img class="footericon" src="assets/twitter.png"></img>
                <img class="footericon" src="assets/instagram.png"></img>

            </div>
            <div class="footerblok2">
                <a class="footertekst">MovieWave 2024 © </a>
            </div>
        </div>
</body>

</html>
