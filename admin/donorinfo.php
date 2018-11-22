<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
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
        <div class="card-header" >
          <div style="float:right;" id="txt"></div>
          <i class="fa fa-table" ></i> Donor Information 
          <!-- form for dropdown base on donors status -->

          </div>            
        </div>
    </div>
    <!-- /.container-fluid--> 
    <!-- /.content-wrapper-->
    <?php include 'php/connection.php';?>
   <?php 
  $donorid = $_GET['donorid'];

  $sql = "SELECT * FROM donors WHERE donorid = '$donorid' ";
 
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<b>Full Name: </b> <span class='donor'>". $row["name"]. "</span> <br>"; 
        echo "<b>Date Of Birth: </b>" . $row["dateofbirth"]. "<br>";
        echo "<b>Contact Number: </b>" . $row["contactnum"]. "<br>";
        echo "<b>Address: </b>" . $row["homeaddress"]. "<br>";
        echo "<b>Email: </b>" . $row["email"]. "<br>";
        echo "<b>Last Date Of Donation: </b>" . $row["lastdonation"]. "<br>";
        echo "<b>Blood Type: </b>" . $row["bloodtype"]. "<br>";
        echo "<b>Remarks: </b>" . $row["remarks"]. "<br>";
        echo "<b>Donor Status: </b>" . $row["donorstatus"]. "<br>";
        echo "<b>Diagnosis: </b>" . $row["diagnosis"]. "<br>";

    }
    
}
else {
  
}
$conn->close();

?>
</br>
<button class='btn btn-danger btn-sm' id="donorDetails" data-toggle="modal" data-target="#donateModal">Donate Blood</button>
<button class='btn btn-success btn-sm' data-toggle="modal" data-target="#editModal">Edit Record</button>


<?php
include 'php/connection.php';

if(isset($_POST['add'])){
            $donorid = $_GET['donorid'];

            $sql = "INSERT INTO blood (serialnumber, donor, bloodtype, component, quantity, extractiondate, expirationdate, city, remarks )
            VALUES ('".$_POST["serialnumber"]."','".$_POST["donor"]."','".$_POST["bloodtype"]."','".$_POST["component"]."','".$_POST["quantity"]."','".$_POST["extractiondate"]."','".$_POST["expirationdate"]."', '".$_POST["city"]."', '".$_POST["remarks"]."')";
            $sql = "UPDATE donors SET lastdonation = '".$_POST["extractiondate"]."' WHERE donorid = '$donorid' ";
            
           if (mysqli_multi_query($conn,$sql)) {
              echo "<script type='text/javascript'>alert('Blood Added Successfully');</script>";
              } else {
              echo "<script type='text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
              }
              
              mysqli_close($conn);
           
            }

?>

<!-- Donate Blood Modal -->
<div id="donateModal" class="modal fade " role="dialog" >
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
          <p><input type="text" class="form-control serialnumber" id="serialnumber" name="serialnumber" required ></p>
          </td>
        </tr>

        <tr>
          <td>
          <b>Donor Name</b>
          <input type="text" id="donor" name="donor" class="form-control donor" required>
          </td>
        </tr>
     
        <tr>
          <td>
          <b>Blood Type</b>
          <select class="form-control" id="select" name="bloodtype">
            <option value="" selected="selected" disabled="disabled">-- select one --</option>
              <option value="O-">O-</option>
              <option value="O+">O+</option>
              <option value="A-">A-</option>
              <option value="A+">A+</option>
              <option value="B-">B-</option>
              <option value="B+">B+</option>
              <option value="AB-">AB-</option>
              <option value="AB+">AB+</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
          <b>Component</b>
          <select class="form-control" id="select" name="component">
            <option value="" selected="selected" disabled="disabled">-- select one --</option>
              <option value="Whole Blood">Whole Blood</option>
              <option value="Red Cells">Red Cells</option>
              <option value="Platelets">Platelets</option>
              <option value="Plasma">Plasma</option>
              <option value="Cyroprecipitated AHF">Cyroprecipitated AHF</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
          <b>Unit</b>
          <input type="text" id="quantity" name="quantity" class="form-control quantity" required>
          </td>
        </tr>
        <tr>
          <td>
          <b>Extraction Date</b>
          <input type="date" id="extractiondate"  name="extractiondate" class="form-control extractiondate" required>
          </td>
        </tr>
        <tr>
          <td>
          <b>Expiration Date</b>
          <input type="date"  id="expirationdate"  name="expirationdate" class="form-control expirationdate" required>
          </td>
        </tr>
        <tr>
          <td>
          <b>City</b>
          <input type="text" name="city" class="form-control" required>
          </td>
        </tr>
        <tr>
          <td>
          <b>Remarks</b>
          <select class="form-control" id="remarks" name="remarks">
            <option value="" selected="selected" disabled="disabled">-- select one --</option>
              <option value="Successfull">Successfull</option>
              <option value="Unsuccessfull">Unsuccessfull</option>
            </select>
          </td>
        </tr>

      </tbody>
           
      </table>
      <div class="modal-footer" method="get">
        <button type="submit" class="btn btn-success" name="add">Donate</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
      </form>
      </div>    
      
    </div>
  </div>
</div>
<!-- Until Here -->




<!-- Edit Donor Modal -->
<div id="editModal" class="modal fade " role="dialog" >
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
          <b>Name</b>
          <p><input type="text" class="form-control serialnumber" id="name" name="name" ></p>
          </td>
        </tr>

        <tr>
          <td>
          <b>Date Of Birth</b>
          <input type="text" id="dateofbirth" name="dateofbirth" class="form-control " >
          </td>
        </tr>
     
        <tr>
          <td>
          <b>Contact Number</b>
          <input type="text" id="contactnumber" name="contactnumber" class="form-control bloodtype">
          </td>
        </tr>
        <tr>
          <td>
          <b>Address</b>
          <input type="text" id="address" name="address" class="form-control component" >
          </td>
        </tr> 
        <tr>
          <td>
          <b>Email</b>
          <input type="text" id="email" name="email" class="form-control quantity" >
          </td>
        </tr>

           <tr>
          <td>
          <b>Last Date of Donation</b>
          <input type="text" name="dateofdonation" class="form-control" required>
          </td>
        </tr>
        <tr>
          <td>
          <b>Blood Type</b>
          <input type="text" name="bloodtype" class="form-control" required>
          </td>
        </tr>
        <tr>
          <td>
          <b>Remarks</b>
          <input type="text" name="remarks" class="form-control" required>
          </td>
        </tr>
        <tr>
          <td>
          <b>Donor Status</b>
          <input type="text" name="donorstatus" class="form-control" required>
          </td>
        </tr>
        <tr>
          <td>
          <b>Diagnosis</b>
          <input type="text" name="diagnosis" class="form-control" required>
          </td>
        </tr>


      </tbody>
           
      </table>
      <div class="modal-footer" method="get">
        <button type="submit" class="btn btn-success" name="update">Add Record</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
      </form>
      </div>    
      
    </div>
  </div>
</div>
<!-- Until Here -->


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
    <script type="text/javascript" src="../admin/js/donordonate.js"></script>
    
  </div>
</body>

</html>
