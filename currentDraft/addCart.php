<form method="get" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <?php 

        echo ($tableCode);
		$ID = $_GET['addToCart'];
        if(isset($_GET['addToCart'])) {
			$tquery = "SELECT * FROM inventory_sales WHERE product_id LIKE $ID";
			$tResult = mysqli_query($conn,$tquery);
			$rows = mysqli_num_rows($tResult);
			if($rows > 0)
			{
				$update = "UPDATE inventory_sales SET qty = qty + 1 WHERE product_id LIKE $ID";
				$result = mysqli_query($conn,$update);
			}else{
            	echo('debug: ');
				echo($_GET['addToCart']);
				$query = "INSERT INTO inventory_sales (product_id) VALUE ('".$_GET['addToCart']."')";
				$result = mysqli_query($conn, $query) or die("Execution Failed");
				$qupdate = "UPDATE inventory_sales SET qty = 1 WHERE $ID LIKE product_id";
				$rupdatezero = mysqli_query($conn,$qupdate);
			} 
        }

    ?>
</form>