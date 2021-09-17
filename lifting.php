<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Pranayamam</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<header id="header">

		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li><a  href="home2.php">Home</a></li>
							<li><a href="about2.html">About</a></li>

						<li class="menu-has-children"><a class="active" href="">Recipies</a>
							<ul>
								<li><a href="vegan.php">Vegan</a></li>
								<li><a href="vegiterian.php">Vegiterian</a></li>
								<li><a href="nonveg.php">Non-Veg</a></li>


							</ul>
						</li>
						<li class="menu-has-children"><a href="">Workouts</a>
							<ul>
								<li><a href="yoga.php">Yoga</a></li>
								<li><a href="meditation.php">Meditation</a></li>
								<li><a href="lifting.php">Lifting</a></li>
							</ul>
						</li>

						<li><a href="event2.php">Events</a></li>
                        <li><a href="donate2.php">Donation</a></li>

						<li><a href="contact2.html">Contact</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>



	<section class="post-content-area single-post-area">
		<div class="container" style="margin-top:100px">
			<div class="row">



			     <?php
                    include 'config.php';

                    $sql = "SELECT * FROM workouts where type='lifting'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {
                            echo '


                                    <div class="col-lg-12 sidebar-widgets">
                    					<div class="widget-wrap">
                    						<div class="single-sidebar-widget search-widget">
                    							<form class="search-form" action="#">
                    								<input value="' . $row["workout_name"] . '"  name="search"  type="text" readonly>

                    							</form>
                    						</div>
                    						<div class="single-sidebar-widget user-info-widget">

                    						<video width="100%" controls muted>
                                              <source src="' . $row["video"] . '" type="video/mp4">
                                              <source src="mov_bbb.ogg" type="video/ogg">
                                              Your browser does not support HTML5 video.
                                            </video>

                    							<h2 style="text-align:left;">Title</h2>
                    							<p style="text-align:justify;">
                    							"' . $row["workout_title"] . '"
                    							</p>

                    							<h2 style="text-align:left;">Description</h2>
                    							<p style="text-align:justify;">
                    							"' . $row["description"] . '"
                    							</p>
                    						</div>

                    					</div>
                    				</div>



                    ';
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();


                    ?>
			</div>
		</div>
	</section>


	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>About Us</h4>
						<p style="text-align: justify;">
							This website is for the people who are seeking information related to physical health and mental wellbeing. This project emphasis on various sorts of diet plans, Exercises, Workout, Yoga. This project is an attempt to help the clients to achieve the wellbeing of their physical and mental health and also helps in achieving the complete transformation.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Contact Us</h4>

						<p class="number">
							+1 (514) 574 1783 <br> +1 (438) 928 2393 <br>+1 (514) 969 4420 <br>+1 (438) 866 5272
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<div class="footer-bottom row align-items-center">


						</div>
					</div>
				</div>
			</div>
			<div class="row">


			</div>

		</div>
	</footer>


	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.tabs.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
