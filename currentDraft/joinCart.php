<?php

    include_once('config.php');
    $query = "SELECT product_inventory.productName product_inventory.cost FROM product_inventory WHERE inventory_sales.product_id = 
            product_inventory.product_id";
    $result = mysqli_query($conn, $query) or die("Execution Failed");

    $cartCode = "<table border='1' name='product'>";
    $cartCode .= "<tr> <th>Product Name</th> <th>Product Price</th> </tr>";

    while($row = mysqli_fetch_assoc($result)) {
        $cartCode .= "<tr> <th>".$row['productName']."</th> <th>".$row['unit_price']."</th> </tr>";
    }

    echo ($cartCode);

?>