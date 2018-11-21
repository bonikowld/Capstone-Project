<?php
        session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Project Blood Seeker - Administrator</title>
  <link rel="shortcut icon" type="image/x-icon" href="../assets/images/icon.png">
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <link href="css/print.css" rel="stylesheet">


</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Project Blood Seeker</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Records</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
             <li>
              <a href="tables.php">Blood Records</a>
            </li>
            <li>
              <a href="donations.php">Blood Donation</a>
            </li>
             <li>
              <a href="addrecord.php">Add Records</a>

            </li>
            <li>
              <a href="tables.php">Requested Bloods</a>

            </li>
            <li>
              <a href="reservedBloods.php">Reserved Bloods</a>
            </li>
            
          </ul>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link" data-toggle="collapse" href="reports.php" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Reports</span>
          </a>
          <!-- <ul class="sidenav-second-level collapse" id="collapseExamplePages">
          <li>
              <a href="login.html">Login Page</a>
            </li>
            <li>
              <a href="login.html">Login Page</a>
            </li>
            <li>
              <a href="register.html">Registration Page</a>
            </li>
            <li>
              <a href="forgot-password.html">Forgot Password Page</a>
            </li>
            <li>
              <a href="blank.html">Blank Page</a>
            </li>
          </ul> -->
        </li>
      </ul>
      <!-- End of side navbar -->

      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      <a class="navbar-brand" href="#"><input type="button" class="btn-primary print_button" id="buttonPrint" onclick="printDiv('printableArea')" value="Print Report"/></a>
         <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
     
<div class="no-print">
<form action="" method="get" >
    <table class="table table-bordered table-condensed">

    <tbody>
        <tr>
            <td>
           <label>Month</label>
             <select name="month" id="month" class="form-control" required>
              <option value="">select</option>
              <option value="January">January</option>
              <option value="February">February</option>
              <option value="March">March</option>
              <option value="April">April</option>
              <option value="May">May</option>
              <option value="June">June</option>
              <option value="July">July</option>
              <option value="August">August</option>
              <option value="September">September</option>
              <option value="October">October</option>
              <option value="November">November</option>
              <option value="December">December</option>
             </select>
          </td>
           <td>
           <label>Year</label>
             <select name="year" id="year" class="form-control" required>
              <option value="">select</option>
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
             </select>
             <br>
             <button type='submit' name="report" class='btn btn-success btn-sm' >View Reports</button>
            </td>
        </tr>
    </tbody>
</table>
</form>
</div>  

<!-- Printable Area -->
<div class="hidden" id="printableArea">
<center>
  <img src="../assets/images/Philippine_Red_Cross_logo.jpg" alt="logo" style="width:50px">
  <h6 class="style">Republic of the Philippines</h6>
  <h6 class="style">Region X - Northern Mindanao</h6>
  <h6 class="style">Philippine National Red Cross <?php 
            if(isset($_SESSION['city'])){
              echo $_SESSION['city'];
            }
            else{ echo 'Session not set';
            }
          ?> Chapter</h6>
  <h6 class="style"><?php 
            if(isset($_SESSION['city'])){
              echo $_SESSION['city'];
            }
            else{ echo 'Session not set';
            }
          ?></h6>
  <br>
  <h6 class="style1"><?php 
  $checkoutmonth = $_GET['month'];
  echo $checkoutmonth;
  ?>&nbspMonthly Report</h6>
  <hr>
