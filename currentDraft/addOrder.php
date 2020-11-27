<form method="get" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <?php 
    echo ($tableCode);
    include('emptyOrder.php');
    if(isset($_GET['addToOrder'])) {
       
        $OTID=$_SESSION['OTID'];
        
        $query = "INSERT INTO orders (OTID) VALUES ($OTID)";
        $result = mysqli_query($conn, $query) or die(" Execution Failed addCart in addorder 1");

        $query = "SELECT * FROM orders WHERE OTID='$OTID' AND product_id = '".$_GET['addToOrder']."'";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_num_rows($result);
        
        if($rows > 0) {
            $update = "UPDATE orders SET stock_amount = stock_amount + 1 WHERE product_id = '".$_GET['addToOrder']."' AND OTID='$OTID'";
            $result = mysqli_query($conn,$update);
        } else {
            $query = "UPDATE orders SET stock_amount = '1', product_id = '".$_GET['addToOrder']."' WHERE OTID='$OTID'";
            $result = mysqli_query($conn, $query) or die(" Execution Failed addCart in addorder");
        }
    }
    include('joinOrder.php'); 

    ?>
</form>
<br>
<?php

?>