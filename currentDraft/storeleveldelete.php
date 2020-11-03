<?php
include_once ('config.php');

  if(isset($_GET['Del']))
  {
    $ID = $_GET['Del'];
    $query = " delete from storelevel_signup where ID = '".$ID."'";
    $result = mysqli_query($conn,$query);

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
