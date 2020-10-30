<?php
  $con = mysqli_connect('localhost', 'root', '', 'GroceryStore');
  $query = "select * from vendorinfo";
  $result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta http-equiv"X-UA-Compatible" content="ie-edge">
  <title>View Vendor Records</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col m-auto">
        <div class="card mt-5">
          <table class="table table-bordered">
            <tr>
              <td> ID </td>
              <td> Vendor Name </td>
              <td> Vendor Number </td>
              <td> Vendor Address </td>
              <td> Company Code </td>
              <td> Shipments </td>
            </tr>

            <?php
              while($row=mysqli_fetch_assoc($result))
              {
                $ID = $row['vendor_id'];
                $VendorName = $row['vendor_name'];
                $VendorNumber = $row['vendor_number'];
                $VendorAddress = $row['vendor_address'];
                $CompanyCode = $row['company_code'];
                $Shipments = $row['shipments'];

            ?>
              <tr>
                <td><?php echo $ID ?></td>
                <td><?php echo $VendorName ?></td>
                <td><?php echo $VendorNumber ?></td>
                <td><?php echo $VendorAddress ?></td>
                <td><?php echo $CompanyCode ?></td>
                <td><?php echo $Shipments ?></td>
                <td><a href ="vendordelete.php?Del=<?php echo $ID ?>">Delete</a></td>
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
