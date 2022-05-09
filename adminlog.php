<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<style>
    .login-input {
    padding: 25px;
}
.form{
    background: rgb(245 222 222);
}
</style>
<body>
<?php

    require('db.php');
    
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['submit'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `admins` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            echo "<script>alert('You logged in successfully');
            window.location.href='adminhome.html'; </script>";
        } else {
            echo "<div>
            <h3 class='text-danger'>Something went wrong :(</h3><br/>
            <p class='link'>Click here to <a href='adminlogin.html'>login</a> again.</p>
            </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">---ADMIN Login---</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" required/>
        <input type="password" class="login-input" name="password" placeholder="Password" required/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
  </form>
<?php
    }
?>
</body>
</html>