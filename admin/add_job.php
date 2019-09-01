
<?php

include('../db-connect.php');


$jname=$_POST["jname"];
$cname=$_POST["cname"];
$email=$_POST["email"];
$salary=$_POST["salary"];
$sector=$_POST["sector"];
$skills=$_POST["skills"];
$location=$_POST["location"];
$description=$_POST["description"];
$experience=$_POST["experience"];
$date=date("d-m-Y");


$sql = "INSERT INTO `job`(`id`, `sector`, `jname`, `cname`, `location`, `skills`, `date`, `experience`, `salary`, `email`, `description`) VALUES ('','$sector','$jname','$cname','$location','$skills','$date','$experience','$salary','$email','$description')";
if (mysqli_query($conn, $sql)) {

      //echo "New record created successfully";

} else {

      echo "Error: " . $sql . "<br>" . mysqli_error($conn);


}
//echo "string";
header("Location:business.php");
mysqli_close($conn);
?>