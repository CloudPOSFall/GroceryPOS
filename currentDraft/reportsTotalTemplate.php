<?php
include_once('config.php');
include_once('sidebarconnect.php');
$query = "SELECT * FROM ticket_system";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<head>
  <title>Totals Reports | MarketPOS</title>


  <!--bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--our css -->
  <link rel="stylesheet" href="userStyle2.css">
  <!--Scrollbar Custom css -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!--bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap-datepicker3.css">


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
  <!-- bootstrap datepicker -->
  <script src="js/bootstrap-datepicker.min.js"></script>


</head>

<body>

<!--nav sidebar-->
<nav id="sidebar">
    <div class="sidebar-header bg-dark">
      <h1 id="brand"><span><a class="navbar-brand relative-top" href="indexDraft.php"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-basket2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1z" />
            </svg>
            <span style="color: #00b300"> Market</span>POS</a></h1>
    </div>

    <ul class="list-unstyled components">
      <li>
        <div id="usercard">
          <a href="salescontrolpanel.php#switchreg" style="font-size: 1em;"><?php if ((isset($_SESSION['emp_id'])) ) echo $row['company_name']; else  echo 'Company Name'; ?></br>
            <?php if (isset($_SESSION['register'])) echo "Register " .$_SESSION['register'];else  echo 'Choose Register'; ?> <svg width=".6em" height=".6em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
            </svg></a>
        </div>
      </li>
      <li>
        <a href="employeePinLogin.php" style="font-size: 1em;"><?php if ((isset($_SESSION['emp_id']))) echo "". $row['first_name']. " " . $row['last_name'] . " ";else echo "Current User";?><svg width=".6em" height=".6em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
          </svg></a>
      </li>
      <div class="justify-content-center" id="navline"></div>

        <li>
          <a href="accounthomeDraft.php">
            <span style="padding:5px;">
              <svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
              </svg></span> Home</a>
        </li>
        <li>
          <a href="salescontrolpanel.php">
            <span style="padding:5px;">
              <svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-credit-card-2-back" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 3H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
                <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zM1 9h14v2H1V9z" /></svg>
            </span> Sales</a>
        </li>
        <li>
          <a href="inventorycontrol.php">
            <span style="padding:5px;">
              <svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-inbox-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm-1.17-.437A1.5 1.5 0 0 1 4.98 3h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z" />
              </svg></span> Inventory</a>
        </li>
        <li>
          <a href="customercontrol.php">
            <span style="padding:5px;">
              <svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
              </svg></span> Customers</a>
        </li>
        <?php
    if (isset($_SESSION['emp_id']))
        if ($row['user_type'] == 1) {

          echo "
          <li>
          <a href='employeecontrol.php'>
            <span style='padding:5px;'>
            <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-file-person-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
            <path fill-rule='evenodd' d='M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z'/>
          </svg></span> Employees</a>
        </li>";
        }
      
      ?>
        <li class="active">
          <a href="reportsControlPanel.php">
            <span style="padding:5px;">
              <svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-clipboard-data" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
              </svg></span> Reports</a>
        </li>


        </br></br></br></br>
      <li class="sidebar-footer">
        <div class="text-center" id="usercard">
          <a role="button" href="<?php $_SESSION['url'] = "salescontrolpanel.php" ?> employeePinLogin.php"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z" />
            </svg> Switch User</a>

        </div>

      </li>
        <li>
          <div class="card text-center" id="footerbtn" style="background: #016923;">
            <a role="button" href="logout.php"> Logout</a>
          </div>
        </li>
      </ul>
  </div>
  </nav>
  </div>
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
            <a class="navbar-brand" href="reportscontrolpanel.php">
              <svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-clipboard-data" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
              </svg> Totals Reports</a>
          </ul>
        </div>
      </div>
    </nav>
    <!--END location navbar-->
    <br>

    <!--date selector nav-->
    <script>
      $('.datepicker').datepicker();
    </script>

    <div id="dateSel" style="margin-top: 10px;">
      <nav class="navbar navbar-light">
        <form class="form-inline" method="post">
          <div class="form-group">
            <div class="form-group">
              <div class="input-group" style="width: 220px; padding: 10px;">
                <label class="control-label border bg-light" for="start"><span class="input-group-addon px-2"> Start </span></label>
                <input class="form-control" id="date" name="sdate" placeholder="MM/DD/YYY" type="text" />
              </div>
            </div>


            <div class="form-group">
              <div class="input-group" style="width: 220px; padding: 10px;">
                <label class="control-label border bg-light" for="end"><span class="align-middle px-2"> End </span></label>
                <input class="form-control" id="date" name="edate" placeholder="MM/DD/YYY" type="text" />
              </div>
            </div>

            <div class="input-group-addon">
              <button class="btn btn-success" name="submit" type="submit">Submit</button>
            </div>

          </div>
        </form>
      </nav>


      <nav class="navbar bg-light">
          <ul class="pagination pt-3">
            <span class="text-muted px-3 pt-2"> # Results</span>
            <li class="page-item">
              <a class="page-link text-dark" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
            <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
            <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link text-dark" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        
          <button class="btn btn-dark" onclick="window.print()"><svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-printer" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M11 2H5a1 1 0 0 0-1 1v2H3V3a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h-1V3a1 1 0 0 0-1-1zm3 4H2a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h1v1H2a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1z" />
          <path fill-rule="evenodd" d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM5 8a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H5z" />
          <path d="M3 7.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
        </svg>
      </button>
      </nav>

    </div>
    <!--END date selector nav-->


    <div class="wrapper" class="bg-white">
      <div class="row px-4 justify-content-center">
        <table class="table table-bordered table-hover mt-3" id="table" style="font-size:80%;">
          <thead class="bg-light">
            <tr>
            <th class="px-3"> Sale ID </th>
              <th> Subtotal </th>
              <th> Discounts </th>
              <th> Tax </th>
              <th> Total</th>
              <th> Cost </th>
              <th> Profit</th>
              <th> Margin </th>
              <th> Time </th>
              <th> Date </th>
              <th> Customer</th>
            </tr>
          </thead>
          <tbody >
          <?php    

    if (isset($_POST['submit'])) {
    $DateBegin = date('Y-m-d', strtotime($_POST['sdate']));
    $DateEnd = date('Y-m-d', strtotime($_POST['edate']));
    $search = mysqli_real_escape_string($conn, $DateBegin);
    while ($row = mysqli_fetch_assoc($result)) {
    if (($row['date'] >= $DateBegin) && ($row['date'] <= $DateEnd)){
      $profit = $row['subtotal'] - $row['cost'];
        $operation = ($profit/$row['subtotal']) * 100;
        $margin = number_format($operation, 2, '.', '');
        echo "<tr><td>" 
        . $row['ticket_id'] . "</td><td>". $row['subtotal'] . "</td><td>" . $row['discount'] . "</td><td>" . $row['tax'] . "</td><td>" 
        . $row['total'] . "</td><td>" . $row['cost'] . "</td><td>" . $profit ."</td><td>" . $margin . "% </td><td>" . $row['time'] . "</td><td>"
        . date('m-d-Y', strtotime($row['date'])) . "</td><td><form method='post' action='customerDetail.php'><button class='btn navbar-btn btn-light' name='Detail'>
        View</button></td><input name='Detail' size='1' value='". $row['customer_id'] ."' readonly hidden/></form>";
      }
      }
        ?>
                <!-- Retrieved SQL Data Goes Here Instead of empty tds -->
                
              </tbody>
            </table>
          </div>
    
          <div id="contentline"></div>
    
          <div class="row pl-3">
            <div class="px-1">
              <table class="table table-responsive" style="font-size:80%;">
                <thead>
    
                </thead>
                <tbody>
                  <tr>
                  <?php 
                  $sum=0;
                  $sql = "SELECT * FROM ticket_system WHERE date BETWEEN '$DateBegin' and '$DateEnd'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                       $sum += $row['subtotal'];
                  }
                  ?>
                    <th style="padding-right: 30px;"> Subtotal </th>
                    <td class="text-right">$<?php echo $sum; ?></td>
                  </tr>
                  <tr>
                  <?php 
                  $sum=0;
                  $sql = "SELECT * FROM ticket_system WHERE date BETWEEN '$DateBegin' and '$DateEnd'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                  $sum += $row['discount'];
                  }
                  ?>
                    <th style="padding-right: 30px;"> Discounts </th>
                    <td class="text-right">$<? echo $sum; ?></td>
                  </tr>
                  <tr>
                  <?php 
                  $sum=0;
                  $sql = "SELECT * FROM ticket_system WHERE date BETWEEN '$DateBegin' and '$DateEnd'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                  $sum += $row['tax'];
                  }
                  ?>
                    <th style="padding-right: 30px;"> Tax </th>
                    <td class="text-right">$<?php echo $sum; ?></td>
                  </tr>
                  <tr>
                  <?php 
                  $sum=0;
                  $sql = "SELECT * FROM ticket_system WHERE date BETWEEN '$DateBegin' and '$DateEnd'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                  $sum += $row['total'];
                  }
                  ?>
                    <th style="padding-right: 30px;"> Total </th>
                    <td class="text-right">$<? echo $sum ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="px-1">
              <table class="table table-responsive" style="font-size:80%;">
                <thead>
    
                </thead>
                <tbody>
                  <tr>
                    <th style="padding-right: 50px;"> Taxed </th>
                    <td class="text-right">$0</td>
                  </tr>
                  <tr>
                    <th style="padding-right: 50px;"> Untaxed </th>
                    <td class="text-right">$0</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="px-1">
              <table class="table table-responsive" style="font-size:80%;">
                <thead>
    
                </thead>
                <tbody>
              <tr>
              <?php
              $sum=0;
              $sql = "SELECT * FROM ticket_system WHERE date BETWEEN '$DateBegin' and '$DateEnd'";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                      $sum += $row['cost'];
                }
              ?>
                <th style="padding-right: 50px;"> Cost </th>
                <td class="text-right">$<?php echo $sum; ?></td>
              </tr>
              <tr>
              <?php
              $sum=0;
              $sql = "SELECT * FROM ticket_system WHERE date BETWEEN '$DateBegin' and '$DateEnd'";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                $profit = $row['subtotal'] - $row['cost'];
                      $sum += $profit;
                }
              ?>
                <th style="padding-right: 50px;"> Profit </th>
                <td class="text-right">$<?php echo $sum; ?></td>
              </tr>
              <tr>
              <?php
              $sum=0;
              $sql = "SELECT * FROM ticket_system WHERE date BETWEEN '$DateBegin' and '$DateEnd'";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                $operation = ($profit/$row['subtotal']) * 100;
                $margin = number_format($operation, 2, '.', '');
                      $sum += $margin;
                }
              ?>
                <th style="padding-right: 50px;"> Margin </th>
                <td class="text-right"><?php echo $sum; ?>%</td>
              </tr>
            </tbody>
              </table>
            </div>
          </div>
        </div>
    <?php
    }
    else {
      while ($row = mysqli_fetch_assoc($result)) {
        $profit = $row['subtotal'] - $row['cost'];
        $operation = ($profit/$row['subtotal']) * 100;
        $margin = number_format($operation, 2, '.', '');
        $Date = date("m-d-Y", strtotime($row['date']));
        echo "<tr><td>" 
        . $row['ticket_id'] . "</td><td>". $row['subtotal'] . "</td><td>" . $row['discount'] . "</td><td>" . $row['tax'] . "</td><td>" 
        . $row['total'] . "</td><td>" . $row['cost'] . "</td><td>" . $profit ."</td><td>" . $margin . "% </td><td>" . $row['time'] . "</td><td>"
        . date('m-d-Y', strtotime($row['date'])) . "</td><td><form method='post' action='customerDetail.php'><button class='btn navbar-btn btn-light' name='Detail'>
        View</button></td><input name='Detail' size='1' value='". $row['customer_id'] ."' readonly hidden/></form>";
      }
    }
    ?>
            <!-- Retrieved SQL Data Goes Here Instead of empty tds -->
            
          </tbody>
        </table>
      </div>

      <div id="contentline"></div>

      <div class="row pl-3">
        <div class="px-1">
          <table class="table table-responsive" style="font-size:80%;">
            <thead>

            </thead>
            <tbody>
              <tr>
              <?php 
                  $sum=0;
                  $sql = "SELECT * FROM ticket_system";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                  $sum += $row['subtotal'];
                  }
                  ?>
                    <th style="padding-right: 30px;"> Subtotal </th>
                    <td class="text-right">$<?php echo $sum; ?></td>
                  </tr>
                  <tr>
                  <?php 
                  $sum=0;
                  $sql = "SELECT * FROM ticket_system";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                  $sum += $row['discount'];
                  }
                  ?>
                    <th style="padding-right: 30px;"> Discounts </th>
                    <td class="text-right">$<? echo $sum; ?></td>
                  </tr>
                  <tr>
                  <?php 
                  $sum=0;
                  $sql = "SELECT * FROM ticket_system";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                  $sum += $row['tax'];
                  }
                  ?>
                    <th style="padding-right: 30px;"> Tax </th>
                    <td class="text-right">$<?php echo $sum; ?></td>
                  </tr>
                  <tr>
                  <?php 
                  $sum=0;
                  $sql = "SELECT * FROM ticket_system";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                  $sum += $row['total'];
                  }
                  ?>
                    <th style="padding-right: 30px;"> Total </th>
                    <td class="text-right">$<? echo $sum; ?></td>
                  </tr>
            </tbody>
          </table>
        </div>
        <div class="px-1">
          <table class="table table-responsive" style="font-size:80%;">
            <thead>

            </thead>
            <tbody>
              <tr>
                <th style="padding-right: 50px;"> Taxed </th>
                <td class="text-right">$0</td>
              </tr>
              <tr>
                <th style="padding-right: 50px;"> Untaxed </th>
                <td class="text-right">$0</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="px-1">
          <table class="table table-responsive" style="font-size:80%;">
            <thead>

            </thead>
            <tbody>
              <tr>
              <?php
              $sum=0;
              $sql = "SELECT * FROM ticket_system";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                      $sum += $row['cost'];
                }
              ?>
                <th style="padding-right: 50px;"> Cost </th>
                <td class="text-right">$<?php echo $sum; ?></td>
              </tr>
              <tr>
              <?php
              $sum=0;
              $sql = "SELECT * FROM ticket_system";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                $profit = $row['subtotal'] - $row['cost'];
                      $sum += $profit;
                }
              ?>
                <th style="padding-right: 50px;"> Profit </th>
                <td class="text-right">$<?php echo $sum; ?></td>
              </tr>
              <tr>
              <?php
              $sum=0;
              $sql = "SELECT * FROM ticket_system";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                $operation = ($profit/$row['subtotal']) * 100;
                $margin = number_format($operation, 2, '.', '');
                      $sum += $margin;
                }
              ?>
                <th style="padding-right: 50px;"> Margin </th>
                <td class="text-right"><?php echo $sum; ?>%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
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

  $(document).ready(function() {
    var date_input = $('input[name="date"]'); //our date input has the name "date"
    var container = $('#dateSel form').length > 0 ? $('#dateSel form').parent() : "body";
    var options = {
      format: 'mm/dd/yyyy',
      todayHighlight: true,
      autoSize: true,
      autoclose: true,
      orientation: "top",
    };
    date_input.datepicker(options);
  })
</script>

</html>