<?php
    include_once('config.php');

    $query;
    if(isset($_POST['productSubType'])) {
        $query = "SELECT * FROM product_inventory WHERE productSubType = '".$_POST['productSubType']."' AND in_stock != 0 ORDER BY productName";
    }
    else if(isset($_POST['productType'])) {
        $query = "SELECT * FROM product_inventory WHERE productType = '".$_POST['productType']."' AND in_stock != 0 ORDER BY productName";
    } else 
        $query = "SELECT * FROM product_inventory WHERE in_stock != 0 ORDER BY productName";
    

    $result = mysqli_query($conn, $query) or die("Execution Failed");

    $tableCode = "<table border='1' name='product'>";
    $tableCode .= "<tr> <th>Product Name</th> <th>Product Type</th> <th>Product Sub Type</th> <th>Price</th> <th>Add to Cart</th> </tr>";

    while($row = mysqli_fetch_assoc($result)) {
        $tableCode .= "<tr> <th>".$row['productName']."</th> <th>".$row['productType']."</th> <th>"
        .$row['productSubType']."</th><th>".$row['unit_price']."</th><th><input type='submit' name='addToCart' value=".$row['product_id']."
        ></th> </tr>";
    }
    $tableCode .= "</table>";
    //echo ($tableCode);
    //include('addCart.php');
?>