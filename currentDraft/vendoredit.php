<html>
<head>
  <title>Document</title>
</head>
<body>
  <h3 > Update Form in PHP </h3>
    <form action="" method="post">
      <input type="text" placeholder=" Enter Vendor ID " name="id"/>
      <input type="text" placeholder=" Vendor Name " name="name"/>
      <input type="text" placeholder=" Vendor Number " name="number"/>
      <input type="text" placeholder=" Vendor Address " name="addy"/>
      <input type="text" placeholder=" Company Code " name="code"/>
      <input type="text" placeholder=" Shipments " name="ship"/>
      <input type="submit" name="update" value="UPDATE"/>
    </form>
</body>
</html>
<?php
include_once ('config.php');

if(isset($_POST['update']))
{
  $id = $_POST['id'];

  $query = "update vendor_info set vendor_name = '$_POST[name]', vendor_number = '$_POST[number]', vendor_address = '$_POST[addy]', company_code = '$_POST[code]', shipments = '$_POST[ship]' where vendor_id='$_POST[id]'";
  $result = mysqli_query($conn,$query);

  if($result)
  {
    header("location:vendorview.php");
  }
  else
  {
    echo ' Please Check Your Query ';
  }
}
?>
