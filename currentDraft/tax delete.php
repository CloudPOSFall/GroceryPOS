<?php
  $con = mysqli_connect('localhost', 'root', '', 'GroceryStore');

  if(isset($_GET['Del']))
  {
    $ID = $_GET['Del'];
    $query = " delete from tax_table where TTID = '".$ID."'";
    $result = mysqli_query($con,$query);

    if($result)
    {
      header("location:taxview.php");
    }
    else
    {
      echo ' Please Check Your Query ';
    }
  }
  else
  {
    header("location:taxview.php");
  }

 ?>
