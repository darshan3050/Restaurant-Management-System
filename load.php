
<?php 

require 'connection.php';
$conn = Connect();

$sql = "SELECT * FROM confirmed ";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0)

?>
<div id="div_refresh" class="container" >
    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="40%">Food Name</th>
<th width="10%">Quantity</th>
<th width="20%">Price Details</th>
<th width="15%">Order Total</th>
<th width="5%">Action</th>
</tr>
</thead>




<?PHP
$total = 0;
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      
   

      
      <td><?php echo $row["fname"]; ?></td>
      <td><?php echo $row["quantity"]; ?></td>
      <td> &#8377;<?php echo $row["price"];?></td>
      <td> &#8377;<?php echo $row["price"]*$row["quantity"];?></td> 
      <td><div id="div_refresh" ><?php echo $row["action"]; ?></div></td>  
    </tr>
    <?php
   if($row["action"] != "Rejected")
    {
    ?>
    <?php $total = $total + ($row["quantity"] * $row["price"]); } ?>
  
  
</tbody>
<?php } ?>
  <tr>
<td colspan="3.5" align="right">Total</td>
<td align="right">&#8377; <?php echo number_format($total, 2); ?></td>
<br>
<td align="right"><a href="payment.php"><button class="btn btn-success"><span class="glyphicon glyphicon-share-alt"></span> Check&#10240;Out</button></a><br><br></td>
</tr>
  
