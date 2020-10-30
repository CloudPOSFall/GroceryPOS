<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Product Inventory</title>

  <!--bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--our css -->
  <link rel="stylesheet" href="styleDraft.css">
  <!--jquery scrollbar css -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

  <!--font awesome js -->
  <script defer src="js/solid.js"></script>
  <script defer src="js/fontawesome.js"></script>

  <!-- bootstrap popper js-->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!--jquery -->
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>



            <h3 style = "text-align:center"> Add New Inventory </h3>
<div class = "container justify-content-center" id = "formscreen">
	<div class = "card card-body bg-light" stlye = "width: 35rem;">
		<div class="card-body">	
            <form action="product insert.php" method="post">
				<div class = "form-group row">
				<label class = "col-4" for = "QR">QR </label>
                <input class ="col-6" type = "text" placeholder=" QR Code " name="qr"/>
				</div>
				<div class = "form-group row">
				<label class = "col-4" for = "Serial Number">Serial No. </label>
				<input class ="col-6" type = "text" placeholder="Serial No. " name="serial"/>
				</div>
			    <div class = "form-group row">
				<label class = "col-4" for = "Make">Make </label>
				<input class ="col-6" type = "text" placeholder="Make " name="make"/>
				</div>
				<div class = "form-group row">
				<label class = "col-4" for = "Model Number">Model No. </label>
				<input class ="col-6" type = "text" placeholder="Model Number " name="model"/>
				</div>
				<div class = "form-group row">
				<label class = "col-4" for = "Model Name">Model Name </label>
				<input class ="col-6" type = "text" placeholder="Model Name " name="name"/>
				</div>
				<div class = "form-group row">
				<label class = "col-4" for = "Description">Description </label>
				<input class ="col-6" type = "text" placeholder="Description " name="d"/>
				</div>
				<div class = "form-group row">
				<label class = "col-4" for = "Link of Supplier Data">Link of Supplier Data </label>
				<input class ="col-6" type = "text" placeholder="Link of Supplier Data " name="link"/>
				</div>
				<div class = "form-group row">
				<label class = "col-4" for = "Cost">Cost </label>
				<input class ="col-6" type = "text" placeholder="Cost " name="cost"/>
				</div>
				<div class = "form-group row">
				<label class = "col-4" for = "Selling Price">Selling Price </label>
				<input class ="col-6" type = "text" placeholder="Selling Price " name="price"/>
				</div>
			    <div class = "form-group row">
				<label class = "col-4" for = "MSRP">MSRP </label>
				<input class ="col-6" type = "text" placeholder="MSRP " name="msrp"/>
				</div>
				<div class = "form-group row">
				<label class = "col-4" for = "In Stock">In Stock </label>
				<input class ="col-6" type = "text" placeholder="In Stock " name="in"/>
				</div>
			    <div class = "form-group row">
				<label class = "col-4" for = "Reorder Amount">Reorder Amount </label>
				<input class ="col-6" type = "text" placeholder="Reorder Amount " name="amount"/>
				</div>
				<div class = "form-group row">
				<label class = "col-4" for = "Base Stock">Base Stock </label>
				<input class ="col-6" type = "text" placeholder="Base Stock " name="base"/>
				</div>
             	<div class = "form-group row">
				<label class = "col-4" for = "Vendor ID">Vendor ID</label>
				<input class ="col-6" type = "text" placeholder="Vendor ID " name="vendor"/>
				</div>
				
              <div class = "text-center"><button name="submit" class="btn-lg btn-primary">Submit</button>
              
				</div>
			
            </form>
		</div>
	</div>
	</div>
</body>
</html>
