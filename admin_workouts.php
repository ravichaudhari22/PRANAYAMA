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

    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <header id="header">

        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">

                </nav>
            </div>
        </div>
    </header>

    <section class="banner-area relative" id="home" style="height:100px;">
        <div class="overlay overlay-bg"></div>
        <div class="container-fluid">
            <div class="row fullscreen d-flex align-items-center justify-content-between">

            </div>
        </div>
    </section>


    <div class="overlay overlay-bg"></div>
    <div class="container-fluid" style="margin-top:10px    ;">
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align:center;padding:10px;">Welcome Admin!</h1>
            </div>
        </div>
        <div class="row">

        <div class="col-sm-3 sidenav ">
                <a href="admin_home.php"> <button class="form-control primary-btn  "> User Management </button> </a>
                <br>
                <br>
                <a href="admin_packages.php"> <button class="form-control primary-btn  "> Manage Packages </button> </a>
                <br>
              
                <br>
                <a href="admin_queries.php"> <button class="form-control primary-btn  "> User Queries </button> </a>

                <br>
                <br>
                <a href="admin_recepies.php"> <button class="form-control primary-btn  "> Recepies </button> </a>

                <br>
                <br>
                <a href="admin_workouts.php"> <button class="form-control primary-btn  "> Workouts </button> </a>

                <br>
                <br>
                <a href="admin_events.php"> <button class="form-control primary-btn  "> Events </button> </a>
                 <br>
                <br>
                <a href="admin_donations.php"> <button class="form-control primary-btn  "> Donations List </button> </a>
            </div>





            <div class="col-sm-9">


                <a href="logout.php"> <button class=" primary-btn" style="float:right;margin:20px;"> logout </button> </a>


                <a> <button data-toggle="modal" data-target="#addworkouts" class=" primary-btn" style="float:right;margin:20px;" hidden> Add workouts </button> </a>


                <div class="modal fade" id="addworkouts" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">Add workouts</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form method="post" action="admin_add_recepie.php">

                                    <div class="form-group">
                                        <label>workout Name</label>
                                        <input type="text" class="form-control" name="workout_name" required>
                                    </div>


                                    <div class="form-group">
                                        <label>workout title</label>
                                        <input type="text" class="form-control" name="workout_title" required>
                                    </div>



                                    <div class="form-group">
                                        <label>What</label>
                                        <input type="text" class="form-control" name="what" required>
                                    </div>



                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control" name="category">
                                            <option value="Yoga">Yoga</option>
                                            <option value="Meditation">Meditation</option>
                                            <option value="Lifting">Lifting</option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label>Description title</label>
                                        <textarea class="form-control" name="desc" rows="5">

                                        </textarea>
                                    </div>


                                    <button class="btn btn-primary form-control" type="submit">Add workouts</button>
                                </form>


                            </div>

                        </div>
                    </div>
                </div>




                <table class="table" style="margin-top:60px;">
                    <tr>
                        <th> ID </th>
                        <th>workout Name </th>
                        <th>workout title</th>

                        <th>what </th>
                        <th>description </th>
                        <th>type</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>

                    <?php
                    include 'config.php';


                    $sql = "SELECT * FROM workouts";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {
                            echo '

                                    <tr>
                                    <td>' . $row["wid"] . '   </td>
                                    <td>' . $row["workout_name"] . '   </td>
                                    <td>' . $row["workout_title"] . '   </td>
                                    <td>' . $row["what"] . '   </td>
                                    <td>' . $row["description"] . '   </td>
                                    <td>' . $row["type"] . '   </td>

                                    <td>

                                             <a href="delete_workouts.php?id=' . $row["wid"] . '"> Delete </a>
                                    </td>

                                    <td>
                                       <a   data-toggle="modal" data-target="#' . $row["wid"] . '" style="cursor:pointer"> Edit </a>
                                    </td>

                                    </tr>

                                <div class="modal fade" id="' . $row["wid"] . '"   role="dialog"   aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel">Update Workouts</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <form method="post" action="admin_edit_workouts.php">

                                                <input type="text" class="form-control" name="wid" value="' . $row["wid"] . '" readonly>


                                                    <div class="form-group">
                                                        <label>Workout Name</label>
                                                        <input type="text" class="form-control" name="workout_name" value="' . $row["workout_name"] . '" required>

                                                    </div>


                                                    <div class="form-group">
                                                        <label>Workout Title</label>
                                                        <input type="text" class="form-control" name="workout_title" value="' . $row["workout_title"] . '" required>

                                                    </div>


                                                    <div class="form-group">
                                                        <label>What</label>
                                                        <input type="text" class="form-control" name="what" value="' . $row["what"] . '" required>

                                                    </div>



                                                    <div class="form-group">
                                                        <label>Category</label>


                                                        <select class="form-control" name="category" value="' . $row["type"] . '">
                                                        <option value="Yoga">Yoga</option>
                                                        <option value="Meditation">Meditation</option>
                                                        <option value="Lifting">Lifting</option>
                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Description</label>

                                                      <textarea class="form-control" name="description" rows="5">
                                                      ' . $row["description"] . '
                                                      </textarea>
                                                    </div>








                                                    <button class="btn btn-primary form-control">Update</button>
                                                </form>


                                            </div>

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

                </table>

            </div>
        </div>
    </div>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
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
