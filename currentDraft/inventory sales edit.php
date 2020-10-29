<html>
<head>
  <title>Document</title>
</head>
<body>
  <h3 > Update Form in PHP </h3>
    <form action="" method="post">
      <input type="text" placeholder=" Enter Inventory Sales ID " name="id"/>
      <input type="text" placeholder=" Enter Ticket ID " name="tid"/>
      <input type="text" placeholder=" Enter Product ID " name="pid"/>
      <input type="text" placeholder=" QTY " name="qty"/>
      <input type="text" placeholder=" Unit Price " name="unit"/>
      <input type="text" placeholder=" Discount " name="discount"/>
      <input type="submit" name="update" value="UPDATE"/>
    </form>
</body>
</html>
<?php
$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con,'GroceryStore');

if(isset($_POST['update']))
{
  $id = $_POST['id'];

  $query = "update inventory_sales set ticket_id = '$_POST[tid]', product_id = '$_POST[pid]', qty = '$_POST[qty]', unit_price = '$_POST[unit]', discount = '$_POST[discount]' where ISID ='$_POST[id]'";
  $result = mysqli_query($con,$query);

  if($result)
  {
    header("location:inventorysalesview.php");
  }
  else
  {
    echo ' Please Check Your Query ';
  }
}
?>
