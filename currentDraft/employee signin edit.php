<html>
<head>
  <title>Document</title>
</head>
<body>
  <h3 > Update Form in PHP </h3>
    <form action="" method="post">
      <input type="text" placeholder=" Enter Employee ID " name="id"/>
      <input type="text" placeholder=" Email " name="email"/>
      <input type="text" placeholder=" Password " name="password"/>
      <input type="text" placeholder=" Pin Number " name="pin"/>
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

  $query = "update employee_id set email = '$_POST[email]', password = '$_POST[password]', pin_number = '$_POST[pin]', employee_information = '$_POST[id]' where employee_id='$_POST[id]'";
  $result = mysqli_query($con,$query);

  if($result)
  {
    header("location:employeesigninview.php");
  }
  else
  {
    echo ' Please Check Your Query ';
  }
}
?>
