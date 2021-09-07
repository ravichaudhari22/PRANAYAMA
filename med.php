<?php

include_once 'conn.php';
session_start();
$sql1="SELECT * from vege where name='DOWNWARD-FACING DOG'";
  $result1=  mysqli_query($conn,$sql1);
  $result=mysqli_fetch_array($result1);
  $sql2="SELECT * from vege where name='Triangle Pose'";
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
  <h1>MEDITATION Videos</h1>
</div>


  <div class="one">
    <h1><?php echo $result['name']; ?></h1>
    <p>Also known as:<br>
      Adho Mukha Shvanasana.</p>
    <video width="400" controls>
      <source src="<?php echo $result['video']; ?>" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2 style="color:blue; font-size: 40px; ">What?</h2>
      <p style="color:black; font-size: 20px; ">Downward-Facing Dog.</p>
      <h2 style="color:blue; font-size: 40px; ">How?</h2>
      <p style="color:black; font-size: 20px; ">From all fours, walk your hands 6 inches in front of you.
Tuck your toes and lift your hips up and back to lengthen your spine.
If your hamstrings are tight, keep your knees bent in order to bring your weight back into the legs.
Spread your fingers wide, press into your hands, and rotate your arms so that your biceps are facing toward one another.
Press your thighs back toward the wall behind you.</p>
    </div>
  </div>

  <div class="two">
    <h1><?php echo $result['name']; ?></h1>
    <p>Also known as:<br>
      Extended triangle pose, Triangle pose, Utthita Trikonasana.</p>
    <video width="400" controls>
      <source src="<?php echo $result['video']; ?>" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2 style="color:blue; font-size: 40px; ">What?</h2>
      <p style="color:black; font-size: 20px; ">Triangle Pose.</p>
      <h2 style="color:blue; font-size: 40px; ">Description</h2>
      <p style="color:black; font-size: 20px; ">Stand with feet wide, 3â€“4 feet apart. Shift your right heel out so your toes are pointing slightly inward. Turn your left foot out 90 degrees. Line up your left heel with the arch of your right foot.
Keeping both legs straight, ground through your feet. Lift arms into a T at shoulder height. Reach forward with your front arm. When you canâ€™t reach anymore, hinge at the front hip.
Bring your front arm down to your shin, a foam block, or the ground. Lift your back arm up toward the sky and spread your fingers. Take your gaze down to the floor or up toward your lifted hand.</p>
    </div>
  </div>

  <div class="three">
    <h1>Plank Pose</h1>
    <p>Also known as:<br>
        Adho Mukha Dandasana, Plank pose</p>
    <video width="400" controls>
      <source src="mdv1.mp4" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2 style="color:blue; font-size: 40px; ">What?</h2>
      <p style="color:black; font-size: 20px; ">Plank Pose.</p>
      <h2 style="color:blue; font-size: 40px; ">How?</h2>
      <p style="color:black; font-size: 20px; ">Start in Downward-Facing Dog. Shift forward so your shoulders are stacked over your wrists. Draw your navel in toward your spine and keep your hips from dropping.
Reach heels back as you lengthen the crown of your head forward. Ground down into hands, pushing the floor away beneath you. Lengthen through the arms and broaden your chest.</p>
    </div>
  </div>

  <div class="col-6 col-s-9">
    <h1>Lying-down meditation</h1>
    <p>Also known as:<br>
corpse position (savasana)</p>
    <video width="400" controls>
      <source src="mdv.mp4" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2 style="color:blue; font-size: 40px; ">What?</h2>
      <p style="color:black; font-size: 20px; ">Lying-down meditation.</p>
      <h2 style="color:blue; font-size: 40px; ">How?</h2>
      <p style="color:black; font-size: 20px; ">If you lie down, you may find it easier to relax and release tension. Your body will be completely supported in this manner.
Lay on your back with your arms extended alongside your body to accomplish this. Your toes can be turned out to the side and your feet should be hip-distance apart.
Modify the stance to support your lower back if it is bothersome.</p>
    </div>
  </div>


</body>
</html>
