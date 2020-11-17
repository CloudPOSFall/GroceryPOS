<?php

    include_once('config.php');
    //$query = "SELECT product_inventory.productName product_inventory.cost FROM product_inventory WHERE inventory_sales.product_id = 
    //       product_inventory.product_id";

    $query = "SELECT product_inventory.productName, product_inventory.cost, inventory_sales.qty FROM product_inventory 
              INNER JOIN inventory_sales ON product_inventory.product_id=inventory_sales.product_id";
    $result = mysqli_query($conn, $query) or die("Execution Failed");

    $cartCode = "<table border='1' name='product'>";
    $cartCode .= "<tr> <th>Product Name</th> <th>Product Price</th> </tr>";

    while($row = mysqli_fetch_assoc($result)) {
        $cartCode .= "<tr> <th>".$row['productName']."</th> <th>".$row['cost']."</th> </tr>";
    }

    echo ($cartCode);

?>