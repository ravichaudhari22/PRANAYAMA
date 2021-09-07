<?php

include_once 'conn.php';
session_start();
$sql1="SELECT * from vege where name='POWER CLEAN.'";
  $result1=  mysqli_query($conn,$sql1);
  $result=mysqli_fetch_array($result1);
  $sql2="SELECT * from vege where name='FRONT SQUAT'";
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
  <h1>Lifting Videos</h1>
</div>


  <div class="one">
    <h1> <?php echo $result['name']; ?></h1>
    <p>Stand over the barbell<br>
    feet hip width apart.</p>
    <video width="400" controls>
      <source src="<?php echo $result['video']; ?>" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2 style="color:blue; font-size: 40px; ">What?</h2>
      <p style="color:black; font-size: 20px; "> POWER CLEAN.</p>
      <h2 style="color:blue; font-size: 40px; ">How?</h2>
      <p style="color:black; font-size: 20px; ">Drive barbell up with legs (similar to deadlift), keep bar as close as possible to body
Once bar passes knees, explosively extend hips and use momentum to carry bar up
As soon as hips are fully extended, quickly drive body under and catch the barbell in the front rack position, with elbows as high as possible and in a partial quarter squat
To finish, slowly lower barbell to hips and absorb with bent knees and hips before lowering to ground. Always maintain braced trunk.</p>
    </div>
  </div>

  <div class="two">
    <h1><?php echo $result3['name']; ?></h1>
    <p>proud chest with loose grip on bar</p>
    <video width="400" controls>
      <source src="<?php echo $result3['video']; ?>" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2 style="color:blue; font-size: 40px; ">What?</h2>
      <p style="color:black; font-size: 20px; ">IFRONT SQUAT.</p>
      <h2 style="color:blue; font-size: 40px; ">Description</h2>
      <p style="color:black; font-size: 20px; ">Taking a deep breath in to create tight 'chamber' in trunk, begin to slowly sit back into a squat (ensuring knees do NOT fold in)
Squat to depth where upright posture is still maintained, with high elbows and 'proud chest'
Finish by squeezing glutes and driving up out of squat to full extended position</p>
  </div>

  <div class="three">
    <h1>PUSH JERK.</h1>
    <p>Similar to the strict press or push press, with feet in-line and about hip-width apart
.</p>
    <video width="400" controls>
      <source src="liftv2.mp4" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2 style="color:blue; font-size: 40px; ">What?</h2>
      <p style="color:black; font-size: 20px; ">PUSH JERK.</p>
      <h2 style="color:blue; font-size: 40px; ">How?</h2>
      <p style="color:black; font-size: 20px; ">Similar to a push press, with a small dip and explosive drive up, whilst still maintaining upright posture and elbows under the bar
Use explosive drive up from legs to drive barbell up and off shoulders whilst driving up with arms
Before barbell reaches full height and slows down, quickly dip under bar and catch with fully extended arms in overhead position
With arms locked out, extend hips and knees to full stand up and stabilise barbell
Finish by slowly lowering to shoulders and repeating if needed.</p>
    </div>
  </div>

  <div class="col-6 col-s-9">
    <h1>POWER SNATCH</h1>
    <p>Stand over the barbell, feet hip width apart or slightly wider.</p>
    <video width="400" controls>
      <source src="liftv3.mp4" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2 style="color:blue; font-size: 40px; ">What?</h2>
      <p style="color:black; font-size: 20px; ">POWER SNATCH.</p>
      <h2 style="color:blue; font-size: 40px; ">How?</h2>
      <p style="color:black; font-size: 20px; ">Drive the barbell up with your legs, keeping the bar as close to your body as possible.
Extend hips explosively and use momentum to carry bar up after it passes knees.
Drive your body beneath the barbell, elbows high, and grab the barbell in an overhead position as soon as your hips are fully extended.
Before dropping to the ground, softly lower the barbell to the hips and absorb with bent knees and hips.</p>
    </div>
  </div>


</body>
</html>
