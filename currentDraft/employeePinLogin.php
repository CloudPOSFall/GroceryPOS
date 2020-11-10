<?php

// Initialize the session
ob_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{
  header("Location: accountHomeDraft.php");
  exit;
}

// Include config file
include_once "config.php";

// Define variables and initialize with empty values
$pin = "";
$pin_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Check if pin is empty
  if (empty(trim($_POST["pin"]))) {
    $email_err = "Please enter pin.";
  } else {
    $pin = trim($_POST["pin"]);
    $pin = mysqli_real_escape_string($conn, $pin);
  }
    // Validate credentials
    if (empty($pin_err))
    {
    $query = mysqli_query($conn,"SELECT ID,email,password,pin_number,first_name,last_name,user_id,phone_number,SSN,street_address,city,state,zip_code,start_date FROM employee_info WHERE pin_number = '$pin'");
        while($numrows = mysqli_fetch_assoc($query))
        {
			$first_name = $numrows["first_name"];
			$first_name = mysqli_real_escape_string($conn,$first_name);
    		$last_name =  $numrows["last_name"];
            $last_name = mysqli_real_escape_string($conn,$last_name);
    	}
		session_start();
		$_SESSION["email"] = $email;
		$_SESSION["first_name"] = $first_name;
  		$_SESSION["last_name"] = $last_name;
		header("Location: accountHomeDraft.php");
		ob_end_flush();		
	}    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Verification</title>

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

</head>

<body>
    <div class="container-fluid text-center">

        <div class="row content">
            <div class="col-sm-4 sidenav">
            </div>


            <div class="col-sm-4">
                <div class="card text-center bg-light" style="margin-top: 50%; padding: 20px;">

                    <div class="card m-auto" style="width: 270px; padding: 7px;">
                        <h1><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1z" /></svg>
                            <span style="color: #00b300">Market</span>POS</h1>
                    </div>

                    <br>
                    <h4 style="padding: 10px;">Employee Verification</h4><br>
                    <form class="form-horizontal" method="post" action="accountHomeDraft.php">
                        <div class="row justify-content-center" style="padding: 10px;">
                            <div class="form-group">
                                <input name="pin" style="font-size: 1.5em" maxlength="4" size="6" class="form-control" placeholder="PIN">
                            </div>
                            <div>
                                <button type="submit" style="height: 3em;" class="btn btn-success">Login</button>
                                <span class="align-middle"> or <a href="logout.php"> Logout</a></span></div>
                        </div>
                    </form>

                </div>
                <div class="col-sm-4 sidenav">
                </div>
            </div>
        </div>

</body>

</html>