<?php
    include_once('config.php');

    $query = "SELECT DISTINCT productSubType FROM product_inventory WHERE productType = '".$productType."' ORDER BY productSubType";

    $result = mysqli_query($conn, $query) or die("Execution failed");

    $tableCode = "<select name='productSubType'>";

    while($row = mysqli_fetch_assoc($result)) {
        $isSelected = "";
        if(isset($_POST['productSubType']) && $_POST['productSubType'] == $row['productSubType']) {
            $isSelected = "selected";
        }
        $tableCode .= "<option value= ".$row['productSubType']." ".$isSelected.">".$row['productSubType']. "</option> \n ";
    }
    $tableCode .= "</select>";
    echo($tableCode);    
?>