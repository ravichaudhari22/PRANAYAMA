<?php
if (!is_dir('images/')) {
    mkdir('images/', 0777, true);
}


include 'config.php';

$name = $_POST['name'];
$ingredients = $_POST['ingredients'];

$instructions = $_POST['instructions'];
$category = $_POST['category'];

if (@$_POST['submit']) {

  $file = $_FILES['file'];
  $file_name = $file['name'];
  $file_type = $file['type'];
  $file_size = $file['size'];
  $file_path = $file['tmp_name'];


  if (move_uploaded_file($file_path, 'videos/' . $file_name))


    $sql = " INSERT INTO recepies (recepie_name, ingredients, instructions, category, video )
      VALUES ('$name', '$ingredients', '$instructions', '$category', '$file_name' )";

  $retval = mysqli_query($conn, $sql);



  if ($retval == true) {

    echo "Error updating record: " . $conn->error;
    echo "sasank";

  } else {
    echo "Error updating record: " . $conn->error;
  }
}
$conn->close();
