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
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

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
              <a href="requestTable.php">Requested Bloods</a>

            </li>
            <li>
              <a href="reservedBloods.php">Reserved Bloods</a>
            </li>
            
          </ul>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link"  href="reports.php">
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
         <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Blood Records</li>
      </ol>-->

      <!-- Example DataTables Card-->

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Blood Records </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Serial Number</th>
                  <th>Donor</th>
                  <th>Blood Type</th>
                  <th>Component</th>
                  <th>Quantity</th>
                  <th>Extraction Date</th>
                  <th>Expiration Date</th>
                  <th>Action</th>
                  
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
                  <th>Action</th>
        
                 
       
                </tr>
              </tfoot>
              
              <tbody>
                <?php include 'php/connection.php';?>
                
                <?php 
                $result = mysqli_query($conn,"SELECT * FROM blood WHERE city = '" . $_SESSION['city'] . "' ");
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
                <form method='get' action=''>
                  <td> <a onclick="return confirm ('Are You Sure?')" href="?serial=<?php echo $row['serialnumber']?>" class="btn btn-danger btn-sm">Delete</a>
                       <button type='button' class='btn btn-success btn-sm' data-toggle='modal' data-target='#updateModal'>Update </button></td>
            
              </form>       
              </tr>
                <?php }; ?>                    

              <?php
                if(isset($_GET['serial'])){ 
                  $serial = $_GET['serial'];
                    

                  $sql = "DELETE FROM blood WHERE serialnumber = '$serial' ";
                  
                  if ($conn->query($sql) === TRUE) {
                   echo "<script type= 'text/javascript'>alert('Deleted successfully');</script>";
                  } else {
                      echo "Error deleting record: " . $conn->error;
                  }
                } 
                ?>

                <?php mysqli_close($conn); ?>

              </tbody>
              
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
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
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../index.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

<!-- Modal for updating record -->
<div id="updateModal" class="modal fade " role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content ">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      
      <div class="modal-bodyUpdate">
      <table class="table table-bordered table-condensed">
      <tbody>
        <tr>
          <td>
          <label>Serial Number</label>
          <input type="text" class="form-control"  name="serialnumber" value="<?php echo $row['serialnumber'] ?>" readonly>
          </td>
        </tr>

        <tr>
          <td>
          <label>Donor</label>
          <input type="text" name="donor" class="form-control" placeholder="<?php echo $row['donor'] ?>" >
          </td>
        </tr>
     
        <tr>
          <td>
          <label>Blood Type</label>
          <input type="text" name="serialnumber" class="form-control" >
          </td>
        </tr>
        <tr>
          <td>
          <label>Component</label>
          <input type="text" name="serialnumber" class="form-control" >
          </td>
        </tr>
        <tr>
          <td>
          <label>Quality</label>
          <input type="text" name="serialnumber" class="form-control" >
          </td>
        </tr>
        <tr>
          <td>
          <label>Extraction Date</label>
          <input type="text" name="serialnumber" class="form-control" >
          </td>
        </tr>
        <tr>
          <td>
          <label>Expiration Date</label>
          <input type="text" name="serialnumber" class="form-control" >
          </td>
        </tr>
        <tr>
          <td>
          <label>City</label>
          <input type="text" name="serialnumber" class="form-control" >
          </td>
        </tr>

         <tr>
          <td>
          <label>Borrowed By</label>
          <input type="text" name="serialnumber" class="form-control" >
          </td>
        </tr>

         <tr>
          <td>
          <label>Borrowers Address</label>
          <input type="text" name="serialnumber" class="form-control" >
          </td>
        </tr>


        
      </tbody>
      
      </table>
              </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" >Send to Report</button>
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
    $('#myModal .expirationdate').text( $('.expirationdate', this).text() );

    $('#myModal').modal();
  });

//})(jQuery);
</script>


    
  </div>
</body>

</html>