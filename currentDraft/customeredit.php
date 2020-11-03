<html>

<head>
  <title>Document</title>
</head>

<body>
  <h3> Update Form in PHP </h3>
  <form action="" method="post">
    <input type="number" placeholder=" Enter Customer ID " name="id" step="1" />
    <input type="email" placeholder=" Email " name="email" />
    <input type="password" placeholder=" Password " name="password" />
    <input type="text" placeholder=" First Name " name="fname" />
    <input type="text" placeholder=" Middle Initial " name="mi" />
    <input type="text" placeholder=" Last Name " name="lname" />
    <input type="number" placeholder=" Phone Number " name="number" />
    <input type="number" placeholder=" Rewards " name="rewards" step="1" />
    <input type="submit" name="update" value="UPDATE" />
  </form>
</body>

</html>
<?php
include_once ('config.php');

if (isset($_POST['update'])) {
  $id = $_POST['id'];

  $query = "update customer_info set email = '$_POST[email]', password = '$_POST[password]', first_name = '$_POST[fname]', middle_initial = '$_POST[mi]', last_name = '$_POST[lname]', phone_number = '$_POST[number]', rewards = '$_POST[rewards]' where customer_id='$_POST[id]' ";
  $result = mysqli_query($conn, $query);

  if ($result) {
    header("location:customerview.php");
  } else {
    echo ' Please Check Your Query ';
  }
}
?>