<?php
  $con = mysqli_connect('localhost', 'root', '', 'GroceryStore');
  $query = "select * from ticket_system";
  $result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta http-equiv"X-UA-Compatible" content="ie-edge">
  <title>Ticket System Records</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col m-auto">
        <div class="card mt-5">
          <table class="table table-bordered">
            <tr>
              <td> ID </td>
              <td> Description </td>
              <td> QTY </td>
              <td> Unit Price </td>
              <td> Subtotal </td>
              <td> Discount </td>
              <td> Total </td>
              <td> Tax </td>
              <td> Employee ID </td>
            </tr>

            <?php
              while($row=mysqli_fetch_assoc($result))
              {
                $ID = $row['ticket_id'];
                $Description = $row['description'];
                $QTY = $row['qty'];
                $UnitPrice = $row['unit_price'];
                $Subtotal = $row['subtotal'];
                $Discount = $row['discount'];
                $Total = $row['total'];
                $Tax = $row['tax'];
                $EmployeeID = $row['employee_id'];

            ?>
              <tr>
                <td><?php echo $ID ?></td>
                <td><?php echo $Description ?></td>
                <td><?php echo $QTY ?></td>
                <td><?php echo $UnitPrice ?></td>
                <td><?php echo $Subtotal ?></td>
                <td><?php echo $Discount ?></td>
                <td><?php echo $Total ?></td>
                <td><?php echo $Tax ?></td>
                <td><?php echo $EmployeeID ?></td>
                <td><a href ="ticketdelete.php?Del=<?php echo $ID ?>">Delete</a></td>
              </tr>
            <?php
              }
            ?>

          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
