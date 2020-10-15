<?php
  include_once ('config.php');

  if(!$conn)
  {
    echo 'Not Connected To Server';
  }

  if(!mysqli_select_db($conn, 'grocerystore'))
  {
    echo 'Database Not Selected';
  }

  $email = $_POST['email'];
  $password = $_POST['pass'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone = $_POST['phone'];
  $numstores = $_POST['stores'];
  $company = $_POST['company'];

  $sql = "INSERT INTO storelevel_signup (email, password, first_name, last_name, phone_number, number_of_stores, company_name)
          VALUES ('$email', '$password', '$fname', '$lname', '$phone', '$numstores', '$company')";

  if(!mysqli_query($conn, $sql))
  {
    echo 'Not Inserted';
  }
  else
  {
    echo 'Inserted';
  }

  header("refresh:2; url=signupDraft.php");

?>