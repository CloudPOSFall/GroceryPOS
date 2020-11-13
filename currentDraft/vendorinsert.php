<?php
  include_once ('config.php');


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
      $result = mysqli_query($conn, $query);

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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

   <!--bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--our css -->
  <link rel="stylesheet" href="userStyle2.css">
  <!--jquery scrollbar css -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

  <!--font awesome js -->
  <script defer src="js/solid.js"></script>
  <script defer src="js/fontawesome.js"></script>

  <!--jquery -->
  <script src="js/jquery-3.5.1.min.js"></script>
  <!-- bootstrap popper js-->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  
</body>
</html>