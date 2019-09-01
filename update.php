<?php
include('db-connect.php');
$name=$_POST["name"];
$cname=$_POST["cname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$about=$_POST["about"];
$username=$_POST["username"];
$skills=$_POST["skills"];
$experience=$_POST["experience"];
$target_dir = "uploads/";
$resume=$_FILES["resume"]["name"];
$target_file = $target_dir . basename($_FILES["resume"]["name"]);
if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
$sql="UPDATE `apply` SET `name`=$name,`cname`=$cname,`phone`=$phone,`skills`=$skills,`email`=$email,`resume`=$resume, WHERE `username`='$username'";

if (mysqli_query($conn, $sql)) {

      //echo "New record created successfully";

} else {

      echo "Error: " . $sql . "<br>" . mysqli_error($conn);


}
//echo "string";
header("Location:index.php");
mysqli_close($conn);
?>