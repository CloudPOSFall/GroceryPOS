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
    if(empty($_POST['date']) || empty($_POST['time']) || empty($_POST['sub']) || empty($_POST['total']) || empty($_POST['tax']) || empty($_POST['rate']) || empty($_POST['eid'])
      || empty($_POST['isid']))
    {
      echo ' Please Fill in the Blanks ';
    }
    else
    {
      $Date = $_POST['date'];
      $Time = $_POST['time'];
      $Subtotal = $_POST['sub'];
      $Total = $_POST['total'];
      $Tax = $_POST['tax'];
      $TaxRate = $_POST['rate'];
      $EmployeeID = $_POST['eid'];
      $InventorySalesID = $_POST['isid'];

      $query = "insert into ticket_system (date, time, subtotal, total, tax, tax_rate, employee_id, ISID)
              values ('$Date', '$Time', '$Subtotal', '$Total', '$Tax', '$TaxRate', '$EmployeeID', '$InventorySalesID')";

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
