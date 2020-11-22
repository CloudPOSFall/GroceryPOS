<?php
     include('joinCart.php')
?>

<br>

<form method="get" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

    Choose a Payment Type:
    <select name="payment">
        <option value="Cash">Cash</option>
        <option value="Credit">Credit</option>
    </select> <input type="submit" name ="submit" value="Payment Type"> <br>

        <br>Cash Amount: <input type="text" name="cash"><input type='submit' name='change' value="Get Change"><br>

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

    <input type='submit' name='finalSale' value="Complete Sale">
    <?php
                if(isset($_GET['finalSale'])) {

                    $query = "UPDATE ticket_system SET quantity ='".$qtyTotal."', subtotal ='".$subTotal."', total ='".$total."', 
                            tax ='".$tax."' WHERE cart_purchase = 1 ";
                    $result = mysqli_query($conn, $query) or die("Execution Failed");

                }
            }
    ?>
</form>
