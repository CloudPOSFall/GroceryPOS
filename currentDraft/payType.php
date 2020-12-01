<form method="post" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

    Choose a Payment Type:
    <select name="payment">
        <option value="Cash">Cash</option>
        <option value="Credit">Credit</option>
    </select> <input type="submit" name ="submit" value="Payment Type"> <br>
        <!-- Input for money recieved -->
        <br>Cash Amount: <input type="text" name="cash">
        <input type='submit' name='change' value="Get Change"/><br><br><br>
    
    <?php
    
        if(isset($_POST['change'])) {
            $payType = $_POST['payment'];
            echo($payType);
        }
    
    ?>


</form>