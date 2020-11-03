<?php
  require_once('config.php');

  if(isset($_POST['submit']))
  {
    if(empty($_POST['email']) || empty($_POST['password']) || empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['number']) || empty($_POST['stores']) || empty($_POST['company']))
    {
      echo ' Please Fill in the Blanks ';
    }
    else
    {
      $Email = $_POST['email'];
      $Password = $_POST['password'];
      $FirstName = $_POST['fname'];
      $LastName = $_POST['lname'];
      $PhoneNumber = $_POST['number'];
      $NumberofStores = $_POST['stores'];
      $CompanyName = $_POST['company'];

      $query = "insert into storelevel_signup (email, password, first_name, last_name, phone_number, number_of_stores, company_name)
              values ('$Email', '$Password', '$FirstName', '$LastName', '$PhoneNumber', '$NumberofStores', '$CompanyName')";

      $result = mysqli_query($conn, $query);

      if($result)
      {
        header("location:storelevelview.php");
      }
      else
      {
        echo ' Please Check Your Query ';
      }
    }
  }
?>
