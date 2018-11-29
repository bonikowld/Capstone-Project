<?php
        session_start();
        include 'assets/lib/login.php';
        
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Search Blood - Project Blood Seeker</title>
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/icon.png">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript">
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
        </script>
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
        <link href="//fonts.googleapis.com/css?family=Cabin:400,500,600,700" rel="stylesheet">
        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Template main Css -->
        <!-- <link rel="stylesheet" href="assets/css/registration.css"> -->
        
        <!-- Modernizr -->
    <script src="assets/js/modernizr-2.6.2.min.js"></script>
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		
		<style>
          .error{
           color:red
		  }
		</style>

    </head>

    <body class="search">

          <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="index.php">Project Blood Seeker</a>
                      </div>
                      <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                          <li><a href="index.php">Home</a></li>
                          <li class="active"><a href="search.php">Search</a></li>
                          <li><a href="donate.php">Donate</a></li>
                          <!-- <li><a href="request.php">Request</a></li> -->
                          <li>
                              <?php
                                        // if(isset($_SESSION['username'])){
                                        //     echo "<li><a href='donate.php'>Donate</a></li>";
                                        
                                        // }
                                        // else{
                                        //     echo "<a data-toggle='modal' data-target='#loginModal'>Donate</a></li>";
                                        // }
                                ?>
                                 <li><a href="assets/lib/loginadmin.php">Admin</a></li>

                        </ul>

                        <ul class="nav navbar-nav navbar-right">
          
                        <b class='navbar-text'>
                              <?php 
                                    // if(isset($_SESSION['username'])){                             
                                    //   echo $_SESSION['username'];
                                      
                                    // }
                                    // else{ 
                                      
                                    // }
                              ?>
                        </b>
                              <?php
                                    // if(isset($_SESSION['username'])){   
                                    // echo "<li><a href='admin/logout.php'><span class='glyphicon glyphicon-log-out'></span> Log-out</a></li>";
                                    // }
                                    // else{
                                    // echo "<li><a data-toggle='modal' data-target='#loginModal'><span class='glyphicon glyphicon-log-in'></span> Log-in</a></li>";
                                    // }
                              ?>   
                        </ul>
                      </div>
                    </div>
                  </nav>

          <div id="loginModal" class="modal fade " role="dialog">
            <div class="modal-dialog modal-sm">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Log-in</h4>
                </div>
                <div class='modal-body'>
                    <form method="post" action="">  
                        <label>Username</label> 
                        <input type="text"  name="username"  class="form-control">
                        <label>Password</label>
                        <input type="password"  name="pass" class="form-control"><br>
                        <button class='btn btn-success' name="signin_btn">Log-in</button>
                        <a href="register.php" class='btn btn-warning'>Sign-Up</a>
                    </form>
                </div>
             
                <!-- <div class="modal-footer">
               </div> -->
                </div>
              </div>
            </div>  
<center>

 <h1><b>SEARCH BLOOD</b></h1>

<form action="" method="get">
 <div class="btn-group">
     <select name="bloodtype" id="bloodType" class="form-control form-control-lg" required>
              <option value="" selected="selected" disabled="disabled">-- Select Blood Type --</option>
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
  </div>

  <!-- <div class="btn-group btn-group-primary">
       <select name="city" class="form-control" required>
              <option value="" selected="selected" disabled="disabled">-- Select City --</option>   
              <option value="Ozamiz City">Ozamiz City</option>
              <option value="Oroquieta City">Oroquieta City</option>
              <option value="Tangub City">Tangub City</option>
             </select>
  </div> -->
  <button class="btn btn-default hidden-print"  name="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
</form>
<form method="get" action="">
<button class="btn btn-default hidden-print"  name="showall"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Show All</button>
</form>
</center>



