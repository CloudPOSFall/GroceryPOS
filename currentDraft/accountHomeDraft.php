
//$debug = "true";
//if($dbconn->connect_error) {
//  die('Could not connect: '.$dbconn->connect_error);
//  $debug = "false";
//}

//if($debug == "true") {
//  echo nl2br("\nDEBUG:\n");
//  echo nl2br("3 \n 2 \n 1...");
//  echo("<br/><br/><br/>");
//}

<?php

$server = "localhost";
$dbusername = "root";
$password = "";
$db = "grocerystore";
$dbconn = mysqli_connect($server, $dbusername, $password, $db) or die("Unable To Connect To Database");

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Sales | MarketPOS</title>

    <!--bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--our css -->
    <link rel="stylesheet" href="styleDraft.css">
    <!--jquery scrollbar css -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

    <!--font awesome js -->
    <script defer src="js/solid.js"></script>
    <script defer src="js/fontawesome.js"></script>

</head>

<body id="fixedBckg">

  <!-- bootstrap popper js-->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!--jquery -->
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <h3><a class="navbar-brand" href="indexDraft.php"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-basket2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1z" /></svg>
          <span style="color: #00b300">Market</span>POS</a></h3>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <a class="nav-link" href="indexDraft.php">Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="loginDraft.php">Log In</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="signupDraft.php">Sign Up</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>
  <!-- End of Navigation Bar -->




  <div class="container" id="upPad">
    <div class="row profile">
      <div class="col-md-2">
        <div class="profile-sidebar">
          <!-- SIDEBAR USERPIC -->
          <div class="profile-userpic">
            <img src="media\prof.png" class="img-responsive" alt="">
          </div>
          <!-- END SIDEBAR USERPIC -->
          <!-- SIDEBAR USER TITLE -->
          <div class="profile-usertitle">
            <div class="profile-usertitle-name">
              NAME
            </div>
            <div class="profile-usertitle-job">
              TITLE
            </div>
          </div>
          <!-- END SIDEBAR USER TITLE -->
          <!-- SIDEBAR BUTTONS -->
          <div class="profile-userbuttons">

          </div>
          <!-- END SIDEBAR BUTTONS -->
          <!-- SIDEBAR MENU -->
          <div class="profile-usermenu">
            <ul class="nav">
              <li class="active">
                <a href="#">
                  <i class="glyphicon glyphicon-home"></i>
                  </br>
                  Overview </a>
              </li>
              <li>
                <a href="#">
                  <i class="glyphicon glyphicon-user"></i>
                  Account Settings </a>
              </li>

            </ul>
          </div>
          <!-- END MENU -->
        </div>
      </div>
    </div>
  </div>










  <div class="card">
    <div class="card-header">
      <h3>Daily Sales</h3>
    </div>
    <div class="card-body">
      <h5 class="card-title">Total Sales Today: </h5>
      <p class="card-text">Click here to start a new sale.</p>
      <a href="#" class="btn btn-primary">Start Sale</a>
    </div>
  </div>


</body>

</html>