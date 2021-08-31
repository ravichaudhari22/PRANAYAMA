<?php
include_once 'conn.php';
session_start();

if(isset($_POST['fp'])){
   $email=$_POST['email'];
$pass=$_POST['pass'];
   $sql="SELECT email FROM users where email=?";
   $stmt=mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
  
     exit();
   }else{
      mysqli_stmt_bind_param($stmt, "s",$email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck=mysqli_stmt_num_rows($stmt);
      if($resultCheck > 0){
    
        $csql = "UPDATE users SET password = '$pass' WHERE email = '$email';";
        if (mysqli_query($conn,$csql)) {
          
          echo "<script type='text/javascript'> document.location = 'register.php'; </script>";
      }
      }
    else{
      echo '<script>alert("No user with email found.")</script>';
      echo "<script type='text/javascript'> document.location = 'fp.php'; </script>";
    }}}
      
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Forgot Password</title>
      <link rel="stylesheet" href="register.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login" style="font-size:140%">
               Forgot Password
            </div>

         </div><br>
         <div class="form-container">

            <div class="form-inner">
               <form action="fp.php" method="POST" class="login">
                  <div class="field">
                     <input type="text"  style="border 1px black solid; padding:8px;width:100%;font-weight:bold;" placeholder="Email Address" name="email" required>
                  </div><br>
                  <div class="field">
                     <input type="password"  style="border 1px black solid; padding:8px;width:100%;font-weight:bold;" placeholder="Password" name="pass" required>
                  </div><br><div class="field">
                     <input type="password"  style="border 1px black solid; padding:8px;width:100%;font-weight:bold;" placeholder="Password" name="pass1" required>
                  </div><br>

                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="fp" value="Submit">
                  </div>
                  <div class="signup-link">
                                     Want to go Back <a href="register.html">Login</a>
                                  </div>
               </form>

            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
   </body>
</html>
