<?php
        session_start();
        

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "blood_bank";
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " .mysqli_connect_error());
        }

        if(isset($_POST['signin_btn'])){

          $username = $_POST['username'];
          $password = $_POST['password'];

          $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_array($result);

          $_SESSION['username']= $row['bloodbank'];
          
          $count=mysqli_num_rows($result);

          if($count==1){
            if ($row['role']=="admin")
            {
                header ("location: admin/index.php"); 
                
                
            }  
            else if ($row['role']=="")
            {
                $_SESSION['role']=$row['role'];
                header ("location: donate.php");
                $_SESSION['username']= $row['firstname']; 
            }
            

          }
          else{
            $prompt = "Log in Failed Invalid Username or Password";
            echo "<script type='text/javascript'>alert('$prompt');</script>";
          }

         
          mysqli_close($conn);

        }

?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Search Blood - Project Blood Seeker</title>
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
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

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
		
		<style>
          .error{
           color:red
		  }
		</style>

    </head>

    <body>

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
                          <li><a href="request.php">Request</a></li>
                          <li><a data-toggle='modal' data-target='#loginModal'>Donate</a></li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
          
                        <b class='navbar-text'>
                          <?php 
                                if(isset($_SESSION['username'])){                             
                                  echo $_SESSION['username'];
                                  
                                }
                                else{ 
                                  
                                }
                              ?>
                              </b>
                            <?php
                            if(isset($_SESSION['username'])){   
                             echo "<li><a href='admin/logout.php'><span class='glyphicon glyphicon-log-out'></span> Log-out</a></li>";
                            }
                            else{
                             echo "<li><a data-toggle='modal' data-target='#loginModal'><span class='glyphicon glyphicon-log-in'></span> Log-in</a></li>";
                            }
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
                        <input type="password"  name="password" class="form-control"><br>
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


  


 <h1>SEARCH BLOOD</h1>
 


<form action="" method="get">
 <div class="btn-group">
     <select name="bloodtype" class="form-control form-control-lg" required>
              <option value="">Select Blood</option>
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

  <div class="btn-group btn-group-primary">
       <select name="city" class="form-control" required>
              <option value="">Select City</option>
              <option value="Ozamiz City">Ozamiz City</option>
              <option value="Oroquieta City">Oroquieta City</option>
              <option value="Tangub City">Tangub City</option>
             </select>
  </div>
  <button class="btn btn-primary hidden-print"  name="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
</form>
</center>



<div class="container">
    <table class="table table-rounded custab table-hover">
    <thead>
        <tr>
        <th class="text-center">Serial Number</th>
        <th class="text-center">Blood Type</th>
          <th class="text-center">City</th>
            <th class="text-center">Reserve</th>
        </tr>
    </thead>

            <!-- <tr>
              <td class="text-center"> 1234-112231</td>
                <td class="text-center">Ozamiz City</td>
                <td class="text-center">A+</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="Reserve.html"><span class="glyphicon glyphicon-ok"></span> Yes</a></td>
            </tr>
            <tr>
              <td class="text-center"> 2234-112231</td>
                <td class="text-center">Oroquieta City</td>
                <td class="text-center">B</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="Reserve.html"><span class="glyphicon glyphicon-ok"></span> Yes</a></td>
            </tr>
            <tr>
               <td class="text-center"> 3334-112231</td>
                <td class="text-center">Tangub City</td>
                <td class="text-center">O+</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="Reserve.html"><span class="glyphicon glyphicon-ok"></span> Yes</a></td>
            </tr> -->
    <tbody>
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
              $city = $_GET['city'];
              $bloodtype = $_GET['bloodtype'];

              $result = mysqli_query($conn,"SELECT * FROM blood WHERE bloodtype = '$bloodtype' AND city = '$city' ;");
              

              while($row = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td class='text-center'>".$row['serialnumber']."</td>";
                echo "<td class='text-center'>".$row['bloodtype']."</td>";
                echo "<td class='text-center'>".$row['city']."</td>";
                echo "<td class='text-center'><a class='btn btn-info btn-xs' data-toggle='modal' data-target='#reserveModal'><span class='glyphicon glyphicon-ok'></span> Yes</a></td>";
                echo "</tr>";               
                }
              }
             
              if(isset($_POST['reserve'])){

                $row['serialnumber'] = $serialnumber;
                $row['bloodtype'] = $bloodtype;
                $row['city'] = $city;
          
          
                $sql = "INSERT INTO reserve_blood (serialnumber, bloodtype, city, lastname, firstname, middlename, homeaddress, contactnum, purpose)
                        VALUES  ('".$row["serialnumber"]."','".$row["bloodtype"]."','".$row["city"]."','".$_POST["lastname"]."','".$_POST["firstname"]."','".$_POST["middlename"]."','".$_POST["address"]."','".$_POST["contactnum"]."','".$_POST["purpose"]."')";
          
          
                  if ($conn->query($sql) == TRUE) {
                    echo "<script type='text/javascript'>alert('Reservation Successfull');</script>";
                    } else {
                    echo "<script type='text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
                    } 
                    
                  }

              mysqli_close($conn); 
           ?>
           
  </tbody>
    </table>
    </div>
