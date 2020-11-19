<?php
     include('joinCart.php')
?>
<br>
<form method="get" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type='submit' name='finalSale' value="Complete Sale">
    <?php

        if(isset($_GET['finalSale'])) {

            echo($qtyTotal);
            $discount = 0;
            $query = "SELECT tax_rate FROM tax_table WHERE TTID=1";
            $result = mysqli_query($conn, $query) or die("Execution Failed");
            $id = "SELECT MAX(column_name)FROM table_name WHERE condition;";
        }


    ?>

</form>