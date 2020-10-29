<html>
<head>
  <title>Document</title>
</head>
<body>
  <h3 > Update Form in PHP </h3>
    <form action="" method="post">
      <input type="text" placeholder=" Enter Ticket ID " name="id"/>
      <input type="text" placeholder=" Date " name="date"/>
      <input type="text" placeholder=" Time " name="time"/>
      <input type="text" placeholder=" Subtotal " name="sub"/>
      <input type="text" placeholder=" Total " name="total"/>
      <input type="text" placeholder=" Tax " name="tax"/>
      <input type="text" placeholder=" Tax Rate " name="rate"/>
      <input type="text" placeholder=" Employee ID " name="eid"/>
      <input type="text" placeholder=" Inventory Sales ID " name="isid"/>
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

  $query = "update ticket_system set date = '$_POST[date]', time = '$_POST[time]', subtotal = '$_POST[sub]', total = '$_POST[total]', tax = '$_POST[tax]', tax_rate = '$_POST[rate]', employee_id = '$_POST[eid]', ISID = '$_POST[isid]' where ticket_id ='$_POST[id]'";
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
