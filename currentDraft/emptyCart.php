<?php

    $query = "SELECT product_id FROM cart";
    $result = mysqli_query($conn, $query) or die(" Execution Failed add2Cart");
    $rows = mysqli_num_rows($result);
    if($rows > 0){
    } else {
        if(isset($_GET['addToCart'])) {
            // 
            $query = "INSERT INTO cart_inprogress (customer_id, ticket_id) VALUES (NULL, NULL)";
            $result = mysqli_query($conn, $query) or die(" Execution Failed inprog");

            $query = "SELECT CID FROM cart_inprogress WHERE customer_id IS NULL";
            $result = mysqli_query($conn, $query) or die(" Execution Failed null address");
            $row = mysqli_num_rows($result);
            $CID = "";
            while($row = mysqli_fetch_assoc($result)) {
                $CID = $row['CID']; 
            }
            echo($CID);
            $_SESSION['CID'] = $CID;
            $query = "INSERT INTO cart (product_id, qty, CID) VALUES ('".$_GET['addToCart']."', 1, $CID)";
            $result = mysqli_query($conn, $query) or die(" Execution Failed addCart");
        }
    }
?>