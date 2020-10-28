<html>
<head>
  <title>Document</title>
</head>
<body>
  <h3 > Update Form in PHP </h3>
    <form action="" method="post">
      <input type="text" placeholder=" Enter Sales ID " name="id"/>
      <input type="text" placeholder=" Date " name="date"/>
      <input type="text" placeholder=" Number of Sales " name="number"/>
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

  $query = "update daily_sales set date = '$_POST[date]', number_of_sales = '$_POST[number]', employee_id = '$_POST[eid]' where daily_sales_id='$_POST[id]'";
  $result = mysqli_query($con,$query);

  if($result)
  {
    header("location:dailysalesview.php");
  }
  else
  {
    echo ' Please Check Your Query ';
  }
}
?>
