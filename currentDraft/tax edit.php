<html>
<head>
  <title>Document</title>
</head>
<body>
  <h3 > Update Form in PHP </h3>
    <form action="" method="post">
      <input type="text" placeholder=" Enter Tax ID " name="id"/>
      <input type="text" placeholder=" Tax Year" name="year"/>
      <input type="number" placeholder=" State Rate " name="state" step="0.01"/>
      <input type="number" placeholder=" County Rate " name="county" step="0.01"/>
      <input type="number" placeholder=" City Rate " name="city" step="0.01"/>
      <input type="number" placeholder=" Tax Rate " name="tax" step="0.01"/>
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

  $query = "update tax_table set tax_year = '$_POST[year]', state_rate = '$_POST[state]', county_rate = '$_POST[county]', city_rate = '$_POST[city]', tax_rate = '$_POST[tax]' where TTID ='$_POST[id]'";
  $result = mysqli_query($con,$query);

  if($result)
  {
    header("location:taxview.php");
  }
  else
  {
    echo ' Please Check Your Query ';
  }
}
?>
