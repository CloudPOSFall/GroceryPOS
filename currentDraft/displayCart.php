<?php

    include_once('config.php');
    $query = "SELECT * FROM inventory_sales ORDER BY product_id";

    $result = mysqli_query($conn, $query) or die("Execution Failed");

    $data = [];

    while($row = mysqli_fetch_assoc($result)) {
        //echo($row['product_id']);
        
        if($row['product_id']){
            echo("id:");
            echo($row['product_id']);
            echo(" ");


        }
        if($row['qty']){
            echo("qty:");
            echo($row['qty']);
            echo(" ");


        }
    }

?>