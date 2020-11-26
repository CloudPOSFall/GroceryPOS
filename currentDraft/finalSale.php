<?php
     include('joinCart.php');
     
?>

<br>

<form method="get" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

    Choose a Payment Type:
    <select name="payment">
        <option value="Cash">Cash</option>
        <option value="Credit">Credit</option>
    </select> <input type="submit" name ="submit" value="Payment Type"> <br>

        <br>Cash Amount: <input type="text" name="cash">
        <input type='submit' name='change' value="Get Change"/><br>

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
            }
        ?>
        
        <br>

    <input type='submit' name='final' value="Complete Sale"/>
</form>
    <?php
                if(isset($_GET['final'])) {
                    $CID = $_SESSION['CID'];

                    //$query = "UPDATE ticket_system SET quantity ='".$qtyTotal."', subtotal ='".$subTotal."', total ='".$total."', 
                            //tax ='".$tax."' WHERE cart_purchase = 1 ";
                    //$result = mysqli_query($conn, $query) or die("Execution Failed");

                    //$query = "UPDATE cart_inprogress SET ticket";

                    $query = "INSERT INTO ticket_system (ticket_id, quantity, subtotal, total, tax) VALUES ('$CID', '$qtyTotal', '$subTotal', '$total', '$tax')";
                    $result = mysqli_query($conn, $query) or die("Ticket Failed");
                    
                    $update = "UPDATE cart_inprogress SET ticket_id = '$CID' WHERE CID='$CID'";
                    $result = mysqli_query($conn, $update) or die("Insert Failed");

                    if($result)
                    {
                        header("location:salescontrolpanel.php");
                    }
                    
                }


                
            
    ?>
