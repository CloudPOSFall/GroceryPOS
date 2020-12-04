<?php
include_once ('config.php');
$query = "SELECT OTID FROM orders_ticket WHERE employee_id IS NULL";
    $result = mysqli_query($conn, $query) or die(" Execution Failed null address");
    $row = mysqli_num_rows($result);
    
    $OTID = "";
    while($row = mysqli_fetch_assoc($result))
    {
        $OTID = $row['OTID']; 
    }

  if(isset($_GET['Del']))
  {
    $ID = $_GET['Del'];
    $query = " DELETE from orders WHERE product_id = '".$ID."' AND OTID='".$OTID."'";
    $result = mysqli_query($conn,$query);

    if($result)
    {
        $query = "SELECT product_id FROM orders WHERE OTID = (SELECT MAX(OTID) FROM orders)";
        $result = mysqli_query($conn,$query);
        
        while($row = mysqli_fetch_assoc($result))
        {
            $id = $row['product_id']; 
        }
        header("location:neworder.php?addToOrder=" .$id. "");
    }
    else
    {
      echo ' Please Check Your Query ';
    }
  }

 ?>