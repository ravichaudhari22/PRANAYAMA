<?php
session_start();

include 'config.php';


$email = $_SESSION["email"];

$sql = " UPDATE users SET memb='' WHERE email='$email' ";

if ($conn->query($sql) === TRUE) {
     echo '<script> alert("Your membership cancelled Successfully")</script>';
      echo "<script type='text/javascript'> document.location = 'login.html';</script>";
} else {
     echo '<script> alert("Something went wrong")</script>';
      echo "<script type='text/javascript'> document.location = 'login.html';</script>";
}

$conn->close();

?>
