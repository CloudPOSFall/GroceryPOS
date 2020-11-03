<?php
require_once('config.php');

  if(isset($_POST['submit']))
  {
    if(empty($_POST['fname']) || empty($_POST['mi']) || empty($_POST['lname']) || empty($_POST['number']) || empty($_POST['rewards']))
    {
      echo ' Please Fill in the Blanks ';
    }
    else
    {
      $Email = $_POST['email'];
      $Password = $_POST['password'];
      $FirstName = $_POST['fname'];
      $MiddleInitial = $_POST['mi'];
      $LastName = $_POST['lname'];
      $PhoneNumber = $_POST['number'];
      $Rewards = $_POST['rewards'];

      $query = "INSERT INTO customer_info (email, password, first_name, middle_initial, last_name, phone_number, rewards)
              values ('$Email', '$Password', '$FirstName', '$MiddleInitial', '$LastName', '$PhoneNumber', '$Rewards')";
      $result = mysqli_query($conn, $query);

      if($result)
      {
        header("location: customerview.php");
      }
      else
      {
        echo ' Please Check Your Query ';
      }
    }
  }
?>
