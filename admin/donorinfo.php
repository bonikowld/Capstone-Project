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
        echo "<b>Name: </b>" . $row["firstname"]. " " . $row["middlename"]." ". $row["lastname"].        "<br>"; 
        echo "<b>Date Of Birth: </b>" . $row["dateofbirth"]. "<br>";
        echo "<b>Contact Number: </b>" . $row["contactnum"]. "<br>";
        echo "<b>Home Address: </b>" . $row["homeaddress"]. "<br>";
        echo "<b>Email Address: </b>" . $row["email"]. "<br>";
        echo "<b>Last Date Of Donation: </b>" . $row["lastdonation"]. "<br>";
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
<button class='btn btn-danger btn-sm'>Donate Blood</button>
<button class='btn btn-success btn-sm'>Edit Record</button>

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
