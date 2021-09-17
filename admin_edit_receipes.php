<?php

include 'config.php';

$rid = $_POST['rid'];
$name = $_POST['recepie_name'];
$category = $_POST['category'];
$ingredients = $_POST['ingredients'];
$instructions = $_POST['instructions'];
 


$sql = " UPDATE recepies SET recepie_name='$name', category='$category', ingredients='$ingredients', instructions='$instructions'  WHERE rid='$rid' ";

if ($conn->query($sql) === TRUE) {
    
     header('Location:admin_recepies.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>