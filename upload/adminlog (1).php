<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Adminlogin</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
        $username    = stripslashes($_REQUEST['username']);
        $username    = mysqli_real_escape_string($con, $username);

        $phone    = stripslashes($_REQUEST['phone']);
        $phone    = mysqli_real_escape_string($con, $phone);
        
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        
        $create_datetime = date("Y-m-d H:i:s");

        $query    = "INSERT into `admin1` (username, phone, password, create_datetime)
                     VALUES ('$username','$phone', '" . md5($password) . "', '$create_datetime')";

        $result   = mysqli_query($con, $query);

        if ($result) {
            echo "<h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='adminlogconf.php'>Login</a></p>";
        } else {
            echo "<h3>Required fields are missing.</h3><br/>
                  <p>Click here to <a href='adminlog.php'>registration</a> again.</p>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="email" class="login-input" name="username" placeholder="Email Address" required />
        <input type="number" class="login-input" name="phone" placeholder="Enter your phone number" required>
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already Have An Account? <a href="adminlogconf.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>