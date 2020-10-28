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
    if(empty($_POST['name']) || empty($_POST['number']) || empty($_POST['addy']) || empty($_POST['code']) || empty($_POST['ship']))
    {
      echo ' Please Fill in the Blanks ';
    }
    else
    {
      $VendorName = $_POST['name'];
      $VendorNumber = $_POST['number'];
      $VendorAddress = $_POST['addy'];
      $CompanyCode = $_POST['code'];
      $Shipments = $_POST['ship'];

      $query = "insert into vendorinfo (vendor_name, vendor_number, vendor_address, company_code, shipments)
              values ('$VendorName', '$VendorNumber', '$VendorAddress', '$CompanyCode', '$Shipments')";
      $result = mysqli_query($con, $query);

      if($result)
      {
        header("location:vendorview.php");
      }
      else
      {
        echo ' Please Check Your Query ';
      }
    }
  }
?>