</center>
<table>
  <thead>
  <tr>
      <th class="style">Serial Number</th>
      <th class="style">Donor</th>
      <th class="style">Blood Type</th>
      <th class="style">Component</th>
      <th class="style">Quantity</th>
      <th class="style">Extraction Date</th>
      <th class="style">Expiration Date</th>
      <th class="style">Blood Bank</th>
      <th class="style">Borrowers Name</th>
      <th class="style">Borrowers Address</th>
      <th class="style">Borrowers Contact Number</th>
      <th class="style">OR Number</th>
  </tr>
  </thead>
  <tbody>
  <?php include 'php/connection.php';?>

  <?php 
 if(isset($_GET['report'])){

  $checkoutmonth = $_GET['month'];
  $checkoutyear = $_GET['year'];
  $city = $_SESSION['city'];
  

  $result = mysqli_query($conn,"SELECT * FROM report WHERE checkoutmonth = '$checkoutmonth' AND bloodbank = '$city' AND checkoutyear = '$checkoutyear'; ");
  
 }
  ?>
      
  <?php while($row = mysqli_fetch_array($result))  
  { ?>

  <td class='serialnumber' id="style2"> <?php echo $row['serialnumber']; ?> </td>
  <td class='donor' id="style2"> <?php echo $row['donor']; ?> </td>
  <td class='bloodtype' id="style2"> <?php echo $row['bloodtype']; ?> </td>
  <td class='component' id="style2"> <?php echo $row['component']; ?> </td>
  <td class='quantity' id="style2"> <?php echo $row['quantity'];?> </td>
  <td class='extractiondate' id="style2"> <?php echo $row['extractiondate']; ?> </td>
  <td class='expirationdate' id="style2"> <?php echo $row['expirationdate']; ?> </td>
  <td class='bloodbank' id="style2"> <?php echo $row['bloodbank']; ?> </td>
  <td class='borrowersname' id="style2"> <?php echo $row['borrowersname'];?> </td>
  <td class='borrowersaddress' id="style2"> <?php echo $row['borrowersaddress']; ?> </td>
  <td class='borrowerscontactnum' id="style2"> <?php echo $row['borrowerscontactnum']; ?> </td>
  <td class='ornum' id="style2"> <?php echo $row['ornum']; ?> </td>

  </tr>
  <?php }; ?>
  </tbody>
</table>
</div>
<!-- End of Printable Area -->


<div class="no-print">
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Blood Records </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Serial Number</th>
                  <th>Donor</th>
                  <th>Blood Type</th>
                  <th>Component</th>
                  <th>Quantity</th>
                  <th>Extraction Date</th>
                  <th>Expiration Date</th>
                  <th>Remarks</th>
                  <th>Findings</th>
                  <th>Blood Bank</th>
                  <th>Reciever Name</th>
                  <th>Reciever Address</th>
                  <th>Contact Number</th>
                  <th>OR Number</th>
                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                <th>Serial Number</th>
                  <th>Donor</th>
                  <th>Blood Type</th>
                  <th>Component</th>
                  <th>Quantity</th>
                  <th>Extraction Date</th>
                  <th>Expiration Date</th>
                  <th>Remarks</th>
                  <th>Findings</th>
                  <th>Blood Bank</th>
                  <th>Borrowers Name</th>
                  <th>Borrowers Address</th>
                  <th>Borrowers Contact Number</th>
                  <th>OR Number</th>
        
                 
       
                </tr>
              </tfoot>
              
              <tbody>
                    <?php include 'php/connection.php';?>

                 <?php 
                 if(isset($_GET['report'])){

                  $checkoutmonth = $_GET['month'];
                  $checkoutyear = $_GET['year'];
                  $city = $_SESSION['city'];

                  $result = mysqli_query($conn,"SELECT * FROM report WHERE checkoutmonth = '$checkoutmonth' AND bloodbank = '$city' AND checkoutyear = '$checkoutyear'; ");
                  
                 }
               
                ?>
                      
                <?php while($row = mysqli_fetch_array($result))  
                { ?>
               
                <td class='serialnumber'> <?php echo $row['serialnumber']; ?> </td>
                <td class='donor'> <?php echo $row['donor']; ?> </td>
                <td class='bloodtype'> <?php echo $row['bloodtype']; ?> </td>
                <td class='component'> <?php echo $row['component']; ?> </td>
                <td class='quantity'> <?php echo $row['quantity'];?> </td>
                <td class='extractiondate'> <?php echo $row['extractiondate']; ?> </td>
                <td class='expirationdate'> <?php echo $row['expirationdate']; ?> </td>
                <td class='remarks'> <?php echo $row['remarks']; ?> </td>
                <td class='findings'> <?php echo $row['findings']; ?> </td>
                <td class='bloodbank'> <?php echo $row['bloodbank']; ?> </td>
                <td class='borrowersname'> <?php echo $row['reciever'];?> </td>
                <td class='borrowersaddress'> <?php echo $row['recieveraddress']; ?> </td>
                <td class='borrowerscontactnum'> <?php echo $row['contactnumber']; ?> </td>
                <td class='ornum'> <?php echo $row['ornumber']; ?> </td>
                
              </tr>
                <?php }; ?>
             
              </tbody>
              
            </table>
          </div>
        </div>
      </div>
    </div>
