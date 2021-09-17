<?php

include 'config.php';

$name = $_POST['name'];
$price = $_POST['price'];



$sql = " INSERT INTO membership (name, cost )
VALUES ('$name', '$price' )";

if ($conn->query($sql) === TRUE) {

  header('Location:admin_packages.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
