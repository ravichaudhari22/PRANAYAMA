<?php
include_once 'conn.php';
session_start();
if(isset($_POST['submit'])){
  $name=$_POST['memb'];
  $cost=$_POST['cost'];
  $sql1="INSERT INTO membership(name,cost) VALUES('$name','$cost') ";
     mysqli_query($conn,$sql1);
     echo "<script type='text/javascript'>document.location='adminpackage.php';</script>";

}


?>
<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="admin.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

	<div id="mySidenav" class="sidenav">
	<p class="logo"><span></span></p>
  <a href="admin.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;User Management</a>
  <a href="adminpackage.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Manage Packages</a>
  <a href="adminque.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;User Queries</a>
  <a href="#"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Add/Remove Videos</a>
  <a href="#"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Settings</a>




</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Dashboard</span>
</div>

	<div class="col-div-6">
	<div class="profile">

		<img src="admin.png" class="pro-img" />
		<h4><span>Admin</span></h4>
	</div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
 });

</script>

<form action="adminaddmem.php" method="POST">
  <input type="radio" name="memb" value="ESSENTIAL">ESSENTIAL</input>
  <input type="radio" name="memb" value="PREMIUM">PREMIUM</input>
  <input type="radio" name="memb" value="PLATINUM">PLATINUM</input>
  <input type="text" name="cost" required></input>
  <input type="submit" name="submit">

</form>
</body>


</html>
