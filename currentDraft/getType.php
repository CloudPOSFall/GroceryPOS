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
        if($_POST["action"] == "productSubType") {}
        echo $output;
    }
?>
