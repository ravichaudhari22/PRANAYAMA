<?php
include'config.php';

$id=$_GET["id"];


$sql="DELETE FROM events WHERE eid='$id';";


if($conn->query($sql)===TRUE){

echo "Error:" .$sql."<br>".$conn->error;
header('location:admin_events.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;}
