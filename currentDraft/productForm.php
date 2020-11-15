<form method="get" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <?php //include 'productview.php'; ?>





    Choose a Product Type:<?php include 'getProductByType.php'; ?>
    <br>

    <?php 
        if(isset($_GET['submit'])){
            $productType = $_GET['productType'];
    ?>

    Choose a Product Sub Type <?php include 'getSubType.php'; } ?>

    <input type="submit" name="submit" value="Submit Form">
    <br>

    <?php include 'productTypeWithTable.php'; ?>
    <brb>

    


</form>