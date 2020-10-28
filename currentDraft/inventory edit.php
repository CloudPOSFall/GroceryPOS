<html>
<head>
  <title>Document</title>
</head>
<body>
  <h3 > Update Form in PHP </h3>
    <form action="" method="post">
      <input type="text" placeholder=" Enter Product ID " name="id"/>
      <input type="text" placeholder=" QR Code " name="qr"/>
      <input type="text" placeholder=" Serial Number " name="serial"/>
      <input type="text" placeholder=" Make " name="make"/>
      <input type="text" placeholder=" Model Number " name="model"/>
      <input type="text" placeholder=" Model Name " name="name"/>
      <input type="text" placeholder=" Description " name="d"/>
      <input type="text" placeholder=" Link of Supplier Data " name="link"/>
      <input type="text" placeholder=" Cost " name="cost"/>
      <input type="text" placeholder=" Selling Price " name="price"/>
      <input type="text" placeholder=" MSRP " name="msrp"/>
      <input type="text" placeholder=" In Stock " name="in"/>
      <input type="text" placeholder=" Reorder Amount " name="amount"/>
      <input type="text" placeholder=" Base Stock " name="base"/>
      <input type="text" placeholder=" Vendor ID " name="vendor"/>
      <input type="submit" name="update" value="UPDATE"/>
    </form>
</body>
</html>
<?php
$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con,'grocerystore');

if(isset($_POST['update']))
{
  $id = $_POST['id'];

  $query = "update inventory_system set QR_code = '$_POST[qr]', serial_number = '$_POST[serial]', make = '$_POST[make]', model_number = '$_POST[model]', model_name = '$_POST[name]', description = '$_POST[d]', link_supplier_data = '$_POST[link]', cost = '$_POST[cost]', selling_price = '$_POST[price]', MSRP = '$_POST[msrp]', in_stock = '$_POST[in]', reorder_amount = '$_POST[amount]', base_stock = '$_POST[base]',
      vendor_id = '$_POST[vendor]' where product_id ='$_POST[id]'";
  $result = mysqli_query($con,$query);

  if($result)
  {
    header("location:inventoryview.php");
  }
  else
  {
    echo ' Please Check Your Query ';
  }
}
?>
