<?php
  $con = mysqli_connect('localhost', 'root', '', 'GroceryStore');

  if(isset($_GET['Del']))
  {
    $ID = $_GET['Del'];
    $query = " delete from inventory_system where product_id = '".$ID."'";
    $result = mysqli_query($con,$query);

    if($result)
    {
      header("location:inventoryview.php");
    }
    else
    {
      echo ' Please Check Your Query ';
    }
  }
  else
  {
    header("location:inventoryview.php");
  }

 ?>
