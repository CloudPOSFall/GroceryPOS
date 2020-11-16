<?php
include_once ('config.php');

  if(isset($_POST['submit']))
  {
      $Email = $_POST['email'];
      $Password = $_POST['password'];
      $FirstName = $_POST['fname'];
      $LastName = $_POST['lname'];
      $PhoneNumber = $_POST['phone'];
      $SSN = $_POST['social'];
      $StreetAddress = $_POST['street'];
      $City = $_POST['city'];
      $State = $_POST['state'];
      $ZipCode = $_POST['zip'];
      $Company = $_POST['company'];
      $Stores = $_POST['stores'];

      $query = "INSERT into employee_info (email, password, first_name, last_name, phone_number, SSN, street_address, city, state, zip_code, company_name)
              values ('$Email', '$Password', '$FirstName', '$LastName', '$PhoneNumber', '$SSN', '$StreetAddress', '$City', '$State', '$ZipCode', '$Company')";

      $result = mysqli_query($conn, $query);

      if($result)
      {
        $query1 = "INSERT into storelevel_signup (number_of_stores)
                  values ('$Stores')";
        $result1 = mysqli_query($conn, $query1);
        
        if($result1)
        {
          header("location:accountHomeDraft.php");
        }
      }
      else
      {
        header("location:signupDraft.php");
      }
    }
?>