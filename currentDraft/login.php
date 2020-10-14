<?php
  include('config.php');
   session_start();
   if (mysqli_select_db($con, 'employee_id')){
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT id FROM admin WHERE email = '$myemail' and passcode = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
        echo("hello");
        session_register("myemail");
         $_SESSION['login_user'] = $myemail;

         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   }
?>
