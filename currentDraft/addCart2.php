<form method="get" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <?php 

    echo ($tableCode);
    include('emptyCart.php');
    $CID = $_SESSION['CID'];
    if(isset($_GET['addToCart'])) {
        $query = "SELECT * FROM cart WHERE product_id = '".$_GET['addToCart']."'";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_num_rows($result);
        if($rows > 0) {
            $update = "UPDATE cart SET qty = qty + 1 WHERE product_id = '".$_GET['addToCart']."'";
            $result = mysqli_query($conn,$update);
            $selection = "SELECT cart.CID, cart.qty, cart.product_id FROM cart WHERE product_id = '".$_GET['addToCart']."'";
            $result = mysqli_query($conn,$selection);
            while ($row = mysqli_fetch_assoc($result)) {
                $CID1 = $row['CID'];
                $qty = $row['qty'];
                $product = $row['product_id'];
                }
            $sql = "INSERT INTO item_list (CID, qty, product_id) VALUES ('$CID1', '$qty','$product')";
            $result = mysqli_query($conn,$sql);
        } else {
            $query = "INSERT INTO cart (product_id, qty, CID) VALUE ('".$_GET['addToCart']."', '1', $CID)";
            $result = mysqli_query($conn, $query) or die(" Execution Failed addCart");
            $selection = "SELECT cart.CID, cart.qty, cart.product_id FROM cart WHERE product_id = '".$_GET['addToCart']."'";
            $result = mysqli_query($conn,$selection);
            while ($row = mysqli_fetch_assoc($result)) {
                $CID1 = $row['CID'];
                $qty = $row['qty'];
                $product = $row['product_id'];
                }
            $sql = "INSERT INTO item_list (CID, qty, product_id) VALUES ('$CID1', '$qty','$product')";
            $result = mysqli_query($conn,$sql);
        }
    }
    include('joinCart.php'); 

    ?>
</form>
<br>
<?php

?>