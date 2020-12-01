<?php
    if(isset($_GET['addToOrder'])) {
            $query = "SELECT OTID FROM orders_ticket WHERE employee_id IS NULL";
            $result = mysqli_query($conn, $query) or die(" Execution Failed null address");
            $row = mysqli_num_rows($result);
            $OTID = "";
            while($row = mysqli_fetch_assoc($result)) {
                $OTID = $row['OTID']; 
            }
            $_SESSION['OTID'] = $OTID;
        }
    
?>