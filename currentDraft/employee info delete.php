<?php
  $con = mysqli_connect('localhost', 'root', '', 'GroceryStore');

  if(isset($_GET['Del']))
  {
    $ID = $_GET['Del'];
    $query = " delete from employee_info where employee_information = '".$ID."'";
    $result = mysqli_query($con,$query);

    if($result)
    {
      header("location:employeeinfoview.php");
    }
    else
    {
      echo ' Please Check Your Query ';
    }
  }
  else
  {
    header("location:employeeinfoview.php");
  }

 ?>