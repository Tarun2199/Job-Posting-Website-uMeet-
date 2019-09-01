<?php

include('../db-connect.php');
$id=$_GET["id"];
$sql = "DELETE FROM `job` WHERE `id`='$id'";
if (mysqli_query($conn, $sql)) {

      //echo "Deleted successfully";

} else {

      //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("Location:jobs.php");
mysqli_close($conn);
?>