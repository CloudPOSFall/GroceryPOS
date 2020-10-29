<?php
  $con = mysqli_connect('localhost', 'root', '', 'GroceryStore');
  $query = "select * from product_inventory";
  $result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta http-equiv"X-UA-Compatible" content="ie-edge">
  <title>Product Inventory Records</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col m-auto">
        <div class="card mt-5">
          <table class="table table-bordered">
            <tr>
              <td> ID </td>
              <td> QR Code </td>
              <td> Serial Number </td>
              <td> Make </td>
              <td> Model Number </td>
              <td> Model Name </td>
              <td> Description </td>
              <td> Link of Supplier Data </td>
              <td> Cost </td>
              <td> Selling Price </td>
              <td> MSRP </td>
              <td> In Stock </td>
              <td> Reorder Amount </td>
              <td> Base Stock </td>
              <td> Vendor ID </td>
            </tr>

            <?php
              while($row=mysqli_fetch_assoc($result))
              {
                $ID = $row['product_id'];
                $QRCode = $row['QR_code'];
                $SerialNumber = $row['serial_number'];
                $Make = $row['make'];
                $ModelNumber = $row['model_number'];
                $ModelName = $row['model_name'];
                $Description = $row['description'];
                $LinkofSupplierData = $row['link_supplier_data'];
                $Cost = $row['cost'];
                $SellingPrice = $row['selling_price'];
                $MSRP = $row['MSRP'];
                $InStock = $row['in_stock'];
                $ReorderAmount = $row['reorder_amount'];
                $BaseStock = $row['base_stock'];
                $VendorID = $row['vendor_id'];

            ?>
              <tr>
                <td><?php echo $ID ?></td>
                <td><?php echo $QRCode ?></td>
                <td><?php echo $SerialNumber ?></td>
                <td><?php echo $Make ?></td>
                <td><?php echo $ModelNumber ?></td>
                <td><?php echo $ModelName ?></td>
                <td><?php echo $Description ?></td>
                <td><?php echo $LinkofSupplierData ?></td>
                <td><?php echo $Cost ?></td>
                <td><?php echo $SellingPrice ?></td>
                <td><?php echo $MSRP ?></td>
                <td><?php echo $InStock ?></td>
                <td><?php echo $ReorderAmount ?></td>
                <td><?php echo $BaseStock ?></td>
                <td><?php echo $VendorID ?></td>
                <td><a href ="productdelete.php?Del=<?php echo $ID ?>">Delete</a></td>
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
