<?php
  $con = mysqli_connect('localhost', 'root', '', 'marketpos-2');
  $query = "select * from product_inventory";
  $result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
	 <!--bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--our css -->
  <link rel="stylesheet" href="styleDraft.css">
  <!--jquery scrollbar css -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

  <!--font awesome js -->
  <script defer src="js/solid.js"></script>
  <script defer src="js/fontawesome.js"></script>

  <!-- bootstrap popper js-->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!--jquery -->
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

  <title>Product Inventory Records</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col m-auto">
        <div class="card mt-5">
          <table class="table table-bordered">
            <tr>
              <td> <b>ID</b> </td>
              <td> <b>Barcode</b> </td>
              <td> <b>Brand</b> </td>
              <td> <b>Description </b></td>
              <td> <b>Category</b> </td>
              <td> <b>Unit Price</b> </td>
              <td> <b>Selling Price</b> </td>
              <td> <b>Quantity</b> </td>
              <td> <b>In Stock </b></td>
              <td> <b>Reorder Amount</b> </td>
              <td> <b>Vendor ID </b></td>
            </tr>

            <?php
              while($row=mysqli_fetch_assoc($result))
              {
                $ID = $row['product_id'];
                $Barcode = $row['barcode'];
                $Description = $row['description'];
                $Category = $row['category'];
                $unitPrice = $row['unit_price'];
                $SellingPrice = $row['selling_price'];
                $Quantity = $row['quantity'];
				$inStock = $row['in_stock'];
                $ReorderAmount = $row['reorder_amount'];
                $VendorID = $row['vendor_id'];

            ?>
              <tr>
                <td><?php echo $ID ?></td>
                <td><?php echo $Barcode ?></td>
                <td><?php echo $Description ?></td>
                <td><?php echo $Category ?></td>
                <td><?php echo $unitPrice ?></td>
                <td><?php echo $SellingPrice ?></td>
                <td><?php echo $Quantity ?></td>
                <td><?php echo $inStock ?></td>
                <td><?php echo $ReorderAmount ?></td>
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
