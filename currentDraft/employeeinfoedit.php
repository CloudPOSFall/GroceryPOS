<html>
<head>
  <title>Document</title>
</head>
<body>
  <h3 > Update Form in PHP </h3>
    <form action="" method="post">
      <input type="text" placeholder=" Enter Customer ID " name="id"/>
      <input type="text" placeholder=" First Name " name="fname"/>
      <input type="text" placeholder=" Middle Iniial " name="mi"/>
      <input type="text" placeholder=" Last Name " name="lname"/>
      <input type="number" placeholder=" User ID " name="id"/>
      <input type="number" placeholder=" Phone Number " name="number"/>
      <input type="number" placeholder=" SSN " name="ssn"/>
      <input type="text" placeholder=" Street Address " name="street"/>
      <input type="text" placeholder=" City " name="city"/>
      <input type="text" placeholder=" State " name="state"/>
      <input type="number" placeholder=" Zip Code " name="zip"/>
      Start Date <input type="date" placeholder=" dd-mm-yyyy " name="start">
      End Date <input type="date" placeholder=" dd-mm-yyyy " name="end">
      <input type="submit" name="update" value="UPDATE"/>
    </form>
</body>
</html>
<?php
require_once('config.php');

if(isset($_POST['update']))
{
  $id = $_POST['id'];

  $query = "update employee_info set first_name = '$_POST[fname]', middle_initial = '$_POST[mi]', last_name = '$_POST[lname]', user_id = '$_POST[uid]', phone_number = '$_POST[number]', SSN = '$_POST[ssn]', street_address = '$_POST[street]', city = '$_POST[city]', state = '$_POST[state]', zip_code = '$_POST[zip]', start_date = '$_POST[start]', end_date = '$_POST[end]' where employee_information='$_POST[id]'";
  $result = mysqli_query($conn,$query);

  if($result)
  {
    header("location:employeeinfoview.php");
  }
  else
  {
    echo ' Please Check Your Query ';
  }
}
?>
