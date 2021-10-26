
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="./src/main.css">
</head>
<body>
    <div class="container">
        <form class="form" id="login" method="post" action="logincode.php">
            <h1 class="form__title">Login</h1>

            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Username" name= "username">
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email" name= "email">
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password" name="password">
            </div>
            <button class="form__button" type="submit" name="btnsubmit">Continue</button>
            <p class="form__text">
                <a class="form__link" href="./indexnn.php" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>
    </div>
</body>
</html>


