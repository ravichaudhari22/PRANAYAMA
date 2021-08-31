<?php 
include_once 'conn.php';
session_start();
if(isset($_POST['sub'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$amount=$_POST['amount'];
	$sql="INSERT INTO donate(fname,lname,amount) VALUES ('$fname','$lname','$amount');";
      mysqli_query($conn,$sql);
      echo '<script> alert("Thank you for donating")</script>';
      echo "<script type='text/javascript'> document.location = 'donate.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
          <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
          <link href="style.css" type="text/css" rel="Stylesheet" />
        </head>

  <style>
      body{
          background-image: url(
           " https://www.contactspace.com/wp-content/uploads/making-a-donation-min-scaled.jpeg"
          );
          background-size:cover;
      }
      .donation-container {
	height: 1000px;
	font-family: 'Montserrat', sans-serif;
	font-weight: 500;
	font-size: 12px;
	text-transform: uppercase;
	margin-top: 30px;
}

.donation-box {
	width: 390px;
	height: 386px;
	background-color: #F5F5F5;
	border-top-left-radius: 4px;
	border-top-right-radius: 4px;
	position: relative;
	margin-left: auto;
	margin-right: auto;
	
	-webkit-transition: all 0.15s ease-out;
	-moz-transition: all 0.15s ease-out;
	-o-transition: all 0.15s ease-out;
	transition: all 0.15s ease-out;
}

.donation-box .title {
	background-color: #C1D82F;
	width: 100%;
	border-top-left-radius: 4px;
	border-top-right-radius: 4px;
	color: white;
	text-align: center;
	padding-top: 12px;
	padding-bottom: 12px;
	font-size: 15px;
}

.donation-box .donate-button {
	background-color: #C1D82F;
	width: 100%;
	color: white;
	text-align: center;
	padding-top: 12px;
	padding-bottom: 12px;
	font-size: 18px;
	bottom: 0px;
	position: absolute;
	cursor: pointer;
	font-weight: 800;
}

.donation-box .fields {
	width: 59%;
	display: block;
	position: absolute;
	top: 60px;
	left: 15px;
}

.donation-box .fields input {
	width: 90%;
	font-size: 17px;
	padding: 10px;
	border-radius: 4px;
	border-width: 0px;
	color: #5C5C5C;
	font-family: 'Montserrat', sans-serif;
	font-weight: 500;
	margin-bottom: 10px;
	-webkit-font-smoothing: antialiased;
}

::-webkit-input-placeholder {
   color: #cdcdcd;
   font-size: 15px;
}

:-moz-placeholder { /* Firefox 18- */
   color: #cdcdcd;
   font-size: 15px;
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #cdcdcd;
   font-size: 15px; 
}

:-ms-input-placeholder {  
   color: #cdcdcd;
   font-size: 15px;
}

.donation-box .amount {
	width: 30%;
	display: block;
	position: absolute;
	top: 60px;
	right: 15px;
}

.donation-box .amount .button {
	width: 100%;
	background-color: gray;
	margin-bottom: 10px;
	text-align: center;
	color: white;
	padding: 15px 0px 15px 0px;
	border-radius: 4px;
	font-size: 20px;
	cursor: pointer;
	
	-webkit-transition: 400ms background-color;
	-moz-transition: 800ms opacity, 800ms right;
	-ms-transition: 800ms opacity, 800ms right;
	-o-transition: 800ms opacity, 800ms right;
	transition: 200ms background-color;
}

.donation-box .amount .button:hover {
	background-color: #393939;
}

.donation-box .amount .button.selected {
	background-color: #393939;
}

.donation-box .amount .button input {
	min-width: 34px;
	font-size: 20px;
	font-weight: 500;
	border: none;
	background-color: transparent;
	color: white;
	font-family: Montserrat, sans-serif;
	font-size: 20px;
	font-stretch: normal;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	border-bottom: 2px dashed white;
	-webkit-font-smoothing: antialiased;
	
	-webkit-transition: all 0.15s ease-out;
	-moz-transition: all 0.15s ease-out;
	-o-transition: all 0.15s ease-out;
	transition: all 0.15s ease-out;
}

.set-amount {
	max-width: 96px;
}

.switch {
  position: absolute;
  top: 190px;
  left: 15px;
  margin: 20px auto;
  height: 26px;
  width: 58.5%;
  background: white;
  border-radius: 3px;
}

.switch-label {
  position: relative;
  z-index: 2;
  float: left;
  width: 49%;
  line-height: 26px;
  font-size: 11px;
  color: #5C5C5C;
  text-align: center;
  cursor: pointer;
  font-weight: bold;
}
.switch-label:active {
  font-weight: bold;
}

.switch-label-off {
  padding-left: 2px;
}

.switch-label-on {
  padding-right: 2px;
}

.switch-input {
  display: none;
}
.switch-input:checked + .switch-label {
  font-weight: bold;
  color: rgba(0, 0, 0, 0.65);
  
  -webkit-transition: 0.15s ease-out;
  -moz-transition: 0.15s ease-out;
  -o-transition: 0.15s ease-out;
  transition: 0.15s ease-out;
}
.switch-input:checked + .switch-label-on ~ .switch-selection {
  left: 114px;
}

.switch-selection {
  display: block;
  position: absolute;
  z-index: 1;
  top: 2px;
  left: 2px;
  width: 49%;
  height: 22px;
  background: #65bd63;
  border-radius: 3px;
  background-color: #C1D82F;
  
  -webkit-transition: left 0.15s ease-out;
  -moz-transition: left 0.15s ease-out;
  -o-transition: left 0.15s ease-out;
  transition: left 0.15s ease-out;
}

.checkboxes {
	position: absolute;
	top: 242px;
	left: 13px;
}

.checkboxes label {
	position: relative;
	top: -8px;
	font-size: 13px;
	color: gray;
}

.checkbox {
	-webkit-appearance: none;
	background-color: #fafafa;
	border: 1px solid #C1D82F;
	padding: 9px;
	border-radius: 3px;
	display: inline-block;
	position: relative;
	
	-webkit-transition: all 0.15s ease-out;
	-moz-transition: all 0.15s ease-out;
	-o-transition: all 0.15s ease-out;
	transition: all 0.15s ease-out;
}



.checkbox:checked {
	background-color: #C1D82F;
	border: 1px solid #C1D82F;
	color: white;
}

.checkbox:checked:after {
	content: '\2714';
	font-size: 14px;
	position: absolute;
	top: 0px;
	left: 3px;
	color: white;
}

.confirm {
	display: none;
	position: absolute;
	top: 335px;
	left: 15px;
	right: 15px;
	font-size: 16px;
	
	-webkit-transition: all 0.15s ease-out;
	-moz-transition: all 0.15s ease-out;
	-o-transition: all 0.15s ease-out;
	transition: all 0.15s ease-out;
}

.confirm i {
	font-weight: bold;
	text-decoration: underline;
	font-style: normal;
}
  </style>
  <body>
    <section id="hero">
        <header>
          <div class="container">
            <div id="header-logo-mobile" class="top-gym-logo">
              <a href="#">Pran<br/>aYam</a>
            </div>
    
            <nav>
              <nav>
                <div class="wrapper">
                  <ul>
                    <li><a   href="index.php">Home</li>
    
                    <li><a style="font-size:18px"> Recipies</a>
                      <ul>
                        <li><a style="font-size:18px" href="Vegan.html">Vegan</a></li>
                        <li><a style="font-size:18px" href="veg.html">Vegetarian</a></li>
                        <li><a style="font-size:18px" href="nonveg.html">Non Vegetarian</a></li>
                      </ul>
                      <li><a style="font-size:18px"> Workouts</a>
                        <ul>
                          <li><a style="font-size:18px" href="yoga.html">Yoga</a></li>
                          <li><a style="font-size:18px" href="yoga.html">Meditation</a></li>
                          <li><a style="font-size:18px" href="yoga.html">Liftig</a></li>
    
                        </ul>
                    
    
                        <li><a style="font-size:18px;float:right; "href="aboutus.html">About us</a></li>
                        <div class="topnav">
      <a href="" >ACCOUNTS</a>
    
      <div id="member">
        <a href="Aftersign.php"><?php echo $_SESSION['user'];?></a>
    
        <a href="register.html">CANCEL MEMBERSHIP</a>
    
        <a href="javascript:void(1);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
        </div>
    
    
    
    
    
            <button id="hamburger-menu">
              <span class="strip"></span>
              <span class="strip"></span>
              <span class="strip"></span>
            </button>
          </div>
        </div>
          </div>
        </header>
  <div class="donation-container" style="padding-top:250px;"> 

              
              <div class="donation-box" >
				  <form action="donate.php" method="POST">
                  <div class="title" style="background-color:yellow;color: black;">Donation Information</div>
                  
                  <div class="fields">
                      <input type="text" id="firstName" placeholder="First Name" name="fname" required> </input>
                      <input type="text" id="lastName" placeholder="Last Name" name="lname" required> </input>
					  <input type="text" id="amount" placeholder="Amount in $" name="amount" required> 
                  </div>
                  
                  
               
                  
                  
                    <div style="margin: 220px -0px;">
                        <input type="checkbox" required>I hereby declare that i have donate by my will</input>
                    </div>
                  
                  <div class="donate-button"  style="background-color:yellow;color: black;"><input type="submit" name="sub" class="btn btn-primary" value="donate now"></input></div>
				  </form>
				</div>
                 

          </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://raw.githubusercontent.com/jerryluk/jquery.autogrow/master/jquery.autogrow-min.js"></script>
  </body>
  </html>