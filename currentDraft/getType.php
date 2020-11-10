<?php
    if(isset($_POST["action"])) {
        include_once('config.php');
        $output = '';
        if($_POST["action"] == "productType") {
            $query = "SELECT productSubType FROM product_inventory WHERE productType = '".$_POST["query"]."' GROUP BY productSubType";
            $result = mysqli_query($conn, $query);
            $output .= '<option value="">Select Product Subtype</option>';
            while($row = mysqli_fetch_array($result)) {
                $output .= '<option value="'.$row["productSubType"].'">'.$row["productSubType"].'</option>';
            }
        }
        if($_POST["action"] == "productSubType") {

            $query = "SELECT * FROM product_inventory WHERE productSubType = '".$_POST["action"]."' AND in_stock != 0 ORDER BY productName";

            $result = mysqli_query($conn, $query) or die("Execution Failed");

            $tableCode = "<table border='1' name='product'>";
            $tableCode .= "<tr> <th>Product Name</th> <th>Product Type</th> <th>Product Sub Type</th> <th>Price</th> <th>Add to Cart</th> </tr>";
            
            while($row = mysqli_fetch_assoc($result)) {
                $tableCode .= "<tr> <th>".$row['productName']."</th> <th>".$row['productType']."</th> <th>".$row['productSubType']."</th><th>".$row['unit_price']."</th><th><input type='submit' name='submit' value='Add'></th> </tr>";
            }
        
            $tableCode .= "</table>";
            echo ($tableCode);
        }
        echo $output;
        
    }
?>
