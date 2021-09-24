<?php

include 'config.php';

$name = $_GET['name'];
$plan = $_GET['plan'];
$email = $_GET['email'];
$age = $_GET['age'];
$gender = $_GET['gender'];
$pass = $_GET['pass'];

$sql = "INSERT INTO users (name, age, sex, email, password, memb)
VALUES ('$name', '$age', '$gender', '$email', '$pass', '$plan')";

if ($conn->query($sql) === TRUE) {
    echo '<script> alert("Payment Done Successfully")</script>';
      echo "<script type='text/javascript'> document.location = 'login.html';</script>";
} else {
    echo '<script> alert("Something went wrong please try again")</script>';
      echo "<script type='text/javascript'> document.location = 'registration.html';</script>";
}

$conn->close();


?>

