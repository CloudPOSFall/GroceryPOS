<?php
  $con = mysqli_connect('localhost', 'root', '', 'GroceryStore');

  if(!$con)
  {
    echo 'Not Connected To Server';
  }

  if(!mysqli_select_db($con, 'GroceryStore'))
  {
    echo 'Database Not Selected';
  }

  if(isset($_POST['submit']))
  {
    if(empty($_POST['qr']) || empty($_POST['serial']) || empty($_POST['make']) || empty($_POST['model']) || empty($_POST['name']) || empty($_POST['d']) || empty($_POST['link']) ||
     empty($_POST['cost']) || empty($_POST['price']) || empty($_POST['msrp']) || empty($_POST['in']) || empty($_POST['amount']) || empty($_POST['base']) || empty($_POST['vendor']))
    {
      echo ' Please Fill in the Blanks ';
    }
    else
    {
      $QRCode = $_POST['qr'];
      $SerialNumber = $_POST['serial'];
      $Make = $_POST['make'];
      $ModelNumber = $_POST['model'];
      $ModelName = $_POST['name'];
      $Description = $_POST['d'];
      $LinkofSupplierData = $_POST['link'];
      $Cost = $_POST['cost'];
      $SellingPrice = $_POST['price'];
      $MSRP = $_POST['msrp'];
      $InStock = $_POST['in'];
      $ReorderAmount = $_POST['amount'];
      $BaseStock = $_POST['base'];
      $VendorID = $_POST['vendor'];

      $query = "insert into product_inventory (QR_code, serial_number, make, model_number, model_name, description, link_supplier_data, cost, selling_price, MSRP, in_stock, reorder_amount, base_stock, vendor_id)
              values ('$QRCode', '$SerialNumber', '$Make', '$ModelNumber', '$ModelName', '$Description', '$LinkofSupplierData', '$Cost', '$SellingPrice', '$MSRP', '$InStock', '$ReorderAmount', '$BaseStock', '$VendorID')";

      $result = mysqli_query($con, $query);

      if($result)
      {
        header("location:productview.php");
      }
      else
      {
        echo ' Please Check Your Query ';
      }
    }
  }
?>
