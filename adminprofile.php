<?php
session_start();


require("db.php");

?>
<?php

if(isset($_SESSION['username'])) 


$query = "SELECT * FROM admins WHERE username = '".$_SESSION['username']."'";

 

if($result = mysqli_query($con, $query)) {

  $row = mysqli_fetch_assoc($result);
  $username = $row['username'];
  
 

} else {

  die("Error with the query in the database");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Admin Profile Page </title>

    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

	    <link rel="stylesheet" href="style2.css">
</head>
<body>

  <div class="conatiner">
    <div class="main">
      <div class="topbar">
        <a href="logout.php">Logout</a>
      </div>
      
    </div>
  </div>
		
<div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">
 
            <!-- Ad Here -->
            
        </div>
        <!-- <div class="col-rt-2"> -->
            <!-- <ul> -->
                <!-- <li><a href="https://codeconvey.com/html-code-for-student-profile" title="Back to tutorial page">Back to Tutorial</a></li> -->
            <!-- </ul> -->
        </div>
    </div>
<!-- </div> -->

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>Admin Profile Page </h1>
                
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              


<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="bg7.webp" alt="student dp">
            <h3>ADMIN</h3>
          </div>
          <div class="card-body">
<?php


  
  echo "<div class='info'><strong>Admin Name:</strong> <span>".$row['username']."</span></div>";
  

  
  

  



?>
              <!-- Student Profile -->


            <!--  echo $_REQUEST['roll']. " ";  ?>
            4</p>
            <p class="mb-0"><strong class="pr-1">Section:</strong>A</p>
            <p class="mb-0"><strong class="pr-1">Department:</strong>Computer</p> -->
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Student Record</h3>
            <p class="mb-0"><i class="far fa-clone pr-1"></i>ALL</p>
            <button class="btn"><a  href="./display/display.php"><h2 class="index-text">DISPLAY</h2></a></button>

            <p class="mb-0"><i class="far fa-clone pr-1"></i>SELECT</p>
            <button class="btn"><a  href="./display/compA.php"><h2 class="index-text">Comp-A</h2></a></button>
            <button class="btn"><a  href="./display/compB.php"><h2 class="index-text">Comp-B</h2></a></button>
            <button class="btn"><a  href="./display/itA.php"><h2 class="index-text">IT-A</h2></a></button>
            <button class="btn"><a  href="./display/itB.php"><h2 class="index-text">IT-B</h2></a></button>
            <button class="btn"><a  href="./display/entcA.php"><h2 class="index-text">ENTC-A</h2></a></button>
            <button class="btn"><a  href="./display/entcB.php"><h2 class="index-text">ENTC-B</h2></a></button>
          </div>
          <div class="card-body pt-0">


      
            

          </div>
        </div>
          
          </div>
          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
           
    		</div>
		</div>
    </div>
</section>
     


    <!-- Analytics -->

	</body>
</html>