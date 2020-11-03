<html>
<head>
  <title>Document</title>
</head>
<body>
  <h3 > Update Form in PHP </h3>
    <form action="" method="post">
      <input type="number" placeholder=" Enter Ticket ID " name="id" step="1"/>
      <input type="date" placeholder=" Date " name="date">
      <input type="text" placeholder=" Time " name="time">
      <input type="number" placeholder=" Subtotal " name="sub" step="0.01">
      <input type="number" placeholder=" Total " name="total" step="0.01">
      <input type="number" placeholder=" Tax " name="tax" step="0.01">
      <input type="number" placeholder=" Tax Rate " name="rate" step="0.01">
      <input type="number" placeholder=" Employee ID " name="eid" step="1">
      <input type="number" placeholder=" Inventory Sales ID " name="isid" step="1">
      <input type="submit" name="update" value="UPDATE"/>
    </form>
</body>
</html>
<?php
require_once('config.php');

if(isset($_POST['update']))
{
  $id = $_POST['id'];

  $query = "update ticket_system set date = '$_POST[date]', time = '$_POST[time]', subtotal = '$_POST[sub]', total = '$_POST[total]', tax = '$_POST[tax]', tax_rate = '$_POST[rate]', employee_id = '$_POST[eid]', ISID = '$_POST[isid]' where ticket_id ='$_POST[id]'";
  $result = mysqli_query($conn,$query);

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
