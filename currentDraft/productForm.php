<form method="post" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">


    Choose a Product Type:<?php include 'getProductByType.php'; ?>
    <br>

    <?php 
        if(isset($_POST['submit'])){
            $productType = $_POST['productType'];
    ?>

    Choose a Product Sub Type <?php include 'getSubType.php'; } ?>

    <input type="submit" name="submit" value="Submit Form">
    <br>

    <?php include 'productTypeWithTable.php'; ?>
    <brb>

    


</form>

<?php include('addCart2.php'); ?>

<form action="finalSale.php">
    <input type="submit" name="submit" value="Finalize Sale" />
</form>