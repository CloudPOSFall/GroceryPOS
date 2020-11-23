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
        } else {
            $query = "INSERT INTO cart (product_id, qty, CID) VALUE ('".$_GET['addToCart']."', 1, $CID)";
            $result = mysqli_query($conn, $query) or die(" Execution Failed addCart");
        }
    }
    include('joinCart.php'); 

    ?>
</form>
<br>
<?php

?>