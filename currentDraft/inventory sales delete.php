<?php
  $con = mysqli_connect('localhost', 'root', '', 'GroceryStore');

  if(isset($_GET['Del']))
  {
    $ID = $_GET['Del'];
    $query = " delete from inventory_sales where ISID = '".$ID."'";
    $result = mysqli_query($con,$query);

    if($result)
    {
      header("location:inventorysalesview.php");
    }
    else
    {
      echo ' Please Check Your Query ';
    }
  }
  else
  {
    header("location:inventorysalesview.php");
  }

 ?>