<div class="container">
    <table id="myTable" class="table table-rounded custab" style="border-collapse:collapse; border-style:hidden; background-color: #282929;">
    <thead>
        <tr>
        <th class="text-center"><h4><b>Component</b></h4></th>
          <th class="text-center"><h4><b>Blood Type</b></h4></th>
            <th class="text-center"><h4><b>City</b></h4></th>
              <th class="text-center"><h4><b>Units</b></h4></th>
                <th class="text-center"><h4><b>Status</b></h4></th>
                  <th class="text-center"><h4><b></b></h4></th>
        </tr>
    </thead>
    
    <tbody style="color:black;">
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

              if(isset($_GET['search'])){
  
              $bloodtype = $_GET['bloodtype'];
            
              $result = mysqli_query($conn,"SELECT * FROM blood WHERE bloodtype = '$bloodtype';"); //AND status = ''                    
              
             
            if(mysqli_num_rows($result) <= 0){
              echo "<script type='text/javascript'>alert('No Blood Available');</script>";
            }
            else{
              while($row = mysqli_fetch_array($result))
              {
                echo "<tr class='row-data' >";
                echo "<td class='text-center component'>".$row['component']."</td>";
                echo "<td class='text-center'>".$row['bloodtype']."</td>";
                echo "<td class='text-center'>".$row['city']."</td>";
                echo "<td class='text-center'>".$row['quantity']."</td>";
                 //$city = array("Ozamiz City");
                //echo "<td class='text-center'> ".count($city)."</td>";
                echo "<td class='text-center'><a class='btn btn-success btn-xs row-data'><span class='glyphicon glyphicon-ok' data-toggle='modal' data-target='#reserveModal'></span> Available</a></td>";
                echo "<td class='text-center'><a href='request.php?idblood={$row['idblood']}'><input type='button' class='btn btn-danger' value='Request'/></td>";
                echo "</tr>";                                          
              } 
            }      
            }

            if(isset($_GET['showall'])){
         
              $result = mysqli_query($conn,"SELECT * FROM blood;");                    
              
             
            if(mysqli_num_rows($result) <= 0){
              echo "<script type='text/javascript'>alert('No Blood Available');</script>";
            }
            else{
              while($row = mysqli_fetch_array($result))
              {
                echo "<tr class='row-data' >";
                echo "<td class='text-center component'>".$row['component']."</td>";
                echo "<td class='text-center'>".$row['bloodtype']."</td>";
                echo "<td class='text-center'>".$row['city']."</td>";
                echo "<td class='text-center'>".$row['quantity']."</td>";
                //$city = array("Ozamiz City");
                //echo "<td class='text-center'> ".count($city)."</td>";
                echo "<td class='text-center'><a class='btn btn-success btn-xs row-data'><span class='glyphicon glyphicon-ok' data-toggle='modal' data-target='#reserveModal'></span> Available</a></td>";
                echo "<td class='text-center'><a href='request.php?idblood={$row['idblood']}'><input type='button' class='btn btn-danger' value='Request'/></td>";
                echo "</tr>";                                        
              } 
            }      
            }             
              if(isset($_POST['reserve'])){

                $row['bloodtype'] = $bloodtype;
                $row['city'] = $city;
          
                
                $sql = "UPDATE blood SET status = '1' WHERE serialnumber = '".$_POST["serialnumber"]."' ;";

                $sql .= "INSERT INTO reserve_blood (serialnumber, bloodtype, lastname, firstname, middlename, homeaddress, contactnum, purpose, city)
                        VALUES  ('".$_POST["serialnumber"]."','".$row["bloodtype"]."','".$_POST["lastname"]."','".$_POST["firstname"]."','".$_POST["middlename"]."','".$_POST["address"]."','".$_POST["contactnum"]."','".$_POST["purpose"]."','".$row["city"]."') ";
          
          // NOT DONE ON THIS PART, NEED TO BE DONE AS SOON AS POSSIBLE>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
            // if (mysqli_multi_query($conn, $sql)) {
            //   do {
                
            //       if ($result = mysqli_store_result($conn)) {
            //           while ($row = mysqli_fetch_array($result))             
          
            //   mysqli_free_result($result);
            //   }   
            //   } 
            //   while (($conn));
            //   }
          // NOT DONE ON THIS PART, NEED TO BE DONE AS SOON AS POSSIBLE>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
          

          if (mysqli_multi_query($conn, $sql)) {        
            echo "<script type='text/javascript'>alert('Reservation Successfull');</script>";
          }                  
          else {
            echo "<script type='text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
            }     
          }    
            // }
            // if (mysqli_multi_query($conn, $sql)) {
            
            //   echo "<script type='text/javascript'>alert('Reservation Successfull');</script>";  
            // }                  
            // else {
            //   echo "<script type='text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
            //   } 

             mysqli_close($conn); 
           ?>
           
  </tbody>
    </table>
    </div>
</div>

