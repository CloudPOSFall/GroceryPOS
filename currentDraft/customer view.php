<?php
  $con = mysqli_connect('localhost', 'root', '', 'GroceryStore');
  $query = "select * from customer_info";
  $result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta http-equiv"X-UA-Compatible" content="ie-edge">
  <title>View Customer Records</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col m-auto">
        <div class="card mt-5">
          <table class="table table-bordered">
            <tr>
              <td> ID </td>
              <td> Email </td>
              <td> Password </td>
              <td> First Name </td>
              <td> Middle Initial </td>
              <td> Last Name </td>
              <td> Phone Number </td>
              <td> Rewards </td>
            </tr>

            <?php
              while($row=mysqli_fetch_assoc($result))
              {
                $ID = $row['customer_id'];
                $Email = $row['email'];
                $Password = $row['password'];
                $FirstName = $row['first_name'];
                $MiddleInitial = $row['middle_initial'];
                $LastName = $row['last_name'];
                $PhoneNumber = $row['phone_number'];
                $Rewards = $row['rewards'];

            ?>
              <tr>
                <td><?php echo $ID ?></td>
                <td><?php echo $FirstName ?></td>
                <td><?php echo $MiddleInitial ?></td>
                <td><?php echo $LastName ?></td>
                <td><?php echo $PhoneNumber ?></td>
                <td><?php echo $Rewards ?></td>
                <td><a href ="customerdelete.php?Del=<?php echo $ID?>">Delete</a></td>
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
