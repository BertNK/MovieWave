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
                    <input type='submit' name='submit' value='register' class="rowsubmit" required>
                </div>
                <a class="gotobutton" onclick="location.href='signup.php'">
                    If you already have a account, click me to login!
                </a>
            </form>
        </div>
    </div>
</body>

</html>