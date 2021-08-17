<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>

<html>
`
  <head>
    <title> KRAFT</title>
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
        <a class="nav-link" href="feedback.php">FEEDBACK</a>
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
  <a class="navbar-brand " href="cart.php">
  <p class="h6">CART</p>
  </a>
  
  </form>
</nav>
</header>
</div>


<br><br><br>

 <?php
$gtotal = 0;
$total = 0;
$sql = "SELECT * FROM confirmed ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)

while($row = mysqli_fetch_assoc($result))
  {

    $F_ID =  ( $row["id"]); 
    $foodname =( $row["fname"]);
    $price =  ($row["price"]);
    $quantity =  ($row["quantity"]);
    if($row["action"] != "Rejected")
    {
    $total = ($row["quantity"] * $row["price"]); 
    }
    $username = $_SESSION["login_user2"];
    $ordernum=($row["orderno"]);
    
    $gtotal = $gtotal + $total;
    $temp= $foodname;

    
   $query1 = "INSERT INTO odetail (id, fname, price,  quantity, user) 
   VALUES ('" . $F_ID . "','" . $foodname . "','" . $price . "','" . $quantity . "','" . $username . "')";
  
  $success1 = $conn->query($query1); 
    $query2 = "DELETE FROM confirmed WHERE orderno =$ordernum ";
    
    
    $success2 = $conn->query($query2); 
  
                    

      if(!$success1)
      {
        ?>
        <div class="container">
          <div class="jumbotron">
            <h1>Something went wrong!</h1>
            <p>Try again later.</p>
          </div>
        </div>

        <?php
      }
      
  }
  

        ?>
        <div class="container">
          <div class="jumbotron">
            <h1 class="display-2 ">One Step Away from your Food</h1>
          </div>
        </div>
        <br>
        <center>
<h1 class="display-4 " class="text-center">Grand Total: &#8377;<?php echo "$gtotal"; ?>/-</h1>
<h5 class="display-4 " class="text-center">including all service charges. (Delivery is free)</h5>
</center><br>
<h1 class="text-center">
  
  <a href="onlinepay.php"><button class="btn btn-success"><span class="glyphicon glyphicon-credit-card"></span> Pay Online</button></a>
 
</h1>
        


<br><br><br><br><br><br>
        </body>
</html>