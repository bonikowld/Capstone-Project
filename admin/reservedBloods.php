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

      <?php include 'php/sidenav.php';?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Blood Records</li>
      </ol>-->

      <!-- Example DataTables Card-->

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Reserve Records </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover " id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Serial Number</th>
                  <th>Blood Type</th>
                  <th>City</th>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Address</th>
                  <th>Contact Number</th>
                  <th>Purpose</th>                 
                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                <th>Serial Number</th>
                  <th>Blood Type</th>
                  <th>City</th>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Address</th>
                  <th>Contact Number</th>
                  <th>Purpose</th> 
        
                 
       
                </tr>
              </tfoot>
              
              <tbody>
              <?php include 'php/connection.php';?>
              
                <?php 
                $result = mysqli_query($conn,"SELECT * FROM reserve_blood WHERE city = '" . $_SESSION['city'] . "' ");

                      
                while($row = mysqli_fetch_array($result))  
                {
                echo "<td class='serialnumber'>".$row['serialnumber']."</td>";
                echo "<td class='bloodtype'>".$row['bloodtype']."</td>";
                echo "<td class='city'>".$row['city']."</td>";
                echo "<td class='lastname'>".$row['lastname']."</td>";
                echo "<td class='firstname'>".$row['firstname']."</td>";
                echo "<td class='middlename'>".$row['middlename']."</td>";
                echo "<td class='homeaddress'>".$row['homeaddress']."</td>";
                echo "<td class='contactnum'>".$row['contactnum']."</td>";
                echo "<td class='purpose'>".$row['purpose']."</td>";

                echo "</tr>";
                };
                
                mysqli_close($conn); 
               ?>
              
              </tbody>
              
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include 'php/logoutfooter.php';?>


<form action="" method="get">
<!-- modal for deleting -->
<div id="deleteModal" class="modal fade " role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
      <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div> -->
      <div class='modal-body' >
      <h6>Are you Sure?</h6>
      <button type='button' class='btn btn-success' name="delete_btn">Confirm</button>
      <button type='button' class='btn btn-warning' data-dismiss='modal'>Cancel</button> 
      </div>
   
      <!-- <div class="modal-footer">
     </div> -->
      </div>
    </div>
  </div>
<!-- end of modal -->
</form>

     <?php include 'php/connection.php';?>
    <?php 
          

                if(isset($_GET['delete_btn'])){
                  $sql = "DELETE FROM blood WHERE serialnumber = '".$serialnumber."' ";
                  
                  if ($conn->query($sql) === TRUE) {
                   echo "<script type= 'text/javascript'>alert('Deleted successfully');</script>";
                  } else {
                      echo "Error deleting record: " . $conn->error;
                  }
                }

                mysqli_close($conn); 
    ?>


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
          <input type="text" name="serialnumber" class="form-control" >
          </td>
        </tr>

        <tr>
          <td>
          <label>Donor</label>
          <input type="text" name="serialnumber" class="form-control" >
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


    
  </div>
</body>

</html>