<form method="get" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <?php include 'getProductByType.php'; ?>

    <input type="submit" name="submit" value="Get This Category">

    <?php 
        if(isset($_GET['submit'])){
            include 'getSubType.php';
        }
    ?>

    <?php 
        if(isset($_GET['submit'])){
            include 'productTypeWithTable.php';
        }
    ?>

</form>