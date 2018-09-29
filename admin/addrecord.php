<?php 
    session_start(); 
    include 'php/connection.php';
?>

<?php
if(!empty($_POST)){
            $sql = "INSERT INTO blood (serialnumber, donor, bloodtype, component, quantity, extractiondate, expirationdate, city, status)
            VALUES ('".$_POST["serialnumber"]."','".$_POST["donor"]."','".$_POST["bloodtype"]."','".$_POST["component"]."','".$_POST["quantity"]."','".$_POST["extractiondate"]."','".$_POST["expirationdate"]."','".$_SESSION['city']."','0')";

            if ($conn->query($sql) == TRUE) {
              echo "<script type='text/javascript'>alert('New record created successfully');</script>";
              } else {
              echo "<script type='text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
              }
              
              $conn->close();
           
            }

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
  <style>
  .error{
   color:red
  }
  </style>
</head>
  
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  
  <?php include 'php/sidenav.php';?>


  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Add Record</li>
      </ol>
 <!--    sticky footer start here -->
 
 <?php include 'php/logoutfooter.php';?>


    <!-- Add record input fields -->  

<table class="table table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
<form action="" method="POST">
    <tbody>
        <tr>
           <td>
           <label>Serial Number</label>
           <input type="text" class="form-control" name="serialnumber" id="serialnumber" placeholder="1234-567890-1"required/>
           <!-- <span class="error_form" id="snum_error_message"></span> -->
           </td>
           <td>

           <label>Donor</label>
             <input type="text" class="form-control" name="donor" id="donor" required/>
             <!-- <span class="error_form" id="dname_error_message"></span> -->
            </td>
           <td>
           <label>Bloodtype</label>
             <select type="text" name="bloodtype" id="bloodtype" class="form-control" required>
             <option value="" selected="selected" disabled="disabled">-- select one --</option>
              <option value="O">O</option>
              <option value="O-">O-</option>
              <option value="O+">O+</option>
              <option value="A-">A-</option>
              <option value="A+">A+</option>
              <option value="B-">B-</option>
              <option value="B+">B+</option>
              <option value="AB-">AB-</option>
              <option value="AB+">AB+</option>
             </select>
             <!-- <span class="error_form" id="btype_error_message"></span> -->
          </td>
           <td>
           <label>Component</label>
             <select type="text" name="component" id="component" class="form-control" required>
             <option value="" selected="selected" disabled="disabled">-- select one --</option>
              <option value="Whole Blood">Whole Blood</option>
              <option value="Red Cells">Red Cells</option>
              <option value="Platelets">Platelets</option>
              <option value="Plasma">Plasma</option>
              <option value="Cryoprecipitated AHF">Cryoprecipitated AHF</option>
             </select>
             <!-- <span class="error_form" id="component_error_message"></span> -->
            </td>
            <td>
           <label>Quantity</label>
             <input type="number" class="form-control" name="quantity" id="quantity" required/>
             <!-- <span class="error_form" id="quantity_error_message"></span> -->
            </td>
            <td>
           <label>Extraction Date</label>
             <input class="form-control" name="extractiondate" id="extractiondate" type="date" placeholder="mm/dd/yyyy" required/>
             <!-- <span class="error_form" id="extdate_error_message"></span> -->
            </td>
            <td>
           <label>Expiration Date</label>
             <input class="form-control" name="expirationdate" id="expirationdate" type="date" placeholder="mm/dd/yyyy" required/>
             <!-- <span class="error_form" id="expdate_error_message"></span> -->
            </td> 
          
       
        </tr>
    </tbody>
</table>

<button class="btn btn-success" type="submit" name="add" id="add">Add default</button>

</form>

<br><br>
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"> Records</i></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Serial Number</th>
                  <th>Name</th>
                  <th>Blood Type</th>
                  <th>Component</th>
                  <th>Quantity</th>
                  <th>Extraction Date</th>
                  <th>City</th>
                </tr>
              </thead>

              <tbody>
              <?php include 'php/connection.php';?>
              
              <?php 
                $city = $_SESSION['city'];

                $result = mysqli_query($conn,"SELECT * FROM blood WHERE city = '$city'; ");
                      
                    while($row = mysqli_fetch_array($result))  
                {
                echo "<tr>";
                echo "<td>".$row['serialnumber']."</td>";
                echo "<td>".$row['donor']."</td>";
                echo "<td>".$row['bloodtype']."</td>";
                echo "<td>".$row['component']."</td>";
                echo "<td>".$row['quantity']."</td>";
                echo "<td>".$row['extractiondate']."</td>";
                echo "<td>".$row['city']."</td>";
                echo "</tr>";
                }
                ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/snbutton.js"></script>
    <script src="js/formvalidation.js"></script>

    
    <!-- JavaScript for enable/disable button-->
    <script>
     $(document).ready(function(){
         SNButton.init("add",{
             fields: ["serialnumber","donor","bloodtype","component","quantity","extractiondate","expirationdate"],
             enabletext: "Add Record",
             disabletext: "Add Record"
         })
     })
    </script>
  <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Page level plugin JavaScript-->
  <!--  <script src="vendor/chart.js/Chart.min.js"></script> -->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
    <script type="text/javascript" src="../admin/js/update.js"></script>
  </div>
</body>

</html>