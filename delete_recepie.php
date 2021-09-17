<?php
include'config.php';

$id=$_GET["id"];


$sql="DELETE FROM recepies WHERE rid='$id';";


if($conn->query($sql)===TRUE){
echo "Deleted Successfully";

echo "Error:" .$sql."<br>".$conn->error;
header('location:admin_recepies.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;}
