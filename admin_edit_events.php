<?php

include 'config.php';

$id = $_POST['id'];

$ename = $_POST['ename'];
$date = $_POST['date'];

$time = $_POST['time'];
$description = $_POST['description'];




$sql = " UPDATE Events SET event_name='$ename', date='$date', time='$time', description='$description' WHERE eid='$id' ";

if ($conn->query($sql) === TRUE) {

     header('Location:admin_events.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
