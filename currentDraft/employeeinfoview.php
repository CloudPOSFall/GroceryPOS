<?php
include_once ('config.php');
  $query = "select * from employee_info";
  $result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta http-equiv= "X-UA-Compatible" content="ie-edge">
  <title>Employee Information Records</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col m-auto">
        <div class="card mt-5">
          <table class="table table-bordered">
            <tr>
              <td> ID </td>
              <td> First Name </td>
              <td> Middle Initial </td>
              <td> Last Name </td>
              <td> User ID </td>
              <td> Phone Number </td>
              <td> SSN </td>
              <td> Street Address </td>
              <td> City </td>
              <td> State </td>
              <td> Zip Code </td>
              <td> Start Date </td>
              <td> End Date </td>
            </tr>

            <?php
              while($row=mysqli_fetch_assoc($result))
              {
                $ID = $row['employee_information'];
                $FirstName = $row['first_name'];
                $MiddleIniial = $row['middle_initial'];
                $LastName = $row['last_name'];
                $UserID = $row['user_id'];
                $PhoneNumber = $row['phone_number'];
                $SSN = $row['SSN'];
                $StreetAddress = $row['street_address'];
                $City = $row['city'];
                $State = $row['state'];
                $ZipCode = $row['zip_code'];
                $StartDate = $row['start_date'];
                $EndDate = $row['end_date'];
            ?>
              <tr>
                <td><?php echo $ID ?></td>
                <td><?php echo $FirstName ?></td>
                <td><?php echo $MiddleIniial ?></td>
                <td><?php echo $LastName ?></td>
                <td><?php echo $UserID ?></td>
                <td><?php echo $PhoneNumber ?></td>
                <td><?php echo $SSN ?></td>
                <td><?php echo $StreetAddress ?></td>
                <td><?php echo $City ?></td>
                <td><?php echo $State ?></td>
                <td><?php echo $ZipCode ?></td>
                <td><?php echo $StartDate ?></td>
                <td><?php echo $EndDate ?></td>
                <td><a href ="employeeinfodelete.php?Del=<?php echo $ID?>">Delete</a></td>
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
