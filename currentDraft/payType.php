<form method="post" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

     <!-- Option to choose a payment type -->
    Choose a Payment Type:
    <select name="payment">
        <option value="Cash">Cash</option>
        <option value="Credit">Credit</option>
    </select> <input type="submit" name ="submit" value="Payment Type"> <br><br>
    
    <?php
    
        if(isset($_POST['submit'])) {
            $payType = $_POST['payment'];
            echo($payType);
        }
    
    ?>

    <br>
</form>