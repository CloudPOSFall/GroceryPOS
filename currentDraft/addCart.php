<form method="get" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <?php 

    echo ($tableCode);
    
    if(isset($_GET['addToCart'])) {
        $ID = $_GET['addToCart'];
        $tquery = "SELECT * FROM cart_table WHERE product_id LIKE $ID";
        $tResult = mysqli_query($conn,$tquery);
        $rows = mysqli_num_rows($tResult);
        if($rows > 0)
        {
            $update = "UPDATE cart_table SET qty = qty + 1 WHERE product_id LIKE $ID";
            $result = mysqli_query($conn,$update);
        }else{
            echo('debug: ');
            echo($_GET['addToCart']);
            $query = "INSERT INTO cart_table (product_id) VALUE ('".$_GET['addToCart']."')";
            $result = mysqli_query($conn, $query) or die("Execution Failed");
            $qupdate = "UPDATE cart_table SET qty = 1 WHERE $ID LIKE product_id";
            $rupdatezero = mysqli_query($conn,$qupdate);
        } 
    }

    include('joinCart.php') 

    ?>
</form>