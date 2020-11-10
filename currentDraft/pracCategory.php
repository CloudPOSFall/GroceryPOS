<?php
    include_once('config.php');
    $productType= '';
    $query = "SELECT productType FROM product_inventory GROUP BY productType ORDER BY productType ASC";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($result))
    {
        $productType .= '<option value="'.$row["productType"].'">'.$row["productType"].'</option>';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <br /><br />
        <div class="container" style="width:600px;">
            <select name="productType" id="productType" class="form-control action">
                <option value="">Select Product Type</option>
                <?php echo $productType; ?>
            </select>
            <br />
            <select name="productSubType" id="productSubType" class="form-control action">
                <option value="">Select Product Sub Type</option>
            </select>
        </div>
    </body>
</html>

<script>
$(document).ready(function(){
    $('.action').change(function(){
        if($(this).val() != '') {
            var action = $(this).attr("id");
            var query = $(this).val();
            var result = '';
            if(action == "productType") {
                result = 'productSubType';
            }
        $.ajax({
            url:"getType.php",
            method:"POST",
            data:{action:action, query:query},
            success:function(data){
                $('#'+result).html(data);
            }
        })
    }
    });
});
</script>