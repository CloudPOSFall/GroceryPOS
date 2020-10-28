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
    if(empty($_POST['d']) || empty($_POST['q']) || empty($_POST['unit']) || empty($_POST['sub']) || empty($_POST['discount']) || empty($_POST['total']) || empty($_POST['tax'])
      || empty($_POST['id']))
    {
      echo ' Please Fill in the Blanks ';
    }
    else
    {
      $Description = $_POST['d'];
      $QTY = $_POST['q'];
      $UnitPrice = $_POST['unit'];
      $Subtotal = $_POST['sub'];
      $Discount = $_POST['discount'];
      $Total = $_POST['total'];
      $Tax = $_POST['tax'];
      $EmployeeID = $_POST['id'];

      $query = "insert into ticket_system (description, qty, unit_price, subtotal, discount, total, tax, employee_id)
              values ('$Description', '$QTY', '$UnitPrice', '$Subtotal', '$Discount', '$Total', '$Tax', '$EmployeeID')";

      $result = mysqli_query($con, $query);

      if($result)
      {
        header("location:ticketview.php");
      }
      else
      {
        echo ' Please Check Your Query ';
      }
    }
  }
?>
