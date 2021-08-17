<?php
session_start();


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
  <a class="navbar-brand" href="#"> <img src="navbar/logo.svg"  width="30" height="30" class="d-inline-block align-top" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
     
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="chef.php">ORDER</a>
      </li>
    
      
      <li class="nav-item">
        <a class="nav-link" href="chefinst.php">MANAGER SUGESTION <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
  <form class="form-inline">
 
  <a class="navbar-brand" href="logout_u.php">
  <p class="h6">LOGOUT</p>
  </a>
  
  </form>
</nav>
</header>
</div>






        </div>

      </div>
    </nav>

    <br><br><br><br>

<div class="container"  style="width:95%;">

<!-- Display all Food from food table -->
<?php

require 'connection.php';
$conn = Connect();

$sql = "SELECT * FROM confirmed ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
<div class="card bg-dark"  style="width: 18rem;">
  <div class="card-body">
  <table class="table table-dark " >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">table no</th>
      <th scope="col">Name</th>
      <th scope="col">Cost</th>
    </tr>
  </thead>
  <tbody>
 
    <tr>
      <th scope="row"><?php echo $row["table no"]; ?></th>
      <td><?php echo $row["table no"]; ?></td>
      <td><?php echo $row["fname"]; ?></td>
      <td><?php echo $row["price"]; ?></td>
    </tr>
    </tbody>
    </table>

  <input type="hidden" name="hidden_name" value="<?php echo $row["fname"]; ?>">
  <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
  <input type="hidden" name="hidden_RID" value="<?php echo $row["R_ID"]; ?>">
  <a href="chef.php?action=accept&id=<?php echo ( $row["orderno"]);  ?>"><button type="button" class="btn btn-success">Accept</button></a>


  <a href="chef.php?action=rejected&id=<?php echo ( $row["orderno"]);  ?>"><button type="button" class="btn btn-danger">Reject</button></a>


  <a href="chef.php?action=preparing&id=<?php echo ( $row["orderno"]);  ?>"><button type="button" class="btn btn-warning">Preparing</button></a>

  </div>

</div>

<br>
<br>


</form>

<?php
$count++;
if($count==4)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>
</div>
<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
       <h1 class="display-2" >No pending orders to be accepted!!!</h1> 
       
      </center>
       
    </div>
  </div>

  <?php

}


 

if(isset($_GET["action"]))
{
  
if($_GET["action"] == "accept")
{

echo ($_GET["id"]);
$acept= $_GET["id"];

  $query = mysqli_query($conn, "UPDATE `confirmed` SET `action`='Accepted'  WHERE `orderno`= $acept");
  


}
if($_GET["action"] == "rejected")
{

  $reje= $_GET["id"];

  $query = mysqli_query($conn, "UPDATE `confirmed` SET `action`='Rejected'  WHERE `orderno`= $reje");
  
  
}

if($_GET["action"] == "preparing")
{

  $serv= $_GET["id"];

  $query = mysqli_query($conn, "UPDATE `confirmed` SET `action`='Preparing'  WHERE `orderno`= $serv");
  
  

}
}


?>

   
</body>
</html>