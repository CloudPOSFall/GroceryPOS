<?php
    include_once('config.php');
    include_once('getProductByType.php');
    
    if(isset($_GET['.$isSelected.'])) {
        $query = "SELECT products.*, price.* FROM products LEFT JOIN price ON products.productType = price.productType WHERE product.productType =
                '".$_GET['.$isSelected.']."' ORDER BY product.name";
    } else {
        $query = "SELECT * From products WHERE inStock != 0";
    }

    $result = mysqli_query($conn, $query) or die("Execution Failed");

    $tableCode = "<table border='1' name='products'>";
    $tableCode .= "<tr><th>Product Name</th><th>Product Type</th><th>Price</th></tr>";

    while($row = mysqli_fetch_assoc($result)) {
        $tableCode .= "<tr><th>".$row['productName']."</th><th>".$row['productType']."</th><th>".$row['price']."</th></tr>";
    }

    $tableCode .= "</table>";
    echo ($tableCode);

    include_once('checkInStock.php');
?>