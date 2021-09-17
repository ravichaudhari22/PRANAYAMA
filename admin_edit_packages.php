<?php

include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$cost = $_POST['cost'];




$sql = " UPDATE membership SET name='$name', cost='$cost' WHERE id='$id' ";

if ($conn->query($sql) === TRUE) {

     header('Location:admin_packages.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
