<?php

include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['msg']; 

$sql = "INSERT INTO contact (name, email, subject, msg)
VALUES ('$name', '$email', '$subject', '$msg')";

if ($conn->query($sql) === TRUE) {
    echo '<script> alert("Thank you for Contact")</script>';
      echo "<script type='text/javascript'> document.location = 'home2.php';</script>";
} else {
     echo '<script> alert("Something went wrong")</script>';
      echo "<script type='text/javascript'> document.location = 'home2.php';</script>";
}

$conn->close();


?>

