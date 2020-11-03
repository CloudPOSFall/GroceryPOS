<?php
include_once ('config.php');
if (isset($_GET['Upd'])) {
  $findID = $_GET['Upd'];
  $query = "SELECT * FROM customer_info WHERE customer_id LIKE '%$findID%'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Customer Document</title>


  <!--bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--our css -->
  <link rel="stylesheet" href="userStyle.css">
  <!--Scrollbar Custom css -->
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

</head>

<body>

  <!--nav sidebar-->
  <nav id="sidebar">
    <div class="sidebar-header">
      <h1><a class="navbar-brand relative-top" href="indexDraft.php" id="navcard"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-basket2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1z" />
          </svg>
          MarketPOS</a></h1>
    </div>
    <ul class="list-unstyled components">
      <div class="card" id="navcard">
        <h5 class="text-center">Current User <svg width=".6em" height=".6em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
          </svg></h5>
      </div>
      <li class="active">
      <li>
        <a href="accounthomeDraft.php"><svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
          </svg> Home</a>
      </li>
      </li>
      <li>
        <a href="salescontrolv3.html"><svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-credit-card-2-back" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 3H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
            <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zM1 9h14v2H1V9z" />
          </svg> Sales</a>
      </li>
      <li>
        <a href="inventorycontrol.html"><svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-inbox-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm-1.17-.437A1.5 1.5 0 0 1 4.98 3h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z" />
          </svg> Inventory</a>
      </li>
      <li>
        <a href="customercontrol.html"><svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
          </svg> Customers</a>
      </li>
      <li>
        <a href="#"><svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-clipboard-data" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
            <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
            <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
          </svg> Reports</a>
      </li>

    </ul>
  </nav>
  <!--END nav sidebar-->

  <!--page content-->
  <div id="content">


    <!--location navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" id="locnav">
      <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-success">
          <i class="fas fa-align-left"></i>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav mr-auto">
            <a class="navbar-brand" href="customerview.php"><svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
              </svg> Customers</a>
          </ul>
        </div>
      </div>
    </nav>


    <div class="container justify-content-center">

    <div class="card card-body bg-light" style="width: 35rem;" id="formscreen">
        <form action="" method="post">
        <div class="form-group row">
              <label class="col-4" for="id">Customer ID:  </label>
              <input type="text" value=" <?php echo $findID ?> " name="id" readonly />
            </div>
            <div class="form-group row">
              <label class="col-4" for="First Name">First Name</label>
              <input type="text" value=" <?php echo $row['first_name'] ?> " name="fname" />
            </div>
            <div class="form-group row">
              <label class="col-4" for="Middle Initial">Middle Initial</label>
              <input type="text" value=" <?php echo $row['middle_initial'] ?> " name="mi" />
            </div>
            <div class="form-group row">
              <label class="col-4" for="Last Name">Last Name</label>
              <input type="text" value=" <?php echo $row['last_name'] ?> " name="lname" />
            </div>
            <div class="form-group row">
              <label class="col-4" for="Phone Number">Phone Number</label>
              <input type="tel" value=" <?php echo $row['phone_number'] ?> " name="number" />
            </div>
            <div class="form-group row">
              <label class="col-4" for="Street">Street</label>
              <input type="text" value=" <?php echo $row['street_address'] ?> " name="street" />
            </div>
            <div class="form-group row">
              <label class="col-4" for="City">City</label>
              <input type="text" value=" <?php echo $row['city'] ?> " name="city" />
            </div>
            <div class="form-group row">
              <label class="col-4" for="State">State</label>
              <input type="text" value=" <?php echo $row['state'] ?> " name="state" />
            </div>
            <div class="form-group row">
              <label class="col-4" for="Zip Code">Zip Code</label>
              <input type="text" value=" <?php echo $row['zip_code'] ?> " name="zip" />
            </div>
            <div class="form-group row">
              <label class="col-4" for="email">Email</label>
              <input type="email" value=" <?php echo $row['email'] ?> " name="email" />
            </div>
            <div class="form-group row">
              <label class="col-4" for="Rewards">Rewards </label>
              <input type="text" value=" <?php echo $row['rewards'] ?> " name="rewards" step="1" />
            </div>
            <div class="text-center"><button type="submit" name="update" class="btn-lg btn-primary"> Update</button></div>
          </form>
      </div>

            
</body>

<script type="text/javascript">
  $(document).ready(function() {
    $("#sidebar").mCustomScrollbar({
      theme: "minimal"
    });

    $('#sidebarCollapse').on('click', function() {
      $('#sidebar, #content').toggleClass('active');
      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
  });
</script>

</html>

<?php
if (isset($_POST['update'])) {

  $id = $_POST['id'];
  $Email = $_POST['email'];
  $FirstName = $_POST['fname'];
  $MiddleInitial = $_POST['mi'];
  $LastName = $_POST['lname'];
  $PhoneNumber = $_POST['number'];
  $Rewards = $_POST['rewards'];
  $Street = $_POST['street'];
  $City = $_POST['city'];
  $State = $_POST['state'];
  $Zip = $_POST['zip'];

  $query = "UPDATE customer_info SET email = '$Email', first_name = '$FirstName', middle_initial = '$MiddleInitial', last_name = '$LastName', phone_number = '$PhoneNumber', rewards = '$Rewards', street_address = '$Street', city = '$City', state = '$State', zip_code = '$Zip' WHERE customer_id = '$id' ";
  $result = mysqli_query($conn, $query);

  if ($result) {
    header("location:customerview.php");
  } else {
    echo ' Please Check Your Query ';
  }
}
?>