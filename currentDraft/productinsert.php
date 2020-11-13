<?php
  include_once('config.php');

  if(isset($_POST['submit']))
  {
      $ProductName = $_POST['name'];
      $ProductType = $_POST['type'];
      $ProductSubtype = $_POST['sub'];
      $UnitPrice = $_POST['unit'];
      $Cost = $_POST['cost'];
      $InStock = $_POST['in'];

      $query = "insert into product_inventory (productName, productType, productSubType, unit_price, cost, in_stock)
              values ('$ProductName', '$ProductType', '$ProductSubtype', '$UnitPrice', '$Cost', '$InStock')";

      $result = mysqli_query($conn, $query);

      if($result)
      {
        header("location:productview.php");
      }
      else
	  {
		  echo 'Not Inserted';
      }
	  header("refresh:2; url=productindex.php");
    }
?>
