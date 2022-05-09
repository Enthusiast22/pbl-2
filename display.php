<html>
    <head>
        <title>Student's Records</title>
</head>

<body>
    <table border="2">

    <tr>
        <th>Student's ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Roll number</th>
        <th>PRN</th>
        <th>Branch</th>
        <th>Division</th>
        <th>Gender</th>
        <th>Year</th>
        <th>Phone</th>
        
        <th>Rank</th>
        <th>Date_Times</th>
        <th>Sports</th>
        <!-- <th>Password</th> -->
    </tr>
<?php 
include("db.php");
$query= "select * from sports ";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
// $result   = mysqli_query($con, $query);
// echo "$total";
$row = mysqli_fetch_assoc($data);


?>



<?php
// error_reporting(0);
include("db.php");
$query= "select * from users ";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
// $result   = mysqli_query($con, $query);
// echo "$total";
$result = mysqli_fetch_assoc($data);

$prn=$result['prn'];

// echo $result['srno']." ".$result['username']." ".$result['phone']." ".$result['password']." ".$result['create_datetime'];

if($total!=0)
{
    // $result = mysqli_fetch_assoc($data);
    while(($result=mysqli_fetch_assoc($data)))
    {
        echo "
        <tr>
        <td>".$result['id']."</td>
        <td>".$result['username']."</td>
        <td>".$result['email']."</td>
        <td>".$result['roll']."</td>
        <td>".$result['prn']."</td>
        <td>".$result['branch']."</td>
        <td>".$result['division']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['year']."</td>
        <td>".$result['phone']."</td>
        

        
      
        <td>".$result['rank']."</td>
        <td>".$result['create_datetime']."</td>
        ";

        if(isset($result['prn'])) {


        $query = "SELECT * FROM sports WHERE prn = '".$result['prn']."'";



        if($result = mysqli_query($con, $query)) {

        $row = mysqli_fetch_assoc($result);

        $prn = $row['prn'];
        

        echo "<td>".$row['sport']."</td>";

        
        } 
    }
    // echo"Table has records";
}
}
else
{
    echo"No records found";
}

?>

</table>
</body>
</html>