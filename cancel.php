<?php
include_once 'conn.php';
session_start();
if(isset($_POST['send'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $reason=$_POST['reason'];
  $sql="INSERT INTO cancel(name,email,reason) VALUES('$name','$email','$reason');";
  mysqli_query($conn,$sql);

  echo '<script> alert("Hope to see you again!")</script>';

echo "<script type='text/javascript'> document.location = 'index.php';</script>";


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cancel membership</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="cancel.css">
</head>
<body>
    <div class="container">
        <h1>CANCEL MEMBERSHIP</h1>

        <form action="cancel.php" method="post">
            <div class="row">
                <div class="column">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Your name here" required>
                </div>
                <div class="column">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Your email here" required>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label for="issue">Describe your issue</label>
                    <textarea id="issue" name="reason" placeholder="Please tell us why you want to cancel Membership" required rows="3"></textarea>
                </div>
            </div>
            <button name="send">Submit  </button>
        </form>
    </div>
</body>
</html>
