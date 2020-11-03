<?php 
    
    if(isset($_GET['submit'])){
        $proType = $_GET['productType'];
    }
?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <?php include 'getProductByType.php'; ?>

    <input type="submit" name="submit" value="">

    <?php 
    if(isset($_GET['submit'])){
        $productCat = $_GET['productType'];
        echo ("Products of ");
        include 'productTypeWithTable.php';
    }
    ?>
    
</form>

