<?php
include_once 'conn.php';
session_start();
$sql1="SELECT * from vege where name='VEGGIE FAJITAS'";
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


<div class="header1">
  <h1>Vegan Dishes Videos</h1>
</div>


  <div class="one">
    <h1><?php echo $result['name']; ?></h1>
    <video width="250" controls muted>
      <source src="<?php echo $result['video']; ?>" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-20">
    <div class="aside">
      <h2 style="color:blue; font-size : 40px;">Ingredients</h2>
      <p  style="color:black; font-size : 20px;">3 multi-colored peppers, stemmed and sliced into strips
        3 portobello mushrooms, stemmed and wiped clean
        1 red onion, sliced into wedges
        2 tablespoons avocado oil
        2 garlic cloves, chopped
        ½ teaspoon chili powder, more to taste
        ½ teaspoon cumin
        ½ teaspoon sea salt, more to taste
        Splash of balsamic vinegar
        2 limes, sliced into wedges
        Freshly ground black pepper.</p>
      <h2  style="color:blue; font-size : 40px;">Instructions</h2>
      <p  style="color:black; font-size : 20px;">Preheat the oven to 450°F.
        In a medium bowl, combine the broccoli, tomatoes, corn, onion, jalapeño, and sun-dried tomatoes and drizzle with olive oil and pinches of salt and pepper. Toss to coat and taste. The vegetables should be well-seasoned and well-coated with the olive oil so that the vegetables are flavorful throughout the pizza.

        Stretch the pizza dough onto a 14-inch pizza pan. Brush the outer edges of the dough lightly with olive oil and spoon a few scoops of cashew cream onto the center of the dough, just enough to spread it into a thin layer. Distribute the vegetables onto the dough.

        Bake 15 minutes, or until the crust is golden, cooked through, and the broccoli is tender and roasted. Remove from the oven and drizzle generously with the cashew cream (if your cashew cream is too thick to drizzle, stir in a little water). Top with the fresh basil, fresh thyme, and pinches of red pepper flakes.</p>
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

  <div class="col-3 col-s-20">
    <div class="aside">
      <h2 style="color:blue; font-size : 40px;">Ingredients</h2>
      <p  style="color:black; font-size : 20px;">2 tablespoons extra-virgin olive oil, more for drizzling
        2 shallots, chopped (⅔ cup)
        16 ounces mushrooms, mix of shiitake + portobello, stemmed and diced
        2 tablespoons tamari
        2 tablespoons balsamic vinegar
        1 tablespoon mirin, or ½ teaspoon maple syrup
        2 garlic cloves, minced
        ½ teaspoon smoked paprika
        2 teaspoons sriracha, more if desired
        ½ cup chopped walnuts
        ¼ cup ground flaxseed
        2 cups cooked short-grain brown rice, freshly cooked so that it’s sticky*
        1 cup panko bread crumbs, divided
        Vegan Worcestershire sauce, for brushing
        Nonstick cooking spray, for grilling
        Hamburger buns & desired burger fixings
        Sea salt and freshly ground black pepper</p>
      <h2  style="color:blue; font-size : 40px;">Instructions</h2>
      <p  style="color:black; font-size : 20px;">Heat the olive oil in a medium skillet over medium heat. Add the shallot and sauté until soft, 1 minute. Add the mushrooms and a generous pinch of salt, and sauté until soft and browned, 6 to 9 minutes, turning down the heat slightly, as needed.

        Stir in the tamari, vinegar, and mirin. Stir, reduce the heat, then add the garlic, smoked paprika, and sriracha. Remove the pan from the heat and let cool slightly.<br>

        In a food processor, combine the sautéed mushrooms, walnuts, flaxseed, brown rice, and ½ cup of the panko. Pulse until just combined. The mixture should hold together when pinched, but it should still have some texture.<br>

        Transfer to a large bowl and fold in the remaining panko.<br>


        Form into 8 patties, place them on a large plate and chill in the fridge for 1 hour.<br>

        If you're grilling the patties, preheat a grill to medium-high heat. Brush the patties with olive oil and spray the grill with cooking spray. Place the patties on the grill and use a spatula to press down lightly.<br>

         Grill for 7 minutes on the first side, flip, and grill for 6 to 7 minutes on the second side, or until well-charred and cooked through.<br>
        Alternately, cook the patties on the stove. Heat a cast-iron skillet over medium heat. Coat the bottom of the skillet with oil and cook the patties for 5 to 6 minutes per side, or until well-charred and cooked through.
        Remove from the heat, brush with Worcestershire sauce, and serve with desired fixings.</p>
    </div>
  </div>

  <div class="three">
    <h1> Creamy Tomato Soup with Vegan Grilled Cheese Croutons</h1>
    <video width="400" controls muted>
      <source src="3.mp4" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-20">
    <div class="aside">
      <h2 style="color:blue; font-size : 40px;">Ingredients</h2>
      <p style="color:black; font-size : 20px;"> garlic cloves, unpeeled
        4 medium fresh tomatoes* (see note)
        1 small yellow onion, sliced into quarters
        1 (14-oz) can diced tomatoes
        1/3 cup cooked chickpeas
        1 tablespoon balsamic vinegar
        ½ teaspoon maple syrup
        2 teaspoons fresh thyme leaves
        1 tablespoon extra-virgin olive oil
        ¼ to ½ teaspoon red pepper flakes
        Heaping ½ teaspoon sea salt
        freshly ground black pepper</p>
      <h2  style="color:blue; font-size : 40px;">Instructions</h2>
      <p  style="color:black; font-size : 20px;">Preheat the oven to 450° F and line a baking sheet with parchment paper.<br>
        <br>
        Wrap the garlic cloves in a piece of foil and place it on the baking sheet along with the whole tomatoes and the onion wedges. Drizzle with olive oil and a pinch of salt and pepper and roast for 20 to 25 minutes, or until the tomatoes and onions are well browned. Peel the garlic and transfer the roasted vegetables to a blender.
        Reduce the oven heat to 400° F and line the baking sheet with a fresh sheet of parchment paper.<br>
        <br>
        To the blender, add the canned tomatoes, garbanzo beans, balsamic vinegar, maple syrup, thyme leaves, 1 tablespoon olive oil, red pepper flakes, ½ teaspoon sea salt, and freshly ground pepper and blend until creamy (a Vitamix is ideal here.<br>
        <br>
         If using a regular blender, just blend longer!). Taste and adjust seasonings as desired. At this stage, the soup should still be hot. If not, pour it into a pot to reheat it.<br>
         <br>
        Make the croutons: Sprinkle 4 slices of the bread with a thin layer of cheese. Top with the remaining bread slices to make sandwiches and drizzle the outsides of the bread with olive oil.<br>
        <br>
        Bake until the cheese is melted and the bread is golden brown, about 8 minutes. Let cool completely before slicing into croutons so that the cheese doesn’t ooze out when you cut it.<br>
        <br>
        Serve the soup with the croutons (some in the soup, some on the side) and additional fresh thyme, red pepper flakes, and chickpeas, if desired.
        </p>
    </div>
  </div>

  <div class="col-6 col-s-9">
    <h1> Kale Salad with Carrot Ginger Dressing</h1>
    <video width="400" controls>
      <source src="Tasty Kale Salad __ Easy Carrot Dressing  __ Diet Salad __ Healthy Salad  __ Sugaspice Diaries.mp4" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="col-3 col-s-20">
    <div class="aside">
      <h2 style="color:blue; font-size : 40px;">Ingredients</h2>
      <p  style="color:black; font-size : 20px;">1 batch Roasted Chickpeas
        1 bunch curly kale, stems removed, leaves torn
        1 teaspoon lemon juice
        ½ teaspoon extra-virgin olive oil
        1 small carrot, grated
        1 small red beet, grated*
        ½ watermelon radish, very thinly sliced
        1 avocado, cubed
        2 tablespoons dried cranberries
        ¼ cup pepitas, toasted
        1 teaspoon sesame seeds
        Sea salt & Freshly ground black pepper.</p>
      <h2  style="color:blue; font-size : 40px;">Instructions</h2>
      <p  style="color:black; font-size : 20px;">Make the dressing and roast the chickpeas: Preheat the oven to 400°F and line a large baking sheet with parchment paper. Toss the chickpeas with a drizzle of olive oil and sprinkle with pinches of salt and pepper.<br>
        <br>
        Place the carrot pieces for the dressing in their own corner on the baking sheet to roast alongside the chickpeas. Roast for 25 to minutes, or until the chickpeas are browned and crisp and the carrots are soft.<br>
        <br>
        Set the roasted chickpeas aside. Transfer the carrots to a blender and add the water, olive oil, rice vinegar, ginger, and salt. Blend the dressing until smooth and chill in the fridge until ready to use.<br>
        <br>
        Place the kale leaves into a large bowl and drizzle with the lemon juice, ½ teaspoon of olive oil, and a few pinches of salt. Use your hands to massage the leaves until they become soft and wilted and reduce in the bowl by about half.<br>
        <br>
        Add the carrot, beet, watermelon radish, half of the cubed avocado, cranberries, pepitas, a few more good pinches of salt and a few grinds of pepper, and toss. Drizzle generously with the carrot ginger dressing.<br>
        Top with the remaining avocado, more dressing, the roasted chickpeas and sprinkle with the sesame seeds. Season to taste and serve.</p>
    </div>
  </div>


</body>
</html>
