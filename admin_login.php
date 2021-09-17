<?php
session_start();

include 'config.php';

$email = $_POST['email'];
$pass = $_POST['pass'];




$sql = "SELECT email,pass FROM admin where email='$email' and pass='$pass' ";
$result = $conn->query($sql);


$_SESSION["email"] = $email;


if ($result->num_rows > 0) {

    $id = mysqli_fetch_array($result);

  echo '<script> alert("Login Successful")</script>';
      echo "<script type='text/javascript'> document.location = 'admin_home.php';</script>";

} else {
    echo '<script> alert("Login Unsucessful")</script>';
      echo "<script type='text/javascript'> document.location = 'admin_login.html';</script>";
}
$conn->close();
?>
