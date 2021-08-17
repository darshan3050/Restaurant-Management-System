<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}

?>
<!DOCTYPE html>
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

<!--tailwind css-->
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Hello, world!</title>
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
  <a class="navbar-brand" href="view_food_items.php"> <img src="m_order.svg"  width="30" height="30" class="d-inline-block align-top" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="view_food_items.php">MANGE RESTAURENT</a>
      </li>
  </div>
  <form class="form-inline">
  <a class="navbar-brand" href="logout_u.php">
  <p class="h6">LOGOUT</p>
 
  <a class="navbar-brand" href="m2c.php">
  <p class="h6">CONTACT CHEF</p>
  </a>
  
  </form>
</nav>
</header>
</div>
<br><br><br>


<div class="container" >

<div class="col-md-5" style="float: none; margin: 0 auto;">
  <div class="form-area">
    <form method="post" action="">
    <br style="clear: both">
      <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> CONTACT CHEF </h3>

      <div class="form-group">
        <input type="text" class="form-control" id="name" name="name" placeholder="Order No" required autofocus="">
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

$conn = Connect();

$name = $conn->real_escape_string($_POST['name']);

$sub = $conn->real_escape_string($_POST['sub']);
$msg = $conn->real_escape_string($_POST['msg']);
$query = "INSERT into m2c(name,sub,msg) VALUES('$name','$sub','$msg')";
$success = $conn->query($query);

if (!$success){
die("Couldnt enter data: ".$conn->error);
}

$conn->close();
}
?>

 </body>


</html>