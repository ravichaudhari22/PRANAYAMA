<?php
include_once 'conn.php';
session_start();
$sql1="SELECT * from vege where name='Intense Side Stretch Pose'";
  $result1=  mysqli_query($conn,$sql1);
  $result=mysqli_fetch_array($result1);
  $sql2="SELECT * from vege where name='VEGGIE BURGER'";
    $result2=  mysqli_query($conn,$sql2);
    $result3=mysqli_fetch_array($result2);
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="vegan.css">
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
      <link href="style.css" type="text/css" rel="Stylesheet" />
      <script>
      function myFunction() {
        document.getElementById("member").innerHTML = "";
      }
      </script>
</head>
<body>




  <header>
    <div class="container">
      <div id="header-logo-mobile" class="top-gym-logo">
        <a href="#">Pran<br/>aYam</a>
      </div>

      <nav>
        <nav>
          <div class="wrapper">
            <ul style="margin: 0px -70px">
              <li><a   href="home2.php">Home</li>

              <li><a   href="calendar.html">Calendar</li>

              <li><a style="font-size:18px"> Recipies</a>
                <ul>
                  <li><a style="font-size:18px" href="Vegan.html">Vegan</a></li>
                  <li><a style="font-size:18px" href="vegetarian.html">Vegetarian</a></li>
                  <li><a style="font-size:18px" href="non-veg.html">Non Vegetarian</a></li>
                </ul>
                <li><a style="font-size:18px"> Workouts</a>
                  <ul>
                    <li><a style="font-size:18px" href="new.html">Yoga</a></li>
                    <li><a style="font-size:18px" href="med.html">Meditation</a></li>
                    <li><a style="font-size:18px" href="lift.html">Liftig</a></li>

                  </ul>

                    <li><a style="font-size:18px" href="donate.php">Donations</a></li>
                      <li><a style="font-size:18px" href="Products.html">Products</a></li>

                  <li><a style="font-size:18px "href="aboutus.html">About us</a></li>
                <li style="float:right;margin:-31px">
  <a href="javascript:void(1);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</li>



  </header>
<div class="header3">
  <h1>Yoga Videos</h1>
</div>


  <div class="one">
    <h1>Cow Face Pose</h1>
    <p>Hip-Opening Yoga Poses<br>
        Seated Yoga Poses.</p>
    <video width="400" controls>
      <source src="Cow Face Pose,Yoga.mp4" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2 style="color:blue; font-size: 40px; ">What?</h2>
      <p style="color:black; font-size: 20px; ">Cow Face Pose.</p>
      <h2 style="color:blue; font-size: 40px; ">How?</h2>
      <p style="color:black; font-size: 20px; ">Can't see the cow face? Notice that the crossed legs look like the lips. The bent-elbow arms, one up and one down, are the ears.</p>
    </div>
  </div>

  <div class="two">
    <h1><?php echo $result['name']; ?></h1>
    <p>Forward Bend Yoga Poses
        Standing Yoga Poses</p>
    <video width="400" controls>
      <source src="<?php echo $result['video']; ?>" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2 style="color:blue; font-size: 40px; ">What?</h2>
      <p style="color:black; font-size: 20px; ">Intense Side Stretch Pose.</p>
      <h2 style="color:blue; font-size: 40px; ">Description</h2>
      <p style="color:black; font-size: 20px; ">Ground through your feet, engage your legs, and place your hands behind your back in reverse prayer. Inhale while lengthening your spine and exhale while folding forward from the hips. Before your back starts to round, come to a halt. Keep your right hip back and roll your left thigh inward..</p>
    </div>
  </div>

  <div class="three">
    <h1><?php echo $result['name']; ?></h1>
    <p>Balancing Yoga Poses
        Hip-Opening Yoga Poses
        Standing Yoga Poses.</p>
    <video width="400" controls>
      <source src="<?php echo $result['video']; ?>" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2 style="color:blue; font-size: 40px; ">What?</h2>
      <p style="color:black; font-size: 20px; ">Eagle Pose.</p>
      <h2 style="color:blue; font-size: 40px; ">How?</h2>
      <p style="color:black; font-size: 20px; ">Garudasana (gahr-ooo-DAHS-nuh) is a standing balance posture that needs and develops concentration, strength, and serenity. In this posture, using your breath and eyes to relax your mind and dismiss distractions allows for quiet poise and stability in the pose.</p>
    </div>
  </div>

  <div class="col-6 col-s-9">
    <h1>Low Lunge</h1>
    <p>Standing Yoga Poses.</p>
    <video width="400" controls>
      <source src="Low Lunge (Anjaneyasana).mp4" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2 style="color:blue; font-size: 40px; ">What?</h2>
      <p style="color:black; font-size: 20px; ">Low Lunge.</p>
      <h2 style="color:blue; font-size: 40px; ">How?</h2>
      <p style="color:black; font-size: 20px; ">Low lunge pose is a basic yoga pose that stretches the groyne, quadriceps, and hips deeply. Step one foot forward between the hands from downward-facing dog pose, keeping the knee at a 90-degree angle directly above the ankle. On either side of the front foot, the hands remain on the mat.</p>
    </div>
  </div>


</body>
</html>
