<?php
  include_once('config.php');

  if(isset($_POST['submit']))
  {
<<<<<<< HEAD
    if(empty($_POST['barcode'])  || empty($_POST['brand']) || empty($_POST['description']) ||empty($_POST['category']) || empty($_POST['unit_price']) || empty($_POST['selling_price']) || empty($_POST['quantity']) || empty($_POST['instock']) || empty($_POST['reorder']) || empty($_POST['vendor']))
    {
      echo ' Please Fill in the Blanks ';
    }
    else
    {
      $barcode = $_POST['barcode'];
      $brand = $_POST['brand'];
      $description = $_POST['description'];
	  $category = $_POST['category'];
      $unitprice = $_POST['unit_price'];
      $sellingPrice = $_POST['selling_price'];
      $quantity = $_POST['quantity'];
      $in_stock = $_POST['instock'];
      $reorder = $_POST['reorder'];
      $vendorID = $_POST['vendor'];


      $query = "INSERT INTO product_inventory (barcode, brand, description, category, unit_price, selling_price, quantity, in_stock , reorder_amount , vendor_id) VALUES ('$barcode','$brand','$description', '$category', '$unitprice', '$sellingPrice', '$quantity','$in_stock','$reorder','$vendorID')";
=======
      $ProductName = $_POST['name'];
      $ProductType = $_POST['type'];
      $ProductSubtype = $_POST['sub'];
      $UnitPrice = $_POST['unit'];
      $InStock = $_POST['in'];

      $query = "insert into product_inventory (productName, productType, productSubType, unit_price, in_stock)
              values ('$ProductName', '$ProductType', '$ProductSubtype', '$UnitPrice', '$InStock')";
>>>>>>> master

      $result = mysqli_query($conn, $query);

      if($result)
      {
<<<<<<< HEAD
		echo 'Inserted';
		header("location:productview.php");
=======
        header("location:productview.php");
>>>>>>> master
      }
      else
	  {
		  echo 'Not Inserted';
      }
	  header("refresh:2; url=productindex.php");
    }
?>
