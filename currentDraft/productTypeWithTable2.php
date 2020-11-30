<?php
    include_once('config.php');

    $query = "SELECT * FROM product_inventory";
    $result = mysqli_query($conn, $query) or die("Execution Failed");

    $tableCode = "<table border='1' name='product'>";
    $tableCode .= "<tr> <th>Product Name</th> <th>Product Type</th> <th>Product Sub Type</th> <th>Price</th> <th>Add to Order</th> </tr>";

    while($row = mysqli_fetch_assoc($result)) {
        $tableCode .= "<tr> <th>".$row['productName']."</th> <th>".$row['productType']."</th> <th>"
        .$row['productSubType']."</th><th>".$row['cost']."</th><th><input type='submit' name='addToOrder' value=".$row['product_id']."
        ></th> </tr>";
    }
    $tableCode .= "</table>";
    //echo ($tableCode);
    //include('addCart.php');
?>