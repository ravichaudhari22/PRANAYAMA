<?php
include_once 'conn.php';
if(isset($_POST['login_submit'])){
  $email=$_POST['email1'];

  $pass=$_POST['pass12'];
  $sql="SELECT * FROM users WHERE email=?;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
  echo '<script>alert("Password entered is wrong.")</script>';
  exit();}
  else{
    mysqli_stmt_bind_param($stmt,"s",$email);
  mysqli_stmt_execute($stmt);
  $answer=mysqli_stmt_get_result($stmt);
  if($row = mysqli_fetch_assoc($answer)){
    if($pass!=$row['password']){
      echo '<script>alert("Password entered is wrong.")</script>';

    }
    else if ($pass==$row['password']){
      session_start();
      $_SESSION['user']=$row['name'];
      echo "<script type='text/javascript'> document.location = 'home2.php'; </script>";
    }
    else{
      echo '<script>alert("Password entered is wrong.")</script>';
    }

  }
  }
}
 ?>
