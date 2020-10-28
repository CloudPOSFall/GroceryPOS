<?php
  $conn = mysqli_connect('localhost', 'root', '', 'GroceryStore');

  if(!$conn)
  {
    echo 'Not Connected To Server';
  }

  if(!mysqli_select_db($conn, 'GroceryStore'))
  {
    echo 'Database Not Selected';
  }

  if(isset($_POST['submit']))
  {
    if(empty($_POST['date']) || empty($_POST['number']) || empty($_POST['eid']))
    {
      echo ' Please Fill in the Blanks ';
    }
    else
    {
      $Date = $_POST['date'];
      $NumberofSales = $_POST['number'];
      $EmployeeID = $_POST['eid'];

      $query = "insert into dailysales (date, number_of_sales, employee_id)
              values ('$Date', '$NumberofSales', '$EmployeeID')";

      $result = mysqli_query($conn, $query);

      if($result)
      {
        header("location:dailysalesview.php");
      }
      else
      {
        echo ' Please Check Your Query ';
      }
    }
  }
?>
