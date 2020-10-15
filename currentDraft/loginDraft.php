<?php
// Initialize the session
ob_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  header("Location: accountHomeDraft.php");
  exit;
}

// Include config file
include_once "config.php";

// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Check if email is empty
  if (empty(trim($_POST["email"]))) {
    $email_err = "Please enter email.";
  } else {
    $email = trim($_POST["email"]);
    $email = mysqli_real_escape_string($conn, $email);
  }

  // Check if password is empty
  if (empty(trim($_POST["password"]))) {
    $password_err = "Please enter your password.";
  } else {
    $mypassword = trim($_POST["password"]);
    $mypassword = mysqli_real_escape_string($conn, $mypassword);
  }

  // Validate credentials
  if (empty($email_err) && empty($password_err)) {
    // Prepare a select statement
    $query = mysqli_query($conn, "SELECT ID,email,password FROM storelevel_signup WHERE email = '$email' AND password = '$mypassword'");
    $numrows = mysqli_num_rows($query);
    if ($numrows != 0) {
      $_SESSION["email"] = $email;
      header("Location: accountHomeDraft.php");
      ob_end_flush();
    } else {
      $error = "Login Invalid!";
    }
  }
}
?>



<!DOCTYPE html>
<html lang="en">

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

<body>

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


  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-4 sidenav">
      </div>


      <div class="col-sm-4 text-left">
        <div class="jumbotron">
          <h1><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1z" /></svg>
            <span style="color: #00b300">Market</span>POS</h1>
          <p>Please sign in to get started.</p>
        </div>
        <div class="card card-body bg-light">
          <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
              <label for="email">Email</label>
              <input type="text" class="form-control" placeholder="Enter email address" name="email" value="<?php echo $email; ?>">
              <span class="help-block"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group" <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>>
              <label for="password">password</label>
              <input type="text" class="form-control" placeholder="Password" name="password">
              <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="remember">
              <label class="form-check-label" name="remember">Remember me</label>
            </div>
            <button type="submit" style="padding: 10px" class="btn-lg btn-success"> Log In</button>
            <p>Don't have an account? <a href="signupDraft.php">Sign up now</a>.</p>
          </form>
        </div>
      </div>
      <div class="col-sm-4 sidenav">
      </div>
    </div>
  </div>

  <footer class="container-fluid fixed-bottom">
  </footer>

</body>

</html>