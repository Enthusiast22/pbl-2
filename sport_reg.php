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
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {

        $prn    = stripslashes($_REQUEST['prn']);
        $prn    = mysqli_real_escape_string($con, $prn);
  
  
        $sport = stripslashes($_REQUEST['sport']);
        $sport = mysqli_real_escape_string($con, $sport);
       
        $create_datetime = date("Y-m-d H:i:s");
        
        $query    = "INSERT into `sports` ( prn, sport,create_datetime)
                     VALUES ('$prn','$sport','$create_datetime')";
       
       $result   = (mysqli_query($con, $query));
        if ($result) {
            echo "<script>alert('You have registered successfully');
            window.location.href='userprof.php'; </script>";
        } 
        else {
            echo "<script>alert('Can not proceed<br>Try again later');
            window.location.href='userprof.php';  </script>";
        }
    }
     else {
?>
<h1>Sport's Registration</h1>

    <form class="form" action="" method="post">
        <input type="text" class="login-input" name="prn" placeholder="Enter your PRN Number" required>

<div class="form-check">
    <strong>Select Sport:</strong>
    <br>
  <input class="form-check-input" type="radio" name="sport" id="exampleRadios1" value="cricket" required>
   Cricket
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sport" id="exampleRadios2" value="Vollyball">
    Vollyball
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sport" id="exampleRadios3" value="Badminton" >
    Badminton
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sport" id="exampleRadios1" value="Chess" required>
   Chess
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sport" id="exampleRadios1" value="Football" required>
   Football
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sport" id="exampleRadios1" value="Basketball" required>
   Basketball
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sport" id="exampleRadios1" value="Kabaddi" required>
   Kabaddi
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sport" id="exampleRadios1" value="Table Tennis" required>
   Table Tennis
  </label>
</div>
        <!-- <input type="text" class="login-input" name="sport" placeholder="Enter your sport" required> -->
     </br>
        <input type="submit" name="submit" value="Register" class="login-button">
    </form>
<?php
    }
?>
</body>
</html>