<?php
  $con = mysqli_connect('localhost', 'root', '', 'GroceryStore');

  if(isset($_GET['Del']))
  {
    $ID = $_GET['Del'];
    $query = " delete from storelevel_signup where ID = '".$ID."'";
    $result = mysqli_query($con,$query);

    if($result)
    {
      header("location:storelevelview.php");
    }
    else
    {
      echo ' Please Check Your Query ';
    }
  }
  else
  {
    header("location:storeleveleditview.php");
  }

 ?>
