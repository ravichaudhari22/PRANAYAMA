<?php

include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['sex'];

$mail = $_POST['email'];




$sql = "UPDATE users SET name='$name', age='$age', sex='$gender', email='$mail' WHERE id='$id' ";

if ($conn->query($sql) === TRUE) {

     header('Location:admin_home.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
