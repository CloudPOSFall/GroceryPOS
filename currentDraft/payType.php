
     <!-- Option to choose a payment type -->
    Choose a Payment Type:
    <select name="payment">
        <option value="Cash">Cash</option>
        <option value="Credit">Credit</option>
    </select> <input type="submit" name ="submitPay" value="Payment Type"> <br><br>
    
    <?php
    
        if(isset($_POST['submitPay'])) {
            $payType = $_POST['payment'];
            $cash = "Cash";
            $credit = "Credit";
            if($payType == $cash) {
                echo($payType);
                echo(" Chosen");
                $cash = 1;
                $credit = 0;
            } else if($payType == $credit) {
                echo($payType);
                echo(" Chosen");
                $cash = 0;
                $credit = 1;
            }
        }
    
    ?>

    <br>

