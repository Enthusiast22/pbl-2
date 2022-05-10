<?php
session_start();
require("db.php");


?>
<?php


if(isset($_SESSION['prn'])) 


$query = "SELECT * FROM users WHERE prn = '".$_SESSION['prn']."'";



if($result = mysqli_query($con, $query)) {

  $row = mysqli_fetch_assoc($result);

  $prn = $row['prn'];
  $username = $row['username'];

  $user_pic = "upload/".$username.".jpg";
  $default = "Assets/default.jpg";

  if(file_exists($user_pic)){
  $profile_pic = $user_pic;
  }
  else{
  $profile_pic = $default;
  }

  
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
    <title>Student Profile Page </title>

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
            	<h1>Student Profile Page </h1>
                
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              

<!-- 
if(isset($_SESSION['username']))
{
  $usersData = getUsersData(getId($_SESSION['username']));
}
?> -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src=<?php   echo $profile_pic ; ?> alt="student dp">
            
          </div>
          <div class="card-body">
<?php


  echo "<div class='info'><strong>Student No:</strong> <span>".$row['id']."</span></div>";
  
  echo "<div class='info'><strong>Student Name:</strong> <span>".$row['username']."</span></div>";
  echo "<div class='info'><strong>Branch:</strong> <span>".$row['branch']."</span></div>";
  echo "<div class='info'><strong>Year Level:</strong> <span>".$row['year']."</span></div>";

  
  

  



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
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">

              <tr>
                <th width="30%">Roll</th>
                <td width="2%">:</td>
                <td><?php echo "<div class='info'><span>".$row['roll']."</span></div>"; ?></td>
              </tr>
              <tr>
                <th width="30%">Academic Year	</th>
                <td width="2%">:</td>
                <td><?php echo "<div class='info'><span>".$row['year']."</span></div>"; ?></td>
              </tr>
              <!-- <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td><php echo "<div class='info'> <span>".$row['gender']."</span></div>"; ?></td>
              </tr> -->
              <tr>
                <th width="30%">PRN No. </th>
                <td width="2%">:</td>
                <td><?php echo "<div class='info'> <span>".$row['prn']."</span></div>"; ?></td>
              </tr>
              <!-- <tr>
                <th width="30%">Blood group</th>
                  <td width="2%">:</td>
                <td><php echo "<div class='info'> <span>".$row['blood']."</span></div>"; ?></td> -->
                 <tr>
                <th width="30%">Ranking </th>
                <td width="2%">:</td>
                <td> <?php echo "<div class='info'> <span>".$row['rank']."</span></div>"; ?></td>
              </tr> 
                <tr>
                  <th width="30%">Sports participated</th>
                  <td width="2%">:</td>
                  <td><?php


if(isset($_SESSION['prn'])) 


// echo $result['srno']." ".$result['username']." ".$result['phone']." ".$result['password']." ".$result['create_datetime'];


$query = "SELECT * FROM sports WHERE prn = '".$_SESSION['prn']."'";

;
$result = mysqli_query($con, $query);

  
  
  $total = mysqli_num_rows($result);
  
  $prn = $row['prn'];
  if($result){
    
  while($total!=0)
  {$row = mysqli_fetch_assoc($result);
    echo "<div class='info'> <span>".$row['sport']."</span></div>";}
  

  
} else {

  die("Error with the query in the database");

}
?> </td>
                </tr>
                
              </tr>

            </table>
            <P><a href="schedule.html">Registerations are open..Register now</a></p>

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