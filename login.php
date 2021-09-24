<?php
session_start();

include 'config.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users where email='$email' and password='$pass' ";
$result = $conn->query($sql);


$_SESSION["email"] = $email;


if ($result->num_rows > 0) {

    $id = mysqli_fetch_array($result);
    $memb=$id['memb'];
if(empty($memb)){
  echo '<script> alert("No Membership.Login Unsuccessful")</script>';
  echo "<script type='text/javascript'> document.location = 'index.php';</script>";
}
else{
  echo '<script> alert("Login Successful")</script>';
      echo "<script type='text/javascript'> document.location = 'home2.php';</script>";
}}else {
    echo '<script> alert("Login Unsucessful")</script>';
      echo "<script type='text/javascript'> document.location = 'index.php';</script>";
}
$conn->close();
