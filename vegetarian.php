<?php
include_once 'conn.php';
session_start();
$sql1="SELECT * from vege where name='CRISPY TOFU WITH MAPLE-SOY GLAZE'";
  $result1=  mysqli_query($conn,$sql1);
  $result=mysqli_fetch_array($result1);
  $sql2="SELECT * from vege where name='VEGETARIAN BURRITO BOWL WITH AVOCADO CREMA'";
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


<div class="header2">
  <h1>Vegetarian Dishes Videos</h1>
</div>


  <div class="one">
    <h1><?php echo $result['name']; ?></h1>
    <video width="250" controls muted>
      <source src="<?php echo $result['video']; ?>" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2 style="color:blue; font-size : 40px;">Ingredients</h2>
      <p style="color:black; font-size : 20px;">1

        (12-oz.) block firm tofu
        ¼

        cup low-sodium soy sauce
        3

        Tbsp. pure maple syrup
        3

        Tbsp. unseasoned rice vinegar
        ½

        tsp. crushed red pepper flakes
        1

        (½") piece ginger, very thinly sliced
        ½

        cup neutral oil, such as canola or grapeseed
        Kimchi, toasted sesame seeds, hijiki, daikon, sliced scallions, and steamed rice (for serving; optional).</p>
      <h2 style="color:blue; font-size : 40px;">Instructions</h2>
      <p style="color:black; font-size : 20px;">Drain tofu, then sandwich between several layers of kitchen towels to remove excess liquid. Cut into 9 cubes.

        Step 2
        Whisk soy sauce, maple syrup, rice vinegar, red pepper flakes, and ginger in a small bowl.

        Step 3
        Heat oil in a large nonstick skillet over medium-high. When oil is rippling across the surface, carefully add tofu so it doesn’t splash.<br>
        Cook, undisturbed, until very crisp and dark brown underneath, 3–4 minutes. Carefully turn and repeat on opposite side. Holding tofu back with a spatula or slotted spoon, pour out oil into a small bowl.<br>
         Return skillet to medium-high heat and add soy sauce mixture. Cook, reducing heat to medium so it doesn’t over-reduce or burn and basting tofu occasionally, until glaze is thick enough to coat a spoon, about 4 minutes..</p>
    </div>
  </div>

  <div class="two">
    <h1><?php echo $result3['name']; ?></h1>
    <video width="400" controls>
      <source src="<?php echo $result3['video']; ?>" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2 style="color:blue; font-size : 40px;">Ingredients</h2>
      <p style="color:black; font-size : 20px;">Cauliflower.
        Bell peppers. We like to use a combo of red and green, jto make this burrito bowl as colorful as possible.
        Onions.
        Olive oil.
        Limes. You’ll need these for the burrito bowl toppings, and for the avocado crema (more on that later.)
        Taco seasoning. Homemade, or store bought in a pinch.
        Beans. Pinto or black—either work great.
        Jarred salsa. Or homemade! Whatever is easy—you’ll mostly be using this to flavor the beans.
        Romaine lettuce.
        Cilantro-lime rice. Of course, you can use plain or brown rice if that’s what you’ve got. Or, you’ve got leftover rice, just jazz it up a little with some cilantro, lime juice and zest! Yum!</p>
      <h2 style="color:blue; font-size : 40px;">Instructions</h2>
      <p style="color:black; font-size : 20px;">Make the cilantro-lime rice. Burrito bowls are always a great use for leftover rice—either from takeout or from a homemade meal—so you can also just season some leftover rice with a little cilantro and lime juice.<br>
        <br>
        Roast the veggies! Roast cauliflower florets, peppers and onions—all seasoned with a little taco seasoning—for about 30 minutes. This can be done at least 2-3 days ahead of time, if you’re meal-prepping.<br>
        <br>
        Buckle up for one of our very best tips, ever! Season your beans by simmering them for a few minutes with some salsa.<br>
        <br>
        Voila! Instantly delicious beans! You could do this ahead, we supposed, but it takes only a couple minutes, and the burrito bowl is best if the beans are freshly warmed, so this is a step we reserve for the day-of.
        <br>
        Avocado crema time! Mix this up while the beans simmer—yeah, it’s that fast to make.<br>
        Assemble! Have everyone assemble their burrito bowls however they see fit, and ta da! A super-healthy dinner loaded with fiber, vitamins, and whole grains that everyone will love.</p>
    </div>
  </div>

  <div class="three">
    <h1> Roasted Cauliflower Tacos</h1>
    <video width="400" controls muted>
      <source src="Cauliflower Tacos _ Ep. 1335.mp4" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2 style="color:blue; font-size : 40px;">Ingredients</h2>
      <p style="color:black; font-size : 20px;">1
        Large head of cauliflower, cut into small florets
        2 tbsp
        Taco seasoning
        2 tbsp
        Olive oil
        2 tbsp
        Lime juice (1 lime)
        Tortillas
        Cilantro
        Shredded cabbage</p>
      <h2>Instructions</h2>
      <p>Preheat oven to 400°F.
          <br>
        In a large bowl toss cauliflower with taco seasoning, olive oil and lime juice then spread out on a large baking sheet.<br>
        <br>
        Place on center rack and bake for 30 minutes or until cauliflower is tender with crispy edges.
        <br>
        While cauliflower is roasting prepare avocado crema by placing all ingredients in a food processor or small blender and blending until smooth.
        <br>
        Warm tortillas and add roasted cauliflower along with shredded cabbage and fresh cilantro. Top with avocado crema and serve.
        </p>
    </div>
  </div>

  <div class="col-6 col-s-9">
    <h1> Pasta with Tomato Cream Sauce</h1>
    <video width="400" controls>
      <source src="Pasta With Creamy Tomato Sauce _ Pasta Recipe - Reena Ki Rasoi.mp4" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2 style="color:blue; font-size : 40px;">Ingredients</h2>
      <p>1 lb
        Favorite pasta, cooked al dente
        28 oz
        Crushed tomatoes
        15 oz
        Tomato sauce
        1/2 cup
        Olive oil
        2 tsp
        Salt
        8
        Fresh basil leaves
        1 cup
        Heavy cream
        1 cup
        Grated parmesan cheese
        1/2 cup
        Fresh arugula (optional)
        1 cup
        Fresh tomatoes (optional)</p>
      <h2 style="color:blue; font-size : 40px;">Instructions</h2>
      <p style="color:black; font-size : 20px;">In a large, preferably non-reactive saucepan, stir together crushed tomatoes, tomato sauce, olive oil, basil and salt.<br>
         Bring tomato sauce to a rapid simmer and reduce to low heat. Allow to simmer for 15-20 minutes, stirring often. If sauce isn’t thick enough for your liking, allow to cook for another 5 minutes.<br>
        While the sauce is simmering prepare your pasta!<br>
        Once the sauce is thickened add in cream and cheese and stir until combined. Add in cooked pasta and stir over medium/low heat until pasta is completely coated in sauce.<br>
        Serve topped with fresh arugula, cherry tomatoes and more shaved cheese. Red pepper also make a great addition.</p>
    </div>
  </div>


</body>
</html>
