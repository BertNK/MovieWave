<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>Sign in</title>
</head>

<body>
    <div class="signupcontainer">
    <div class="signupblok">
            <form class='signup_form' name="register" method="POST" action="signin_logic.php">
                <a class='register_tekst'>Sign in</a>
                <div class="signin_row">
                    <p class="rowtekst">Username
                    <p>
                        <input type='tekst' name='username' class="rowinput" required>
                </div>
                <div class="signin_row">
                    <p class="rowtekst">Password
                    <p>
                        <input type='password' name='password' class="rowinput" required>
                </div>
                <div class="signin_row">
                    <input type='submit' name='submit' value='Login' class="rowsubmit" required>
                </div>
                <a class="gotobutton" onclick="location.href='signup.php'">
                    If you dont have an account yet, click me to create one!
                </a>
                <a class="gotobutton2" onclick="location.href='/index.php'">
                    Back to the main menu...
                </a>
            </form>
        </div>
    </div>
</body>

</html>