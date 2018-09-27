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

<body class="fixed-nav sticky-footer bg-dark" id="page-top" >
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
          <i class="fa fa-table"></i> Donations </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover " id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Age</th>
                  <th>Birthdate</th>
                  <th>Sex</th>
                  <th>Nationality</th>
                  <th>Civil Status</th>          
                  <th>Education</th>
                  <th>Occupation</th>
                  <th>Cellphone Number</th>
                  <th>Email Address</th>
                  <th>Blood Bank</th>
                  <th>Identification No.</th>
                  <th>Donor Address</th>
                  <th>Delete</th>

                </tr>
              </thead>
              <tfoot>
                <tr>
                <th>Last Name</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Age</th>
                  <th>Birthdate</th>
                  <th>Sex</th>
                  <th>Nationality</th>
                  <th>Civil Status</th>          
                  <th>Education</th>
                  <th>Occupation</th>
                  <th>Cellphone Number</th>
                  <th>Email Address</th>
                  <th>Blood Bank</th>
                  <th>Identification No.</th>
                  <th>Donor Address</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
              
              <tbody>
              <?php include 'php/connection.php';?>
              
              <?php         

                $result = mysqli_query($conn,"SELECT * FROM donate_blood WHERE identificationno = '" . $_SESSION['city'] . "' ");
                ?>

                <?php     
                while($row = mysqli_fetch_array($result))  
                {?>
                <tr class='row-data' data-href='url://'>
               
                <td class='lastname'> <?php echo $row['lastname']; ?></td>
                <td class='firstname'> <?php echo $row['firstname']; ?></td>
                <td class='middlename'> <?php echo $row['middlename']; ?></td>
                <td class='age'> <?php echo $row['age'] ?></td>
                <td class='birthdate'> <?php echo $row['birthdate']; ?></td>
                <td class='sex'> <?php echo $row['sex']; ?></td>
                <td class='nationality'> <?php echo $row['nationality']; ?></td>
                <td class='civilstatus'> <?php echo $row['civilstatus']; ?></td>
                <td class='education'> <?php echo $row['education']; ?></td>
                <td class='occupation'> <?php echo $row['occupation']; ?></td>
                <td class='cellphonenum'> <?php echo $row['cellphonenum']; ?></td>
                <td class='email'> <?php echo $row['email']; ?></td>
                <td class='identificationno'> <?php echo $row['identificationno']; ?></td> 
                <td class='bloodbank'> <?php echo $row['bloodbank']; ?></td> 
                <td class='homeaddress'> <?php echo $row['homeaddress']; ?></td>
                <form method='get' action=''>
                <td> <a href="?iddonate=<?php echo $row['iddonate_blood']?>" onclick="return confirm ('Are You Sure?');" class="btn btn-danger btn-sm">Delete</a></td>
                </form>  
                </tr>

                <?php }; ?>
                
                <?php mysqli_close($conn); ?> 
              
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


    <?php 
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "blood_bank";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection 
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                if(isset($_GET['iddonate'])){
                  $iddonate = $_GET['iddonate'];

                  $sql = "DELETE FROM donate_blood WHERE iddonate_blood = '".$iddonate."' ";
                  
                  if ($conn->query($sql) === TRUE) {
                  } else {
                      echo "Error deleting record: " . $conn->error;
                  }
                }

                mysqli_close($conn); 
    ?>


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
          <input type="text" name="serialnumber" class="form-control" >
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
      <form action="" method="get">
        <button type="button" class="btn btn-success" data-dismiss="modal" >Done</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </form>
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