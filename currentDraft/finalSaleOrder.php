<?php
    include('config.php');
    $query = "SELECT OTID FROM orders_ticket WHERE employee_id IS NULL";
        $result = mysqli_query($conn, $query) or die(" Execution Failed null address");
        $row = mysqli_num_rows($result);
        $OTID = "";
        while($row = mysqli_fetch_assoc($result))
        {
            $OTID = $row['OTID']; 
        }
    
     include('joinOrder.php');
     
?>

<br>

<form method="post" type="button">

    Choose a Payment Type:
    <select name="payment">
        <option value="Cash">Cash</option>
        <option value="Credit">Credit</option>
        <option value="Both">Cash and Credit</option>
    </select> <input type="submit" name ="submitPay" value="Payment Type"> <br><br>
    
    <?php
    
        if(isset($_POST['submitPay']))
        {
            $payType = $_POST['payment'];
            if($payType == "Cash")
            {
                header("location:cashpaymentOrder.php");
            }
            else if($payType == "Credit")
            {
                header("location:creditpaymentOrder.php");
            }
            else
            {
                header("location:bothpaymentOrder.php");
            }
        }
    ?>
            
<br>
</form>
