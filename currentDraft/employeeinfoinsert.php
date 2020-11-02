<?php
  $con = mysqli_connect('localhost', 'root', '', 'GroceryStore');

  if(!$con)
  {
    echo 'Not Connected To Server';
  }

  if(!mysqli_select_db($con, 'GroceryStore'))
  {
    echo 'Database Not Selected';
  }

  if(isset($_POST['submit']))
  {
    if(empty($_POST['fname']) || empty($_POST['mi']) || empty($_POST['lname']) || empty($_POST['id']) || empty($_POST['number']) || empty($_POST['ssn']) || empty($_POST['street']) ||
     empty($_POST['city']) || empty($_POST['state']) || empty($_POST['zip']) || empty($_POST['start']) || empty($_POST['end']))
    {
      echo ' Please Fill in the Blanks ';
    }
    else
    {
      $FirstName = $_POST['fname'];
      $MiddleIniial = $_POST['mi'];
      $LastName = $_POST['lname'];
      $UserID = $_POST['id'];
      $PhoneNumber = $_POST['number'];
      $SSN = $_POST['ssn'];
      $StreetAddress = $_POST['street'];
      $City = $_POST['city'];
      $State = $_POST['state'];
      $ZipCode = $_POST['zip'];
      $StartDate = $_POST['start'];
      $EndDate = $_POST['end'];

      $query = "insert into employee_info (first_name, middle_initial, last_name, user_id, phone_number, SSN, street_address, city, state, zip_code, start_date, end_date)
              values ('$FirstName', '$MiddleIniial', '$LastName', '$UserID', '$PhoneNumber', '$SSN', '$StreetAddress', '$City', '$State', '$ZipCode', '$StartDate', '$EndDate')";

      $result = mysqli_query($con, $query);

      if($result)
      {
        header("location:employeeinfoview.php");
      }
      else
      {
        echo ' Please Check Your Query ';
      }
    }
  }
?>
