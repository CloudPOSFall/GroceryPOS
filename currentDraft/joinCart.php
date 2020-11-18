<br>
<?php

    include_once('config.php');

    $query = "SELECT product_inventory.productName, product_inventory.cost, cart_table.qty FROM product_inventory 
              INNER JOIN cart_table ON product_inventory.product_id=cart_table.product_id";
    $result = mysqli_query($conn, $query) or die("Execution Failed");

    $cartCode = "<table border='1' name='product'>";
    $cartCode .= "<tr> <th>Product Name</th> <th>Quantity</th> <th>Product Price</th> </tr>";
    $total = 0.00;

    while($row = mysqli_fetch_assoc($result)) {
        $newCost = $row['qty'] * $row['cost'];
        $format = number_format($newCost, 2);
        $total = $total + $format;
        $cartCode .= "<tr> <th>".$row['productName']."</th> <th>".$row['qty']."</th> <th>".$format."</th> </tr>";
        $newCost = 0.00;
    }

    echo($cartCode);
    echo("Total Amount: $");
    echo($total);
?>
<br>