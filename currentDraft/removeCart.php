<form method="post" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <?php    
        if(isset($_POST['removeCart'])) {    
            $query = "DELETE FROM cart WHERE product_id = '".$_POST['removeCart']."'";
            $result = mysqli_query($conn,$query) or die("Remove Failed");
        }
    ?>
</form>