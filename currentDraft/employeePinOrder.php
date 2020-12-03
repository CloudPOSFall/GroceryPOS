<?php
include_once('config.php');

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MarketPOS | Employee Login</title>

  <!--bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--our css -->
  <link rel="stylesheet" href="styleDraft.css">
  <!--jquery scrollbar css -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

  <!--font awesome js -->
  <script defer src="js/solid.js"></script>
  <script defer src="js/fontawesome.js"></script>

  <!--jquery -->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <!-- bootstrap popper js-->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.toaster.js"></script>

  <script>
    $(document).ready(function() {
      $('[data-toggle="popover"]').popover();
    });
  </script>
</head>

<body>
  <div class="container-fluid text-center ">

    <div class="row content">
      <div class="col-sm-4 sidenav">
      </div>


      <div class="col-sm-4">
        <div class="card text-center bg-light" id="loginitems" style="margin-top: 50%; padding: 20px;">
          <br>
          <?php
          include_once('config.php');
          $pin = "";
          $msg = "";
          $ID = "";
          if (isset($_POST['login']) && !empty(trim($_POST['pin']))) {
            $pin = trim($_POST["pin"]);
            $query = mysqli_query($conn, "SELECT * FROM employee_info WHERE pin_number = '$pin'");
            $numrows = mysqli_num_rows($query);
            if ($numrows == 1) {
              while ($row = mysqli_fetch_assoc($query)) {
                $ID = $row['employee_id'];
              }
              header("Location: finalSaleOrder.php?E=$ID");
            } else {
              $msg = "Incorrect pin";
              echo $msg;
            }
          }

          // Check if pin is empty
          if (isset($_POST['login']) && empty(trim($_POST['pin']))) {
            $msg = "Pin cannot be blank.";
            echo $msg;
          }

          if (isset($_POST['login'])) {
            //Your SQL Query
            echo "<meta http-equiv='refresh' content='3.5'>";
          }
          ?>
          <br>


          <div class="card-title" style="padding: 10px;">

            <h1 id="brand"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1z" /></svg>
              <span style="color: #00b300">Market</span>POS</h1>
          </div>

          <br>
          <h4 style="padding: 10px;">Employee Verification</h4><br>
          <form class="form-horizontal form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
                                                                        ?>" method="post">
            <div class="row justify-content-center" style="padding: 10px;">
              <div class="form-group">
                <input type="password" name="pin" style="font-size: 1.5em" maxlength="4" size="6" class="form-control" <?php if (!isset($_POST["login"])) {
                                                                                                          echo 'placeholder="PIN"';
                                                                                                        } else echo 'value="' . $pin . '"' ?>>
              </div>
              <div>


                <!-- <a tabindex='0' style='height: 3em;' class='btn btn-success' role='button' id='subbtn' data-toggle='popover' data-trigger='focus' data-content=' '><span class='align-middle'>Login</span></a> -->
                <button <?php if (!isset($_POST["login"])) {
                          echo 'type="submit"';
                        } else {
                          if (!empty($msg)) {
                            echo 'type="button" data-toggle="popover" title="" data-placement="bottom" data-content="' . $msg . '"';
                          }
                        }  ?> id="login" name="login" style="height: 3em;" class="btn btn-success">Login</button>
                <span class="align-middle" style="font-size: .8rem"> or <a href="logout.php"> Logout</a></span></div>
            </div>
          </form>
        </div>


      </div>
    </div>

</body>


</html>