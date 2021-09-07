<?php include_once 'conn.php';
session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PARNAYAMA</title>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
  <link href="style.css" type="text/css" rel="Stylesheet" />
  <script>
  function myFunction() {
    document.getElementById("member").innerHTML = "";
  }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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
              <ul style="margin: 0px -70px">
                <li><a   href="home2.php">Home</li>

                <li><a   href="calendar.php">Upcoming Event</li>

                <li><a style="font-size:18px"> Recipies</a>
                  <ul>
                    <li><a style="font-size:18px" href="Vegan.php">Vegan</a></li>
                    <li><a style="font-size:18px" href="vegetarian.php">Vegetarian</a></li>
                    <li><a style="font-size:18px" href="non-veg.php">Non Vegetarian</a></li>
                  </ul>
                  <li><a style="font-size:18px"> Workouts</a>
                    <ul>
                      <li><a style="font-size:18px" href="new.php">Yoga</a></li>
                      <li><a style="font-size:18px" href="med.php">Meditation</a></li>
                      <li><a style="font-size:18px" href="lift.php">Liftig</a></li>

                    </ul>

                      <li><a style="font-size:18px" href="donateafter.php">Donations</a></li>
                        <li><a style="font-size:18px" href="Products.php">Products</a></li>

                    <li><a style="font-size:18px "href="aboutus.html">About us</a></li>
                  <li style="float:right;margin:-31px">  <div class="topnav">
  <a href="" >ACCOUNTS</a>

  <div id="member">
    <a href="profile.php"><?php echo $_SESSION['user'];?></a>

    <a href="Cancel.php">CANCEL MEMBERSHIP</a>
  </div>
    <a href="javascript:void(1);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
</li>



<li>
        <button id="hamburger-menu">
          <span class="strip"></span>
          <span class="strip"></span>
          <span class="strip"></span>
        </button>
      </div>
    </div>
      </div>
</li>

    </header>

    <div id="hero-slider">
      <div class="hero-slide-item" ">
        <div class="hero-slider-marketing">
          <video width="1500px" height="1000px" style="margin: -200px " controls muted autoplay>
            <source src="homev1.mp4" type="video/mp4">
            <source src="mov_bbb.ogg" type="video/ogg">
            Your browser does not support HTML5 video.
          </video></span></a>


        </div>
      </div>

      <div class="hero-slide-item" ">
        <div class="hero-slider-marketing">
          <video width="1500px" height="1000px" style="margin: -200px " controls muted autoplay>
            <source src="hv.mp4" type="video/mp4">
            <source src="mov_bbb.ogg" type="video/ogg">
            Your browser does not support HTML5 video.
          </video></span></a>


        </div>
      </div>

      <div class="hero-slide-item" ">
        <div class="hero-slider-marketing">
          <video width="1500px" height="1000px" style="margin: -200px " controls muted autoplay>
            <source src="hvv.mp4" type="video/mp4">
            <source src="mov_bbb.ogg" type="video/ogg">
            Your browser does not support HTML5 video.
          </video></span></a>


        </div>
      </div>
    </div>
  </section>

  <h2>Have a Question?
  <form method="get" action="query.php">
  <button>Ask Now</button></a>
      </form>
    </h2>

  <section id="features">
    <div class="flex container">
      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/feature-1.jpg" alt="Exercise Class" />
        <div class="feature-info-container">
          <div class="icon">
            <img src="https://onclickwebdesign.com/wp-content/uploads/icon-1.png" alt="Star Trophy Icon" />
          </div>
          <h4>Amazing Setting</h4>

        </div>
      </div>

      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/feature-2.jpg" alt="Man doing dumbbell rows" />
        <div class="feature-info-container">
          <div class="icon">
            <img src="https://onclickwebdesign.com/wp-content/uploads/icon-2.png" alt="Dumbbell Icon" />
          </div>
          <h4>Best Trainers</h4>

        </div>
      </div>

      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/feature-3.jpg" alt="Woman doing leg press" />
        <div class="feature-info-container">
          <div class="icon">
            <img src="https://onclickwebdesign.com/wp-content/uploads/icon-3.png" alt="Smoothie Icon" />
          </div>
          <h4>Diet Plans</h4>

        </div>
      </div>
    </div>
  </section>

  <section id="services">
    <h3>Services</h3>
    <div class="flex container">
      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/services-icon-1.png" alt="Basketball Icon" />
        <h4>Fitness Packages</h4>
        <br>

      </div>

      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/services-icon-2.png" alt="Bench Press Icon" />
        <h4>Group Activities</h4>
        <br>

      </div>

      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/services-icon-3.png" alt="Stopwatch Icon" />
        <h4>Yoga</h4>
        <br>

      </div>

      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/services-icon-4.png" alt="Mp3 Player Icon" />
        <h4>Mental Health Support</h4>

      </div>
</div>

      <form method="get" action="contactus.php">

      <button>Contact Us</button></a>
    </form>

  </section>









  <script>

    $(function () {

      const headerNav = $('header nav');
      const hamburgerMenu = $('#hamburger-menu');
      const search = $('#search');
      const searchContainerHide = $('#search-container-hide');
      const searchContainer = $('#search-container');
      const youtubeButton = $('.youtube-button');
      const videoFrame = $('#video-frame');
      const videoFrameHide = $('#video-frame-hide');
      const embedVideo = $('#embed-video');


      $('#hero-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 4000,
        pauseOnFocus: false,
        pauseOnHover: false,
        fade: true,
        speed: 1000,
        cssEase: 'linear'
      });

      $('#trainers-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<a href="#" class="slick-arrow slick-prev">previous</a>',
        nextArrow: '<a href="#" class="slick-arrow slick-next">next</a>',
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              arrows: false
            }
          },
          {
            breakpoint: 530,
            settings: {
              slidesToShow: 1,
              arrows: false
            }
          }
        ]
      });

      // initialize event handling
      hamburgerMenu.on('click', () => {
        headerNav.toggle();
      });

      search.on('click', () => {
        searchContainer.css({
          'opacity': '1',
          'visibility': 'visible',
          'z-index': '100'
        });
      });

      searchContainerHide.on('click', () => {
        searchContainer.css({
          'opacity': '0',
          'visibility': 'hidden',
          'z-index': '0'
        });
      });

      youtubeButton.on('click', () => {
        videoFrame.css({
          'opacity': '1',
          'visibility': 'visible',
          'z-index': '100'
        });
      });

      videoFrameHide.on('click', () => {
        videoFrame.css({
          'opacity': '0',
          'visibility': 'hidden',
          'z-index': '0'
        });

        embedVideo.prop('src', embedVideo.prop('src'));
      });
    });
  </script>
</body>
</html>
