<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" href="img/fav.png">

	<meta name="author" content="colorlib">

	<meta name="description" content="">

	<meta name="keywords" content="">

	<meta charset="UTF-8">

	<title>Pranayamam</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700" rel="stylesheet">

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
						<li><a class="active" href="index.php">Home</a></li>

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


                    $name=$_GET["name"];
                    $email=$_GET["email"];
                    $age=$_GET["age"];
                    $gender=$_GET["gender"];
                    $pass=$_GET["pass"];



                    $sql = "SELECT * FROM membership";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {
                            echo '


                                    <div class="col-lg-4 sidebar-widgets">
                    					<div class="widget-wrap">
                    						<div class="single-sidebar-widget search-widget">
                    							<form class="search-form" action="#">
                    								<input value="' . $row["name"] . '"  name="search"  type="text" readonly>

                    							</form>
                    						</div>
                    						<div class="single-sidebar-widget user-info-widget">

                    							<a href="#"><h4>GYM EQUIPMENTS</h4></a>
                    							<p>
                    							<br/>
                    								YOGA
                    							</p>

                    							<p>
                    								PRANAYMA REWARDS
                    							</p>

                    							<p>
                    								' . $row["cost"] . ' + TAX Per Month
                    							</p>
                    								<button data-toggle="modal" data-target="#' . $row["name"] . '" class=" primary-btn" style="float:right;margin:20px;">JOIN NOW</button>




                                                        				  <!-- Modal -->
                                                    <div class="modal fade" id="' . $row["name"] . '" role="dialog">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h3 class="modal-title" id="exampleModalLabel">Payment</h3>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <form method="GET" action="registration.php">



                                                                    <input type="text" class="form-control" name="name" value="'.$name.'" required readonly hidden>
                                                                     <input type="text" class="form-control" name="email" value="'.$email.'" required readonly hidden>
                                                                      <input type="text" class="form-control" name="age" value="'.$age.'" required readonly hidden>
                                                                       <input type="text" class="form-control" name="gender" value="'.$gender.'" required readonly hidden>
                                                                        <input type="text" class="form-control" name="pass" value="'.$pass.'" required readonly hidden>

                                                                     <div class="form-group">
                                                                            <label style="text-align:left"><h2>Plan : ' . $row["name"] . '</h2></label>
                                                                            <input type="text" class="form-control" name="plan" readonly value="' . $row["name"] . '" required>

                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label style="text-align:left">Full Name</label>
                                                                            <input type="text" class="form-control" name="fname" required>
                                                                        </div>


                                                                        <div class="form-group">
                                                                            <label style="text-align:left">Card No</label>
                                                                             <input type="text" class="form-control" name="carno" id="carno" required maxlength="16" pattern="[0-9]{13,16}"
        title="Number only. Card Number Must be 16 Digits">
                                                                        </div>



                                                                        <div class="form-group">
                                                                            <label style="text-align:left">Month</label>

                                                                            <select class="form-control" name="month">
                                                                                <option >Jan</option>
                                                                                <option >Feb</option>
                                                                                <option >March</option>
                                                                                <option >April</option>
                                                                                <option >May</option>
                                                                                <option >June</option>
                                                                                <option >July</option>
                                                                                <option >August</option>
                                                                                <option >September</option>
                                                                                <option >Oct</option>
                                                                                <option >Nov</option>
                                                                                <option >Dec</option>
                                                                            </select>

                                                                            <label style="text-align:left">Year</label>

                                                                            <select class="form-control" name="month">
                                                                                  <option >2021</option>
																																									<option >2022</option>
                                                                                <option >2023</option>
                                                                                <option >2024</option>
                                                                                <option >2025</option>

                                                                            </select>
																																						<label style="text-align:left">CVV</label>
																																							<input type="text" class="form-control" name="cvv" required maxlength="3">
                                                                        </div>

                                                                        <button class="btn btn-primary form-control" type="submit" >Confirm</button>
                                                                    </form>


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>





                    						</div>
                    						<div class="single-sidebar-widget popular-post-widget" hidden>


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



			    <script>

			        function test()
			        {

			            var number = document.getElementById("carno").value;

			            if(number.length<15)
			            {
			               alert("Card Number Must be 16 Digits");

			            }
			            else
			            {
			                return;
			            }



			        }



			    </script>





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