</div>

    <div class="no-print">
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Project Blood Seeker 2018</small>
        </div>
      </div>
    </footer>
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are done</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../index.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

<!-- Modal for editing and deleting data-->
<div id="myModal" class="modal fade " role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body" id="orderDetails">
      <div class="bloodData" >
      <b>Serial Number:</b> <span class="serialnumber"></span><br>
      <b>Donor:</b> <span class="donor"></span><br> 
      <b>Blood Type: </b> <span class="bloodtype"></span><br>
      <b>Component:</b> <span class="component"></span><br>
      <b>Quantity: </b> <span class="quantity"></span><br>
      <b>Extraction Date:</b> <span class="extractiondate"></span>
      </div>
      <p id="bloodpic"><img class="bloodimg" src="../admin/img/img.jpg" alt="Blood" height="218px" width="207px" ></p>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" data-toggle='modal' data-target='#updateModal'>Update</button>
        <button type="button" method="POST" action="table.php" class="btn btn-danger" data-dismiss="modal" id="delete" name="delete" >Delete</button>   
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end of modal -->




<!-- Modal for updating record -->
<div id="updateModal" class="modal fade " role="dialog">
  <div class="modal-dialog modal-xl">

    <!-- Modal content-->
    <div class="modal-content ">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" modal-lg></h4>
        
      </div>
      <table class="table table-bordered table-condensed">
      <tbody>
        <tr>
        
          <td>
          <label>Serial Number</label>
          <input type="text" class="form-control" >
          </td>
          <td>
          <label>Donor</label>
          <input type="text" class="form-control" >
          </td>
          <td>
          <label>Blood Type</label>
          <input type="text" class="form-control" >
          </td>
          <td>
          <label>Component</label>
          <input type="text" class="form-control" >
          </td>
          <td>
          <label>Quantity</label>
          <input type="text" class="form-control" >
          </td>
          <td>
          <label>Expiration Date</label>
          <input type="text" class="form-control" >
          </td>
          <td>
          <label>Borrowed By</label>
          <input type="text" class="form-control" >
          </td>
          <td>
          <label>OR number</label>
          <input type="text" class="form-control" >
          </td>
          <td>
          <label>Contact</label>
          <input type="text" class="form-control" >
          </td>
          <td>
          <label>Amount</label>
          <input type="text" class="form-control" >
          </td>
          <td>
          <label>Remarks</label>
          <input type="text" class="form-control" >
          </td>
        </tr>
      </tbody>
      
      </table>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" >Done</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <!-- <script src="js/orientation.js"></script> -->

<script>
//(function($){

  //data-toggle='modal' data-target='#myModal'
  $('.row-data').click(function(){
    $('#myModal .serialnumber').text( $('.serialnumber', this).text() );
    $('#myModal .donor').text( $('.donor', this).text() );
    $('#myModal .bloodtype').text( $('.bloodtype', this).text() );
    $('#myModal .component').text( $('.component', this).text() );
    $('#myModal .quantity').text( $('.quantity', this).text() );
    $('#myModal .extractiondate').text( $('.extractiondate', this).text() );

    $('#myModal').modal();
  });

//})(jQuery);
</script>

<script>
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

    
  </div>
</body>

</html>