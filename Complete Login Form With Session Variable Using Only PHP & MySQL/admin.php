<?php
 

$insert = false;
if(isset($_POST['Aemail'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    //echo "Success connecting to the db";

    // Collect post variables
    $Aemail = $_POST['Aemail'];
    $Apass = $_POST['Apass'];
    // $email = $_POST['email'];
    // $year = $_POST['year'];
    // $branch = $_POST['branch'];
    // $sport = $_POST['sport'];
    // $phone = $_POST['phone'];
    // $word = $_POST['word'];
    $sql = "INSERT INTO sports.admin (Aemail, Apass) VALUES ('$Aemail', '$Apass');";
    //echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        //echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>