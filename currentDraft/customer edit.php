<html>
<head>
  <title>Document</title>
</head>
<body>
  <h3 > Update Form in PHP </h3>
    <form action="" method="post">
      <input type="text" placeholder=" Enter Customer ID " name="id"/>
      <input type="text" placeholder=" Email " name="email"/>
      <input type="text" placeholder=" Password " name="password"/>
      <input type="text" placeholder=" First Name " name="fname"/>
      <input type="text" placeholder=" Middle Initial " name="mi"/>
      <input type="text" placeholder=" Last Name " name="lname"/>
      <input type="text" placeholder=" Phone Number " name="number"/>
      <input type="text" placeholder=" Rewards " name="rewards"/>
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

  $query = "update customer_info set email = '$_POST[email]', password = '$_POST[password]', first_name = '$_POST[fname]', middle_initial = '$_POST[mi]', last_name = '$_POST[lname]', phone_number = '$_POST[number]', rewards = '$_POST[rewards]' where customer_id='$_POST[id]' ";
  $result = mysqli_query($con,$query);

  if($result)
  {
    header("location:customerview.php");
  }
  else
  {
    echo ' Please Check Your Query ';
  }
}
?>