</div>


  <div id="reserveModal" class="modal fade " role="dialog">
            <div class="modal-dialog modal-md">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Reservation Form</h4>
                </div>
                <div class='modal-body'>
                    <form method="post" action=""> 
                      
                      <div class="form-group">
                        <label class="col-md-4 control-label">Last Name</label>  
                        <div class="input-group">
                        <span class="input-group-addon"></i></span>
                        <input  name="lastname" placeholder="Last Name" class="form-control"  type="text">
                          </div>  </br>                    
                      
                        <label class="col-md-4 control-label">First Name</label> 
                          <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input name="firstname" placeholder="First Name" class="form-control"  type="text">
                          </div>  </br>                        
                  
                        <label class="col-md-4 control-label">Middle Name</label>  
                        <div class="input-group">
                        <span class="input-group-addon"></i></span>
                        <input  name="middlename" placeholder="Middle Name" class="form-control"  type="text">
                          </div></br>

                        <label class="col-md-4 control-label" >Address</label> 
                          <div class="input-group">
                        <span class="input-group-addon"></i></span>
                        <input name="address" placeholder="Address" class="form-control"  type="Text"> 
                          </div></br>

                          <label class="col-md-4 control-label" >Contact Number</label> 
                          <div class="input-group">
                        <span class="input-group-addon"></i></span>
                        <input name="contactnum" placeholder="Contact Number" class="form-control"  type="Text"> 
                          </div></br>

                          <label class="col-md-4 control-label" >Purpose</label>                 
                            <div class="input-group">
                          <span class="input-group-addon"></i></span>
                          <textarea name="purpose" class="form-control" placeholder="Purpose" required></textarea>
                            </div></br>

                  
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                              <button type="submit" name="reserve" class="btn btn-primary">Reserve</button>
                            </div></br>
                        </form>

            </div>                                               
                    
                </div>
             
                <!-- <div class="modal-footer">
               </div> -->
                </div>
              </div>
            </div>  


<!-- <div id="myModal" class="modal fade " role="dialog">
  <div class="modal-dialog modal-lg"> -->

    <!-- Modal content-->
    <!-- <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body" >
      <div class="bloodData" >
      <b>Serial Number:</b> <span class="serialnumber"></span><br>
      <b>Donor:</b> <span class="donor"></span><br> 
      <b>Blood Type: </b> <span class="bloodtype"></span><br>
      <b>Component:</b> <span class="component"></span><br>
      <b>Quantity: </b> <span class="quantity"></span><br>
      <b>Extraction Date:</b> <span class="extractiondate"></span><br>
      <b>Expiration Date:</b> <span class="expirationdate"></span>
      </div>
      <p id="bloodpic"><img class="bloodimg" src="../admin/img/img.jpg" alt="Blood" height="218px" width="207px" ></p>
      </div>

    <form method="post" action="">
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" data-toggle='modal' data-target='#updateModal'>Update</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle='modal' data-target="#deleteModal" >Delete</button> 
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>  
     </div>
    </form> 
      </div>
    </div>
  </div>
    -->

    <!--  Scripts
    ================================================== -->

    <!-- jQuery -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <!-- <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script> -->

    </body>
</html>
