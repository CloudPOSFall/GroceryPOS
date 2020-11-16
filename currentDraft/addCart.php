<form method="get" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <?php 

        echo ($tableCode);

        if(isset($_GET['addToCart'])) {

            echo('debug: ');
            echo($_GET['addToCart']);
            $query = "INSERT INTO inventory_sales (product_id) VALUE ('".$_GET['addToCart']."')";
            
            $result = mysqli_query($conn, $query) or die(" Execution Failed");
        }

    ?>
</form>