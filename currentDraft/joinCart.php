<br>
<?php

    include_once('config.php');

    $query = "SELECT product_inventory.productName, product_inventory.cost, inventory_sales.qty FROM product_inventory 
              INNER JOIN inventory_sales ON product_inventory.product_id=inventory_sales.product_id";
    $result = mysqli_query($conn, $query) or die("Execution Failed");

    $cartCode = "<table border='1' name='product'>";
    $cartCode .= "<tr> <th>Product Name</th> <th>Product Price</th> </tr>";
    $total = 0.00;

    while($row = mysqli_fetch_assoc($result)) {
        $newCost = $row['qty'] * $row['cost'];
        $format = number_format($newCost, 2);
        $total = $total + $format;
        $cartCode .= "<tr> <th>".$row['productName']."</th> <th>".$format." </th> </tr>";
    }

    echo($cartCode);
    echo($total);
?>
<br>