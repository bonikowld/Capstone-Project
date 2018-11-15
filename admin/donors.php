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
          <i class="fa fa-table" ></i> List Of Donors 
          <!-- form for dropdown base on donors status -->
          <form action="" method="POST">
          <select name="type">
          <option value="alldonors">All Donors</option>
          <option value="reactive">Reactive Donors</option>
          <option value="nonreactive">Non-Reactive Donors</option>
          <input type="submit" name="submit" value="SUBMIT">
          </select>
          </form>

          </div>
        <div class="card-body" >
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Birthday</th>
                  <th>Contact Number</th>
                  <th>Home Address</th>
                  <th>Email</th>     
                  <th>Status</th>    
                  <th>Diagnosis</th> 
                  <th>Details</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Date Of Birth</th>
                  <th>Contact Number</th>
                  <th>Home Address</th>
                  <th>Email</th>
                  <th>Status</th>    
                  <th>Diagnosis</th> 
                  <th>Details</th>
        
                </tr>
              </tfoot>

              <?php include 'php/connection.php';?>

              <?php 
                $result = mysqli_query($conn,"SELECT * FROM donors  ");
              ?>
              <?php 

              
              // if(isset($_POST['submit']))
              //   {
              //     if(isset($_POST['type']))
              //       {                                 
              //       if($_POST['type'] == "reactive")
              //           {
              //             $result = mysqli_query($conn,"SELECT * FROM donors WHERE donorstatus = 'Reactive' ");
                          
              //           }
                        
              //       elseif($_POST['type'] == "nonreactive")
              //           {
              //             $result = mysqli_query($conn,"SELECT * FROM donors WHERE donorstatus = 'NonReactive' ");
              //           }

              //       }
              //       else{

              //       }

              //   }
                
                if(isset($_POST['submit'])){
                  if($_POST['type'] == 'alldonors' ){
                    $result = mysqli_query($conn,"SELECT * FROM donors  ");
                  }
                  elseif($_POST['type'] == 'reactive' ){
                    $result = mysqli_query($conn,"SELECT * FROM donors WHERE donorstatus = 'Reactive' ");
                  }
                  elseif($_POST['type'] == 'nonreactive' ){
                    $result = mysqli_query($conn,"SELECT * FROM donors WHERE donorstatus = 'NonReactive' ");
                  }
                  else{
                   
                    }
                  } 
                  while($row = mysqli_fetch_array($result)) 
                 {
              ?>
            
              <tbody>
                <tr>
                <td class='lastname'> <?php echo $row['lastname']; ?> </td>
                <td class='firstname'> <?php echo $row['firstname']; ?> </td>
                <td class='middlename'> <?php echo $row['middlename']; ?> </td>
                <td class='dateofbirth'> <?php echo $row['dateofbirth']; ?> </td>
                <td class='contactnum'> <?php echo $row['contactnum'];?> </td>
                <td class='homeaddress'> <?php echo $row['homeaddress']; ?> </td>
                <td class='email'> <?php echo $row['email']; ?> </td>
                <td class='donorstatus'> <?php echo $row['donorstatus']; ?> </td>
                <td class='diagnosis'> <?php echo $row['diagnosis']; ?> </td>
                <td><a href="donorinfo.php?donorid=<?php echo $row['donorid']?>" class='btn btn-success btn-sm'>View</a></td>
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
        function startTime() {
          var today = new Date();
          var h = today.getHours();
          var m = today.getMinutes();
          var s = today.getSeconds();
          m = checkTime(m);
          s = checkTime(s);
          document.getElementById('txt').innerHTML =
          h + ":" + m + ":" + s;
          var t = setTimeout(startTime, 500);
      }
      function checkTime(i) {
          if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
          return i;
      }

     
    </script>

  </div>
</body>

</html>
