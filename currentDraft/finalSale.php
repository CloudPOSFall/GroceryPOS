<?php
     include('joinCart.php')
?>

<br>

<form method="get" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Cash Amount: <input type="text" name="cash"><input type='submit' name='change' value="Get Change">
    <?php
        $tax = 0;
        $discount = 0;
        $query = "SELECT tax_rate FROM tax_table WHERE TTID=1";
        $result = mysqli_query($conn, $query) or die("Execution Failed");
        $row = mysqli_fetch_assoc($result);
        while($row = mysqli_fetch_assoc($result)) {
            $tax = $row['tax_rate'];
        }

        $subTotal = $total;
        $total = $total + $tax;

        if(isset($_GET['change'])) {
            $change = $_GET['cash'] - $subTotal;
            $formatted = number_format($change, 2);
    ?>
    <br>
        <?php
            echo('Change: $');
            echo($formatted);
        ?>
    <br>
    <input type='submit' name='finalSale' value="Complete Sale">
    <?php
            if(isset($_GET['finalSale'])) {

                $query = "UPDATE ticket_system SET quantity ='".$qtyTotal."', subtotal ='".$subTotal."', total ='".$total."', 
                          tax ='".$tax."' WHERE sale_id = 4 ";
                $result = mysqli_query($conn, $query) or die("Execution Failed");

            }
        }
    ?>
</form>
