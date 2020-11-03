<?php
    include_once('config.php');

    $query = "SELECT DISTINCT productType FROM products ORDER BY productType";

    $result = mysqli_query($conn, $query) or die("Execution failed");

    $tableCode = "<select name='productType'>";

    while($row = mysqli_fetch_assoc($result)) {
        $isSelected = "";
        if(isset($_GET['productType']) && $_GET['productType'] == $row['productType']) {
            $isSelected = "selected";
        }
        $tableCode .= "<option value= ".$row['productType']." ".$isSelected.">".$row['productType']. "</option> \n ";
    }

    $tableCode .= "</select>";
    echo($tableCode);
?>