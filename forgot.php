<?php

include 'config.php';


$email = $_GET['email'];
$pass = $_GET['pass'];


 


$sql = "UPDATE users SET password='$pass' WHERE email='$email'  ";

if ($conn->query($sql) === TRUE) {
   
  echo '<script> alert("Password Reset Successful")</script>';
      echo "<script type='text/javascript'> document.location = 'login.html';</script>";
} else {
 echo '<script> alert("Invalid Email or something went wrong")</script>';
      echo "<script type='text/javascript'> document.location = 'login.html';</script>";
}

$conn->close();