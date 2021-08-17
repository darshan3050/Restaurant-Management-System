<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<!-- google icon -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">


<style>
    body {
      background: #fff;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;

    }
    .center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 500px;
}
  </style>
    <title>KRAFT</title>
  </head>
  <body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <!-- scroll js-->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- hader-->
<header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark " >
  <a class="navbar-brand" href="#"> <img src="navbar/logo.svg"  width="30" height="30" class="d-inline-block align-top" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         CATEGORIES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="maincourse.php">MAIN COURSE</a>
          <a class="dropdown-item" href="southindian.php">SOUTH INDIAN</a>
          <a class="dropdown-item" href="chinese.php">CHINESE</a>
          <a class="dropdown-item" href="italian.php">ITALIAN</a>
          <a class="dropdown-item" href="starters.php">STARTERS</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="feedback.php">FEEDBACK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT</a>
      </li>
    </ul>
  </div>
  <form class="form-inline">
  <a class="navbar-brand" href="logout_u.php">
  <p class="h6">LOGOUT</p>
  </a>
  <a class="navbar-brand" href="#">
    <img src="navbar/cart.svg"  width="30" height="30" class="d-inline-block align-top" alt="">
    </a>
  <a class="navbar-brand" href="#">
  <p class="h6">CART</p>
  </a>
  
  </form>
</nav>
</header>
<br><br>
<div class="jumbotron">
  <h1 class="display-4">Welcome To Kraft  <img src="navbar/navbread.svg"  width="90" height="70" class="d-inline-block align-top" alt=""></h1>
  <p class="lead">Hello coustomer, welcome to the world of food you can enjoy everything from our  <br>delicious variety from north to south !</p>
  <hr class="my-4">
  <p>Dig into the world of our variety of food and dinning options.</p>
  <a class="btn btn-primary btn-lg" href="foodlist.php" role="button">Explore More</a>
</div>

<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(homeimg/1.jpg)"><div class="center">
     <a href="chinese.php"> <button type="button"  class="btn btn-dark">Explore More</button></a>
</div></div>
<div class="swiper-slide" style="background-image:url(homeimg/2.jpg)"><div class="center">
      <a href="italian.php"> <button type="button"  class="btn btn-dark">Explore More</button></a>
</div></div>
<div class="swiper-slide" style="background-image:url(homeimg/3.jpg)"><div class="center">
      <a href="maincourse.php"> <button type="button"  class="btn btn-dark">Explore More</button></a>
</div></div>
<div class="swiper-slide" style="background-image:url(homeimg/4.jpg)"><div class="center">
      <a href="southindian.php"> <button type="button"  class="btn btn-dark">Explore More</button></a>
</div></div>
<div class="swiper-slide" style="background-image:url(homeimg/5.jpg)"><div class="center">
      <a href="starters.php"> <button type="button"  class="btn btn-dark">Explore More</button></a>
</div></div>
<div class="swiper-slide" style="background-image:url(homeimg/6.jpg)"><div class="center">
      <a href="chinese.php"> <button type="button"  class="btn btn-dark">Explore More</button></a>
</div></div>
<div class="swiper-slide" style="background-image:url(homeimg/7.jpg)"><div class="center">
      <a href="italian.php"> <button type="button"  class="btn btn-dark">Explore More</button></a>
</div></div>
<div class="swiper-slide" style="background-image:url(homeimg/8.jpg)"><div class="center">
      <a href="maincourse.php"> <button type="button"  class="btn btn-dark">Explore More</button></a>
</div></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- third row-->
  <hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">South Indian Cusines  <span class="text-muted">See for yourself.</span></h2>
    <p class="lead">South Indian cuisine usually encompasses the five Southern states of Karnataka, Andhra Pradesh, Tamilnadu, Telangana, and Kerala. Both the geography and cultural influence of the South has an influence on the region's cuisine. </p>
    <p><a class="btn btn-secondary" href="southindian.php">View details &raquo;</a></p>
  </div>
  <div class="col-md-5 order-md-1">
  <img src="images/South Indian/2.jpg" class="rounded mx-auto d-block"  height="316" width="360" alt="...">

  </div>
</div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">&nbsp;&nbsp;&nbsp;&nbsp;Main Course Deals <span class="text-muted">Sweetness Overloaded</span></h2>
        <p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paneer is very prominent along with lentils and vegetables such as mushroom, cauliflower, &#10240;&#10240; &#10240;&nbsp;&nbsp;&nbsp;&nbsp; okra etc while on the non-vegetarian side chicken is the most prominent along with mutton &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; and fish. </p>
       <p>&nbsp;&nbsp;&nbsp;  <a class="btn btn-secondary" href="maincourse.php">View details &raquo;</a></p>
      </div>
      <div class="col-md-5">
       <img src="images/Main Course/2.jpg" class="rounded mx-auto d-block"  height="316" width="360" alt="...">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Delicious Starters <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Nowadays, the starter is often the first course of a meal, served directly before the main course. Starters come in a wide variety and may be served hot (vol-au-vents, soufflés) or cold (cold cuts, pâtés). </p>
        <p><a class="btn btn-secondary" href="starters.php">View details &raquo;</a></p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="homeimg/2.jpg" class="rounded mx-auto d-block" height="316" width="360" alt="...">

      </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chinese Cuisines <span class="text-muted"> And lastly, this one.</span></h2>
        <p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Spicy or mild, most Chinese dishes start from a common foundation. “Garlic, chili, and ginger &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; are often called the holy trinity of Chinese cooking.</p>
        <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<a class="btn btn-secondary" href="chinese.php">View details &raquo;</a></p>
      </div>
      <div class="col-md-5">
      <img src="images/Chinese/2.jpg" class="rounded mx-auto d-block" height="316" width="360" alt="...">

      </div>
    </div>



    <!--footer-->

  <!-- Swiper JS -->
  <script src="../package/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      autoplay : {
            display : 5,
            disableonInteraction : false,
      },
      pagination: {
        el: '.swiper-pagination',
      },
      loop: true,
    });
  </script>
<br><br>
<hr>

  </body>
</html>