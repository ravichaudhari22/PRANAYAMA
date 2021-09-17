<?php

include 'config.php';

$wid = $_POST['wid'];
$name = $_POST['workout_name'];
$workout_title = $_POST['workout_title'];
$what = $_POST['what'];
$category = $_POST['category'];
$description = $_POST['description'];

$sql = " UPDATE workouts SET workout_name='$name', workout_title='$workout_title', type='$category', what='$what', description='$description'  WHERE wid='$wid' ";

if ($conn->query($sql) === TRUE) {

     header('Location:admin_workouts.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
