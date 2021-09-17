<?php

include 'config.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];


$amount = $_POST['amount'];




$sql = " INSERT INTO donate (fname, lname, amount )
VALUES ('$fname', '$lname', '$amount' )";

if ($conn->query($sql) === TRUE) {
  
  echo '<script> alert("Thank you for donating")</script>';
      echo "<script type='text/javascript'> document.location = 'home2.php';</script>";
} else {
  echo '<script> alert("Something went wrong")</script>';
      echo "<script type='text/javascript'> document.location = 'home2.php';</script>";
}

$conn->close();
?>
