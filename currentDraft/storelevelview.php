<?php
include_once ('config.php');
  $query = "select * from storelevel_signup";
  $result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>StoreLevel Sign Up Records</title>
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
              <td> Last Name </td>
              <td> Phone Number </td>
              <td> Number of Stores </td>
              <td> Company Name </td>
            </tr>

            <?php
              while($row=mysqli_fetch_assoc($result))
              {
                $ID = $row['ID'];
                $Email = $row['email'];
                $Password = $row['password'];
                $FirstName = $row['first_name'];
                $LastName = $row['last_name'];
                $PhoneNumber = $row['phone_number'];
                $NumberofStores = $row['number_of_stores'];
                $CompanyName = $row['company_name'];

            ?>
              <tr>
                <td><?php echo $ID ?></td>
                <td><?php echo $Email ?></td>
                <td><?php echo $Password ?></td>
                <td><?php echo $FirstName ?></td>
                <td><?php echo $LastName ?></td>
                <td><?php echo $PhoneNumber ?></td>
                <td><?php echo $NumberofStores ?></td>
                <td><?php echo $CompanyName ?></td>
                <td><a href ="storeleveldelete.php?Del=<?php echo $ID ?>">Delete</a></td>
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
