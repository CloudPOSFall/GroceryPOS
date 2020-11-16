<form method="get" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <?php 

        echo ($tableCode);

        if(isset($_GET['addToCart'])) {

            echo('debug');

            $query = "UPDATE inventory_sales SET product_id = '".$_GET['addToCart']."'";
            $result = mysqli_query($conn, $query) or die("Execution Failed");
        }

    ?>

</form>