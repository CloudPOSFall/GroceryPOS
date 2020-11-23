<form method="get" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <?php 

    echo ($tableCode);

    if(isset($_GET['addToCart'])) {
        $query = "SELECT product_id FROM cart";
        $result = mysqli_query($conn, $query) or die(" Execution Failed add2Cart");
        
        $rows = mysqli_num_rows($result);
        if($rows > 0){
            //echo "Records exist";

            //$query = "UPDATE cart SET qty = qty + 1 WHERE product_id = '".$_GET['addToCart']."'";
            //$result = mysqli_query($conn,$query);




        } else {
            //echo "No records exist";

            $query = "INSERT INTO cart (product_id, qty) VALUES ('".$_GET['addToCart']."', 1)";
            $result = mysqli_query($conn, $query) or die(" Execution Failed addCart");


            $CID;
            $query = "SELECT cart_id FROM cart WHERE product_id = '".$_GET['addToCart']."' ";
            $result = mysqli_query($conn,$query) or die(" Execution Failed cart id");
            $rows = mysqli_num_rows($result);
            while($row = mysqli_fetch_assoc($result)) {
                $CID = $row['cart_id'];
            }

            echo($CID);
            $_SESSION['CID'] = $CID;

            //$query = "UPDATE cart SET CID ='".$CID."' WHERE product_id = '".$_GET['addToCart']."'";
            //$query = "INSERT INTO cart (CID) VALUE ('".$_SESSION['CID']."') WHERE product_id = '".$_GET['addToCart']."'";

            //$result = mysqli_query($conn,$query) or die(" CID insertion failed ");
        }

        $query = "UPDATE cart SET CID ='".$CID."' WHERE product_id = '".$_GET['addToCart']."'";
        $result = mysqli_query($conn,$query) or die(" CID insertion failed ");

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
    }

    include('joinCart.php') 

    ?>
</form>
<br>
<?php


?>

