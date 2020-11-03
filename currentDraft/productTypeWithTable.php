<?php
    include_once('config.php');

    $query;
    if(isset($_GET['productType'])) {
        $query = "SELECT * FROM products WHERE productType = '".$_GET['productType']."' AND inStock != 0 ORDER BY productName";
    } 

    $result = mysqli_query($conn, $query) or die("Execution Failed");

    $tableCode = "<table border='1' name='products'>";
    $tableCode .= "<tr> <th>Product Name</th> <th>Product Type</th> <th>Product Sub Type</th> <th>Price</th> <th>Add to Cart</th> </tr>";

    while($row = mysqli_fetch_assoc($result)) {
        $tableCode .= "<tr> <th>".$row['productName']."</th> <th>".$row['productType']."</th> <th>".$row['productSubType']."</th><th>".$row['price']."</th><th><input type='submit' name='submit' value='Add'></th> </tr>";
    }

    $tableCode .= "</table>";
    echo ($tableCode);
?>