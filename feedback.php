<?php
session_start();



?>

<html>
`
  <head>
    <title>KRAFT</title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/cart.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<!-- google icon -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

<!--tailwind css-->
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>KRAFT</title>
  <body>
  <style>
body {
  background-image: url('images/bg/y.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
   background-size: cover;
 
}
</style>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <!-- scroll js-->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

   

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark " >
  <a class="navbar-brand" href="home.php"> <img src="navbar/logo.svg"  width="30" height="30" class="d-inline-block align-top" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="home.php">HOME <span class="sr-only">(current)</span></a>
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
        <a class="nav-link active" href="feedback.php ">FEEDBACK</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="about.php">ABOUT</a>
      </li>
    </ul>
  </div>
  <form class="form-inline">
 
  <a class="navbar-brand" href="cart.php">
    <img src="navbar/cart.svg"  width="30" height="30" class="d-inline-block align-top" alt="">
    </a>
  <a class="navbar-brand active" href="cart.php">
  <p class="h6">CART</p>
  </a>
  
  
  </form>
</nav>
</header>
</div>


<br><br><br><br>

<div class="container" >

    <div class="col-md-5" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form method="post" action="">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> FEEDBACK </h3>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>     

          
          <div class="form-group">
            <input type="text" class="form-control" id="sub" name="sub" placeholder="Subject" required>
          </div>

          <div class="form-group">
           <textarea class="form-control" type="textarea" id="msg" name="msg" placeholder="Message" maxlength="140" rows="7"></textarea>
           
          </div> 
          <input type="submit" name="submit" type="button" id="submit" name="submit" class="btn btn-primary pull-right"/>    
        </form>

        
      </div>
    </div>
      
    </div>
    </div>
    <?php
if (isset($_POST['submit'])){
require 'connection.php';
$conn = Connect();

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$sub = $conn->real_escape_string($_POST['sub']);
$msg = $conn->real_escape_string($_POST['msg']);
$query = "INSERT into contact(name,email,sub,msg) VALUES('$name','$email','$sub','$msg')";
$success = $conn->query($query);

if (!$success){
  die("Couldnt enter data: ".$conn->error);
}

$conn->close();
}
?>

     </body>

  
</html>