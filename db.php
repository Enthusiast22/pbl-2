<?php
    // Enter your host name, database username, password, and database name.
    $server = "localhost";
    $username = "root";
    $password = "";
    $database="loginsys";
    $con = mysqli_connect("localhost","root","","loginsys");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>