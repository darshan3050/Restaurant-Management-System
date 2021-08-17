<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
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

<!--tailwind css-->
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
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
  <a class="navbar-brand" href="#"> <img src="m_order.svg"  width="30" height="30" class="d-inline-block align-top" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">MANGE RESTAURENT</a>
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

<br>
<br>
<br>
<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a href="view_food_items.php" class="list-group-item list-group-item-action list-group-item-dark  " role="tab" >VIEW ORDERS</a>
      <a  href="add_food_items.php" class="list-group-item list-group-item-action list-group-item-dark "  role="tab" aria-controls="profile">ADD FOOD ITEMS</a>
      <a  href="delete_food_items.php" class="list-group-item list-group-item-action list-group-item-dark"  role="tab" aria-controls="messages">DELETE FOOD ITEMS</a>
      <a href="user_feedback.php"  class="list-group-item list-group-item-action list-group-item-dark active"  role="tab" aria-controls="messages">USER FEEDBACK </a>
    </div>
  </div>
  <form action="" method="POST">
  <?php

$user_check=$_SESSION['login_user1'];
$sql = "SELECT * FROM contact ";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0)
{

  ?>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th scope="col">EMAIL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th scope="col">SUBJECT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th scope="col">FEEDBACK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
    </tr>
  </thead>
  <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>
  <tbody>
    <tr>
      <th scope="row">&nbsp;&nbsp;&nbsp;<?php echo $row["name"]; ?></th>
      <td>&nbsp;<?php echo $row["email"]; ?></td>
      <td>&nbsp;<?php echo $row["sub"]; ?></td>
      <td>&nbsp;<?php echo $row["msg"]; ?></td>
    </tr>


  </div>
</div>
<?php } ?>
  </table>
    <br>


  <?php } else { ?>

  <h4><center>0 RESULTS</center> </h4>

  <?php } ?>

        </form>
     
    <!--footer-->

  


  </body>
</html>