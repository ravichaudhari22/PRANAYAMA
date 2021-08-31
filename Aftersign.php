<?php include_once 'conn.php';
session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Final Project</title>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
  <link href="style.css" type="text/css" rel="Stylesheet" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>
<body>
  <section id="hero">
    <header>
      <div class="container">
        <div id="header-logo-mobile" class="top-gym-logo">
          <a href="#">Pran<br/>aYam</a>
        </div>

        <nav>
          <div class="wrapper">
            <ul>
              <li><a style="font-size:16px"href="index.php">Home</li>
              <li><a style="font-size:16px;"href="aboutus.html">ABOUT US</a></li>
              <li> Recipies
                <ul>
                  <li><a style="font-size:16px" href="vegan.html">Vegan</a></li>
                  <li><a style="font-size:16px" href="veg.html">Vegetarian</a></li>
                  <li><a style="font-size:16px" href="nonveg.html">Non-Vegetarian</a></li>
                </ul>
                <li> Workouts
                  <ul>
                    <li>Yoga</li>
                    <li>Meditation</li>
                    <li>Lifting</li>
                  </ul>
                  <li><a style="font-size:18px;float:right;"href="logout.php">Logout</a></li>
            </div>
