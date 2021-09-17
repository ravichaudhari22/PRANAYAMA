<?php

include 'config.php';

$name = $_POST['ename'];
$date = $_POST['date'];


$time = $_POST['time'];
$desc = $_POST['desc'];



$sql = " INSERT INTO events (event_name, description, date, time )
VALUES ('$name', '$desc', '$date', '$time' )";

if ($conn->query($sql) === TRUE) {

  header('Location:admin_events.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
