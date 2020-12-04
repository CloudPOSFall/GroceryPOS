
     <!-- Option to choose a payment type -->
    Choose a Payment Type:
    <select name="payment">
        <option value="Cash">Cash</option>
        <option value="Credit">Credit</option>
    </select> <input type="submit" name ="submitPay" value="Payment Type"> <br><br>
    
    <?php
    
        if(isset($_POST['submitPay'])) {
            $payType = $_POST['payment'];
            echo($payType);
            echo(" Chosen");
        }
	$format = 'Customer: %s %s';
    echo sprintf($format,$_SESSION['custfirst'],$_SESSION['custlast']) ;
	$_SESSION['customerID'] = $_SESSION['custfirst'];
    ?>

    <br>