<br><br>


   
   <!-- <div id="reserveModal" class="modal fade " role="dialog">
            <div class="modal-dialog modal-md">
              
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Reservation Form</h4>
                </div>
                <div class='modal-body'>
                    <form method="post" action="" style="margin-left: 70px; margin-right: 70px;"> 
                      
                      <div class="form-group2">
                        
                        <div class="form-group2" style="width: 376px;">
                       <input name="serialnumber" id="serialnumber" class="form-control hidden"  type="text" value="">
                          </div>                 
                          
                        <label class="col-md-4 control-label">Last Name</label>  
                        <div class="form-group2" style="width: 376px;">
                       <input  name="lastname" id="lastname" placeholder="Last Name" class="form-control"  type="text">
                          </div>  </br>                    
                      
                        <label class="col-md-4 control-label">First Name</label> 
                          <div class="form-group2" style="width: 376px;">
                        <input name="firstname" id="firstname" placeholder="First Name" class="form-control"  type="text">
                          </div>  </br>                        
                  
                        <label class="col-md-4 control-label">Middle Name</label>  
                        <div class="input-group2" style="width: 376px;">
                        <input  name="middlename" id="middlename" placeholder="Middle Name" class="form-control"  type="text">
                          </div></br>
                        
                        <label class="col-md-4 control-label">Date of Birth</label>  
                        <div class="input-group1" style="width: 376px;">
                        <input  name="birthmonth" id="birthmonth" placeholder="MM" class="form-control"  type="text">
                        </div>
                        <div class="input-group2" style="width: 376px;">
                        <input  name="birthday" id="birthday" placeholder="DD" class="form-control"  type="text">
                        </div>
                        <div class="input-group2" style="width: 376px;">
                        <input  name="birthyear" id="birthyear" placeholder="YYYY" class="form-control"  type="text">
                        </div><br>
                        
                        <label class="col-md-4 control-label" >Gender</label> 
                        <div class="form-group2" style="width: 376px;">
                        <select name="sex" id="sex" class="form-control" required>
                          <option value="" selected="selected" disabled="disabled">-- select one --</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select> 
                        </div></br>

                        <label class="col-md-4 control-label">Date of request</label>  
                        <div class="input-group1" style="width: 376px;">
                        <input  name="requestmonth" id="requestmonth" placeholder="MM" class="form-control"  type="text">
                        </div>
                        <div class="input-group2" style="width: 376px;">
                        <input  name="requestday" id="requestday" placeholder="DD" class="form-control"  type="text">
                        </div>
                        <div class="input-group2" style="width: 376px;">
                        <input  name="requestyear" id="requestyear" placeholder="YYYY" class="form-control"  type="text">
                        </div><br>
                        
                        <label class="col-md-4 control-label" >City Chapter</label> 
                          <div class="form-group2" style="width: 376px;">
                          <input  name="city" id="city" placeholder="(eg. Oroquieta City, Ozamiz City, Tangub City, etc.)" class="form-control"  type="text">
                        </div></br>

                        <label class="col-md-4 control-label" >Bloodtype</label> 
                          <div class="form-group2" style="width: 376px;">
                          <select name="bloodtype" id="bloodtype" class="form-control" required>
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
                        </div></br>

                        <label class="col-md-4 control-label" >Component</label> 
                          <div class="form-group2" style="width: 376px;">
                          <select name="component" id="component" class="form-control" required>
                            <option value="" selected="selected" disabled="disabled">-- select one --</option>
                            <option value="Whole Blood">Whole Blood</option>
                            <option value="Red Cells">Red Cells</option>
                            <option value="Platelets">Platelets</option>
                            <option value="Plasma">Plasma</option>
                            <option value="Cryoprecipitated AHF">Cryoprecipitated AHF</option>
                          </select>
                        </div></br>

                        <label class="col-md-4 control-label" >Units</label> 
                        <div class="form-group2" style="width: 376px;">
                        <input name="units" id="units" placeholder="No. of units" class="form-control"  type="Text"> 
                        </div></br>
                        
                        <label class="col-md-4 control-label" >Hospital</label> 
                        <div class="form-group2" style="width: 376px;">
                        <input name="hospital" id="hospital" placeholder="Hospital" class="form-control"  type="Text"> 
                        </div></br>

                        <label class="col-md-4 control-label" >Room No.</label> 
                        <div class="form-group2" style="width: 376px;">
                        <input name="roomnum" id="roomnum" placeholder="Room No." class="form-control"  type="Text"> 
                        </div></br>

                        <label class="col-md-4 control-label" >Age</label> 
                        <div class="form-group2" style="width: 376px;">
                        <input name="age" id="age" placeholder="Age" class="form-control"  type="Text"> 
                        </div></br>

                        <label class="col-md-4 control-label" >Contact No.</label> 
                        <div class="form-group2" style="width: 376px;">
                        <input name="cellphonenum" id="cellphonenum" placeholder="Contact No." class="form-control"  type="Text"> 
                        </div></br>

                        <label class="col-md-4 control-label" >Attending Physician</label> 
                        <div class="form-group2" style="width: 376px;">
                        <input name="physician" id="physician" placeholder="Attending Physician" class="form-control"  type="Text"> 
                        </div></br>
                        
                        <label class="col-md-4 control-label" >Clinical Diagnosis</label> 
                        <div class="form-group2" style="width: 376px;">
                        <input name="diagnosis" id="diagnosis" placeholder="Clinical Diagnosis" class="form-control"> 
                        </div></br>
                  
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                              <button type="submit" name="request" class="btn btn-primary">Reserve</button>
                            </div></br>
                        </form>

     </div> -->
                    
                </div>
             
                <!-- <div class="modal-footer">
               </div> -->
                </div>
              </div>
            </div>  
<div class="footer"> 
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Project Blood Seeker 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="about.html">About the Website</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
</div>

    <!-- jQuery -->
    
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <script src="assets/js/jquery-1.11.1.min.js"></script> -->
    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>

<script>
    $('.row-data').click(function(){
    $('#updateModal .serialnumber').text( $('.serialnumber', this).text() );

    document.getElementById("serialnumber").value = $('.serialnumber', this).text();

    $('#reserveModal').modal();
  });
</script>

<script>
      $(document).ready(function(){
          $('#myTable').dataTable();
      });
</script>

    </body>
</html>
