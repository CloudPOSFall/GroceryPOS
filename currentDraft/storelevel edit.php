<html>
<head>
  <title>Document</title>
</head>
<body>
  <h3 > Update Form in PHP </h3>
    <form action="" method="post">
      <input type="text" placeholder=" Enter ID " name="id"/>
      <input type="text" placeholder=" Email " name="email"/>
      <input type="text" placeholder=" Password " name="password"/>
      <input type="text" placeholder=" First Name " name="fname"/>
      <input type="text" placeholder=" Last Name " name="lname"/>
      <input type="text" placeholder=" Phone Number " name="number"/>
      <input type="text" placeholder=" Number of Stores " name="stores"/>
      <input type="text" placeholder=" Company Name " name="company"/>
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

  $query = "update storelevel_signup set email = '$_POST[email]', password = '$_POST[password]', first_name = '$_POST[fname]', last_name = '$_POST[lname]', phone_number = '$_POST[number]', number_of_stores = '$_POST[stores]', company_name = '$_POST[company]' where ID ='$_POST[id]'";
  $result = mysqli_query($con,$query);

  if($result)
  {
    header("location:storelevelview.php");
  }
  else
  {
    echo ' Please Check Your Query ';
  }
}
?>
