<html>
<head>
  <title>Document</title>
</head>
<body>
  <h3 > Update Form in PHP </h3>
    <form action="" method="post">
      <input type="text" placeholder=" Enter Ticket ID " name="id"/>
      <input type="text" placeholder=" Description " name="d"/>
      <input type="text" placeholder=" QTY " name="q"/>
      <input type="text" placeholder=" Unit Price " name="unit"/>
      <input type="text" placeholder=" Subtotal " name="sub"/>
      <input type="text" placeholder=" Discount " name="discount"/>
      <input type="text" placeholder=" Total " name="total"/>
      <input type="text" placeholder=" Tax " name="tax"/>
      <input type="text" placeholder=" Employee ID " name="eid"/>
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

  $query = "update ticket_system set description = '$_POST[d]', qty = '$_POST[q]', unit_price = '$_POST[unit]', subtotal = '$_POST[sub]', discount = '$_POST[discount]', total = '$_POST[total]', tax = '$_POST[tax]', employee_id = '$_POST[eid]' where ticket_id ='$_POST[id]'";
  $result = mysqli_query($con,$query);

  if($result)
  {
    header("location:ticketview.php");
  }
  else
  {
    echo ' Please Check Your Query ';
  }
}
?>
