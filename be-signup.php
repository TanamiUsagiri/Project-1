<?php
require 'be-connect.php';
    if(isset($_POST['submit'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $duplicate = mysqli_query($conn_npt, "select * from logindetails where username='$username'");
    if(mysqli_num_rows($duplicate) > 0){
        echo "<script>alert ('Username is already taken!')</script>";
    }
    else{
    $query = "insert into logindetails values ('','$username','$password')";
    mysqli_query($conn_npt,$query);
    echo "<script>alert ('Sign Up Successful!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
    <link rel="stylesheet" href="be-css.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
    <form method="POST" autocomplete="off">
        <h1>Sign Up</h1>
        <div class="textbox">
            <input type="text" id="username" name="username" placeholder="username" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="textbox">
            <input type="password" id="password" name="password" placeholder="password" required>
            <i class='bx bxs-lock-alt' ></i>
        </div>
        <input type="submit" class="btn" value="Sign Up" name="submit"><br>
        <div class="login">
            <p>Already have an account?
                <a href="be-index.php">Login</a></p>
        </div>
    </div>
    </form>
</body>
</html>