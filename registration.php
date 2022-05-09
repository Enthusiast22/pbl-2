<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');


?>
<?php
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);

        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $roll    = stripslashes($_REQUEST['roll']);
        $roll    = mysqli_real_escape_string($con, $roll);

        $prn    = stripslashes($_REQUEST['prn']);
        $prn    = mysqli_real_escape_string($con, $prn);
  
  
        $year    = stripslashes($_REQUEST['year']);
        $year    = mysqli_real_escape_string($con, $year);
  
        $branch    = stripslashes($_REQUEST['branch']);
        $branch    = mysqli_real_escape_string($con, $branch);

        $division   = stripslashes($_REQUEST['division']);
        $division   = mysqli_real_escape_string($con, $division);

        $gender   = stripslashes($_REQUEST['gender']);
        $gender  = mysqli_real_escape_string($con, $gender);

       
        
        $phone    = stripslashes($_REQUEST['phone']);
        $phone    = mysqli_real_escape_string($con, $phone);
        
        $phone    = stripslashes($_REQUEST['phone']);
        $phone    = mysqli_real_escape_string($con, $phone);

        

       
        $create_datetime = date("Y-m-d H:i:s");
        
       
        
        $query    = "INSERT into `users` ( username,email,roll,prn, branch, division, gender,year,phone,password,  create_datetime)
                     VALUES ('$username','$email','$roll','$prn','$branch',' $division', '$gender', '$year','$phone', '" . md5($password) . "', '$create_datetime')";
        $result   = (mysqli_query($con, $query) );
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
                  
            

        } 
        else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    }
     else {
?>


    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Enter your name"required>
        <input type="email" class="login-input" name="email" placeholder="Email" required />
        <input type="text" class="login-input" name="roll" placeholder="Enter your Roll Number" required>
        <input type="text" class="login-input" name="prn" placeholder="Enter your PRN Number" required>
        <input type="text" class="login-input" name="branch" placeholder="Enter your branch" required>
        <input type="text" class="login-input" name="division" placeholder="Enter your division" required>
        <input type="text" class="login-input" name="gender" placeholder="Enter your gender" required>

        <input type="text" class="login-input" name="year" placeholder="Enter year of study" required>
        <input type="number" class="login-input" name="phone" placeholder="Enter your phone number" required>
        <input type="password" class="login-input" name="password" placeholder="Password"required>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Already have an account? Login Here</a></p>
    </form>
<?php
    }
?>
</body>
</html>