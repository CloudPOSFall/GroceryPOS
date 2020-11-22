<form method="get" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <?php 

    echo ($tableCode);
    //$saleid = "SELECT MAX(sale_id) AS LargestId FROM ticket_system";
    //$curentId = mysqli_query($conn,$saleid);

    if(isset($_GET['addToCart'])) {
        $query = "SELECT * FROM cart WHERE product_id = '".$_GET['addToCart']."'";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_num_rows($result);

        if($rows > 0){
            $update = "UPDATE cart SET qty = qty + 1 WHERE product_id LIKE $ID";
            $result = mysqli_query($conn,$update);
        }else{
            $query = "INSERT INTO cart (product_id) VALUE ('".$_GET['addToCart']."')";
            $result = mysqli_query($conn, $query) or die(" Execution Failed addCart");
            $qupdate = "UPDATE cart SET qty = 1 WHERE $ID LIKE product_id";
            $rupdatezero = mysqli_query($conn,$qupdate);
        } 
    }

    include('joinCart.php') 

    ?>
</form>
<br>
<?php


?>

