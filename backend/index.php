<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
    <link rel="stylesheet" href="css.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
    <form method="post">
        <h1>Login</h1>
        <div class="textbox">
            <input type="text" placeholder="username">
            <i class='bx bxs-user'></i>
        </div>
        <div class="textbox">
            <input type="password" placeholder="password">
            <i class='bx bxs-lock-alt' ></i>
        </div>
        <div class="remember-forgot">
            <label>
                <input type="checkbox">Remember me
            </label>
            <a href="#">Forgot Password</a>
        </div>
        <input type="submit" class="btn" value="Login" name=login_btn>
        <div class="signup">
            <p>Dont have an account ?
            <a href="#">Sign Up</a></p>
        </div>
    </div>
    </form>
</body>
</html>