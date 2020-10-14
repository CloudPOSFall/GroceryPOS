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

  <!-- Navigation Bar -->
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



  <!-- Image Carousal -->

  <div id="upPad">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <!--Information needed to where the javascript should take the slide in what order-->
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <!--Actual item list that contains the album art along with alt tags in case the images don't load-->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="media/credit.jpg" width="500" height="500" class="d-block mx-auto" alt="music">
          <div class="carousel-caption d-none d-md-block">
            <h5>port</h5>
            <p>words</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="media/coding.jpg" width="1000" height="500" class="d-block mx-auto" alt="decor">
          <div class="carousel-caption d-none d-md-block">
            <h5 style="color: black;">computing</h5>
            <p style="color: black;">words</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="media/desk.jpg" width="1000" height="500" class="d-block mx-auto" alt="food">
          <div class="carousel-caption d-none d-md-block">
            <h5>desk</h5>
            <p>words</p>
          </div>
        </div>
      </div>
      <!--Buttons added to the carousel to go forward and backward in the order specified-->
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!-- End of Image Carousal -->

  <div id="centerPad">
    <div class="jumbotron">
      <h1 class="display-4">title</h1>
      <p class="lead">subtitle</p>
      <hr class="my-4">
      <p>ILorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum elit ipsum, ac porta metus auctor in. Vestibulum sed quam pulvinar, lobortis quam vitae, tempus leo. Quisque rhoncus suscipit tristique. In aliquam quam et nunc mattis ultrices. Curabitur at leo quis ligula dictum congue. Vestibulum tempus, tellus sit amet scelerisque facilisis, neque sem suscipit magna, ut dapibus diam tellus egestas orci. Vestibulum in condimentum est, vitae dapibus erat. Nulla facilisi. Donec elementum est et interdum tincidunt. Aenean sagittis congue lacus, vel bibendum ligula dignissim ornare. Maecenas et tempor diam, non varius risus. Nulla tortor lectus, dapibus et tempor sed, finibus sit amet eros.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
  </div>

  <div class="container-fluid padding">
    <div class="row welcome text-center">
      <div class="col-12">
        <h1 class="display-4">E-Vendor</h1>
      </div>
      <hr>
      <div class="col-12">
        <p class="lead">A Point of Sales system with the ability to keep track of data sales,
          store vendor account information,</br> and even monitor employee activity. </p>
      </div>
    </div>
  </div>



  <div class="container-fluid padding">
    <div class="row text-center padding">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fas fa-code"></i>
        <h3>title</h3>
        <p>words words words</p>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fas fa-bold"></i>
        <h3>titel</h3>
        <p>words words words</p>
      </div>
      <div class="col-sm-12 col-md-4">
        <i class="fas fa-css3"></i>
        <h3>titel</h3>
        <p>words words words/p>
      </div>
    </div>
    <hr class="my-4">
  </div>




  <div id="leftPad">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="..." class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted"></small></p>
          </div>
        </div>
      </div>
    </div>


    <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="..." class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted"></small></p>
          </div>
        </div>
      </div>
    </div>



    <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="..." class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted"></small></p>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="..." class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted"></small></p>
          </div>
        </div>
      </div>
    </div>
    <!--<script src="" async defer></script>-->

</body>

</html>