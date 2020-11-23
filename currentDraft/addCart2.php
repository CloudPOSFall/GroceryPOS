<form method="get" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <?php 

    echo ($tableCode);
    include('emptyCart.php');
    $CID = $_SESSION['CID'];
    $query = "SELECT product_id FROM cart";
    $result = mysqli_query($conn, $query) or die(" Execution Failed add2Cart");
    $rows = mysqli_num_rows($result);
    if($rows > 0){
        // records exist
        /*if(isset($_GET['addToCart'])) {
            $query = "SELECT * FROM cart WHERE product_id = '".$_GET['addToCart']."'";
            $result = mysqli_query($conn,$query);
            $rows = mysqli_num_rows($result);
            if($rows > 0) {
                $update = "UPDATE cart SET qty = qty + 1 WHERE product_id = '".$_GET['addToCart']."'";
                $result = mysqli_query($conn,$update);
            } else {
                $query = "INSERT INTO cart (product_id, qty, CID) VALUE ('".$_GET['addToCart']."', 1, $CID)";
                $result = mysqli_query($conn, $query) or die(" Execution Failed addCart");
            }*/ 
        
    } else {
        // no records exist
        //if(isset($_GET['addToCart'])) {
        //    $query = "INSERT INTO cart_inprogress (customer_id, ticket_id) VALUES (NULL, NULL)";
        //    $result = mysqli_query($conn, $query) or die(" Execution Failed inprog");

        //    $query = "SELECT CID FROM cart_inprogress WHERE customer_id IS NULL";
        //    $result = mysqli_query($conn, $query) or die(" Execution Failed null address");
        //    $row = mysqli_num_rows($result);
        //    $CID = "";
        //    while($row = mysqli_fetch_assoc($result)) {
        //        $CID = $row['CID']; 
        //    }
        //    echo($CID);

        //    $query = "INSERT INTO cart (product_id, qty, CID) VALUES ('".$_GET['addToCart']."', 1, $CID)";
        //    $result = mysqli_query($conn, $query) or die(" Execution Failed addCart");
        //}
    }




        //$query = "SELECT * FROM cart WHERE product_id = '".$_GET['addToCart']."'";
        //$result = mysqli_query($conn,$query);
        //$rows = mysqli_num_rows($result);

        //if($rows > 0){
        //    $update = "UPDATE cart SET qty = qty + 1 WHERE product_id = '".$_GET['addToCart']."'";
        //    $result = mysqli_query($conn,$update);
        //}else{
        //    $query = "INSERT INTO cart (product_id) VALUE ('".$_GET['addToCart']."')";
        //    $result = mysqli_query($conn, $query) or die(" Execution Failed addCart");

        //    $qupdate = "UPDATE cart SET qty = 1 WHERE product_id = '".$_GET['addToCart']."'";
        //    $rupdatezero = mysqli_query($conn,$qupdate);
        //} 
    include('joinCart.php'); 

    ?>
</form>
<br>
<?php

?>