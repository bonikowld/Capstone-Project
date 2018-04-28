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

<body class="fixed-nav sticky-footer bg-dark" id="page-top" onload="startTime()">
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
        <div class="card-header" >
          <div style="float:right;" id="txt"></div>
          <i class="fa fa-table" ></i> Blood Records </div>
        <div class="card-body" >
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
          
                <tr class='clickable-row row-data' data-href='url://'>
                <td class='serialnumber'> <?php echo $row['serialnumber']; ?> </td>
                <td class='donor'> <?php echo $row['donor']; ?> </td>
                <td class='bloodtype'> <?php echo $row['bloodtype']; ?> </td>
                <td class='component'> <?php echo $row['component']; ?> </td>
                <td class='quantity'> <?php echo $row['quantity'];?> </td>
                <td class='extractiondate'> <?php echo $row['extractiondate']; ?> </td>
                <td class='expirationdate'> <?php echo $row['expirationdate']; ?> </td>
                <form method='get' action=''>
                  <td> <a onclick="return confirm ('Are You Sure?')" href="?serial=<?php echo $row['serialnumber']?>" class="btn btn-danger btn-sm">Delete</a>
                       <button type='button' class='btn btn-success btn-sm row-data' data-href='url://'>Checkout </button></td>
            
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

                <?php
                  if(isset($_POST['update'])){
                    $serialnumber = $_POST['serialnumber'];
                    $donor = $_POST['donor'];
                    $bloodtype = $_POST['bloodtype'];
                    $component = $_POST['component'];
                    $quantity = $_POST['quantity'];
                    $extractiondate = $_POST['extractiondate'];
                    $expirationdate = $_POST['expirationdate'];
                    $bloodbank = $_POST['city'];
                    $borrowersname = $_POST['borrowedby'];
                    $borrowersaddress = $_POST['borrowersaddress'];
                    $borrowerscontactnum = $_POST['contactnumber'];
                    $ornum = $_POST['ornumber'];

                    $sql = "INSERT INTO report (serialnumber, donor, bloodtype, component, quantity, extractiondate, expirationdate, bloodbank, borrowersname, borrowersaddress, borrowerscontactnum, ornum)
                            VALUES ('".$_POST["serialnumber"]."', '".$_POST["donor"]."','".$_POST["bloodtype"]."', '".$_POST["component"]."', '".$_POST["quantity"]."', '".$_POST["extractiondate"]."', '".$_POST["expirationdate"]."', '".$_POST["city"]."', '".$_POST["borrowedby"]."', '".$_POST["borrowersaddress"]."', '".$_POST["contactnumber"]."', '".$_POST["ornumber"]."')";

                    if($conn->query($sql) == TRUE){
                ?>
                    <script type= 'text/javascript'>alert('Checkout Successfull');</script>

                    <?php 
                    }else{
                      ?>
                      <script type= 'text/javascript'>alert('Checkout Failed');</script>
 
                  <?php
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


<!-- Modal for updating record -->

<div id="updateModal" class="modal fade " role="dialog" >
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content ">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>

      
    <div class="modal-bodyUpdate">
    <form method='post' action=''>
      <table class="table table-bordered table-condensed">
      <tbody>
        <tr>
          <td>
          <b>Serial Number</b>
          <p><input type="text" class="form-control serialnumber" id="serialnumber" name="serialnumber" readonly></p></input>
          </td>
        </tr>

        <tr>
          <td>
          <b>Donor</b>
          <input type="text" id="donor" name="donor" class="form-control donor" value="" readonly>
          </td>
        </tr>
     
        <tr>
          <td>
          <b>Blood Type</b>
          <input type="text" id="bloodtype" name="bloodtype" class="form-control bloodtype" readonly>
          </td>
        </tr>
        <tr>
          <td>
          <b>Component</b>
          <input type="text" id="component" name="component" class="form-control component" readonly>
          </td>
        </tr>
        <tr>
          <td>
          <b>Quantity</b>
          <input type="text" id="quantity" name="quantity" class="form-control quantity" readonly>
          </td>
        </tr>
        <tr>
          <td>
          <b>Extraction Date</b>
          <input type="text" id="extractiondate"  name="extractiondate" class="form-control extractiondate" readonly>
          </td>
        </tr>
        <tr>
          <td>
          <b>Expiration Date</b>
          <input type="text"  id="expirationdate"  name="expirationdate" class="form-control expirationdate" readonly>
          </td>
        </tr>
        <tr>
          <td>
          <b>City</b>
          <input type="text" name="city" class="form-control" required >
          </td>
        </tr>

         <tr>
          <td>
          <b>Borrowed By</b>
          <input type="text" name="borrowedby" class="form-control" required>
          </td>
        </tr>

         <tr>
          <td>
          <b>Borrowers Address</b>
          <input type="text" name="borrowersaddress" class="form-control" required>
          </td>
        </tr>

           <tr>
          <td>
          <b>Contact Number</b>
          <input type="text" name="contactnumber" class="form-control" required>
          </td>
        </tr>

           <tr>
          <td>
          <b>OR Number</b>
          <input type="text" name="ornumber" class="form-control" required>
          </td>
        </tr>
     
      </tbody>
      
      </table>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="update">Done</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
      </form>
      </div>    
      
    </div>
  </div>
</div>

<?php include 'php/logoutfooter.php';?>

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
    <script type="text/javascript" src="../admin/js/update.js"></script>
    
  </div>
</body>

</html>
