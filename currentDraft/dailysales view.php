<?php
  $con = mysqli_connect('localhost', 'root', '', 'GroceryStore');
  $query = "select * from dailysales";
  $result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta http-equiv"X-UA-Compatible" content="ie-edge">
  <title>View Daily Sales Records</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col m-auto">
        <div class="card mt-5">
          <table class="table table-bordered">
            <tr>
              <td> ID </td>
              <td> Date </td>
              <td> Number of Sales </td>
              <td> Employee ID </td>
            </tr>

            <?php
              while($row=mysqli_fetch_assoc($result))
              {
                $ID = $row['daily_sales_id'];
                $Date = $row['date'];
                $NumberofSales = $row['number_of_sales'];
                $EmployeeID = $row['employee_id'];

            ?>
              <tr>
                <td><?php echo $ID ?></td>
                <td><?php echo $Date ?></td>
                <td><?php echo $NumberofSales ?></td>
                <td><?php echo $EmployeeID ?></td>
                <td><a href ="dailysalesdelete.php?Del=<?php echo $ID?>">Delete</a></td>
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
