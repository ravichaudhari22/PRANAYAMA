<?php
include'config.php';

$id=$_GET["id"];


$sql="DELETE FROM users WHERE id='$id';";
	 

if($conn->query($sql)===TRUE){
echo "Deleted Successfully";
header('location:admin_home.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;}