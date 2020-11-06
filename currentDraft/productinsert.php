<?php
  include_once('config.php');

  if(isset($_POST['submit']))
  {
      $ProductName = $_POST['name'];
      $ProductType = $_POST['type'];
      $ProductSubtype = $_POST['sub'];
      $UnitPrice = $_POST['unit'];
      $InStock = $_POST['in'];

      $query = "insert into product_inventory (productName, productType, productSubType, unit_price, in_stock)
              values ('$ProductName', '$ProductType', '$ProductSubtype', '$UnitPrice', '$InStock')";

      $result = mysqli_query($conn, $query);

      if($result)
      {
        header("location:productview.php");
      }
      else
      {
        echo ' Please Check Your Query ';
      }
    }
?>
