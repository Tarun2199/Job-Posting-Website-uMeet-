<?php
include('db-connect.php');
$message=$_POST["message"];
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];

$sql = "INSERT INTO `enquiry`(`id`, `message`, `name`, `email`, `subject`) VALUES ('','$message','$name','$email','$subject')";
if (mysqli_query($conn, $sql)) 
{

      //echo "New record created successfully";

} 
else 
{

      echo "Error: " . $sql . "<br>" . mysqli_error($conn);


}

//echo "string";
header("Location:contact.html");
mysqli_close($conn);
?>