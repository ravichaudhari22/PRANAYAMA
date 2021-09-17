<?php
include'config.php';

$id=$_GET["id"];


$sql="DELETE FROM workouts WHERE wid='$id';";
	 

if($conn->query($sql)===TRUE){
echo "Deleted Successfully";

echo "Error:" .$sql."<br>".$conn->error;
header('location:admin_workouts.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;}