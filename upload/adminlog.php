<?php 
session_start();

	include("db.php");
	
?>






<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>




    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Enter your name"required>
        
        
        <input type="number" class="login-input" name="phone" placeholder="Enter your phone number" required>
        <input type="password" class="login-input" name="password" placeholder="Password"required>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="adminlogconf.php">Already have an account? Login Here</a></p>
    </form>

</body>
</html>