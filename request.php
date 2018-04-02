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

if(!empty($_POST)){
        session_start();
        $_SESSION["reload"] = "1";

        $sql = "INSERT INTO request_blood (lastname, firstname, middlename, age, birthdate, sex, hospital, roomnum, physician, cellphonenum, diagnosis)
                VALUES ('".$_POST["lastname"]."','".$_POST["firstname"]."','".$_POST["middlename"]."','".$_POST["age"]."','".$_POST["birthdate"]."','".$_POST["sex"]."','".$_POST["hospital"]."','".$_POST["roomnum"]."','".$_POST["physician"]."','".$_POST["cellphonenum"]."','".$_POST["diagnosis"]."')";

        if ($conn->query($sql) == TRUE) {
          echo "<script type='text/javascript'>alert('Request Successfull');</script>";
          } else {
          echo "<script type='text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
          }
          
          $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en" >

 <head>
        <meta charset="utf-8">
        <title>Request - Project Blood Seeker</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/stylerequest.css">
        
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
                          <li><a href="search.php">Search</a></li>
                          <li class="active"><a href="request.php">Request</a></li>
                          <li><a data-toggle='modal' data-target='#loginModal'>Donate</a></li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                     
                        <?php 
                                if(isset($_SESSION['username'])){
                                  echo "<b class='navbar-text'><span class='glyphicon glyphicon-user'></span> WELCOME";
                                  echo $_SESSION['username'];
                                  echo "<li><a href='admin/logout.php'><span class='glyphicon glyphicon-log-out'></span> Log-out</a></li>";
                                }
                                else{;
                                  echo "<li><a data-toggle='modal' data-target='#loginModal'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                                }
                              ?>
                              </b>
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
                        <a href="register.html" class='btn btn-warning'>Sign-Up</a>
                    </form>
                </div>
             
                <!-- <div class="modal-footer">
               </div> -->
                </div>
              </div>
            </div>  

<div class="container">
  <form>
   <strong><center><H2>PATIENT INFORMATION</H2></center> </strong>
    <div class="form-group row">

      <div class="input-group input-group-icon">
        <input class = "form-group" type="text" placeholder="Last Name"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
        </div>


        <div class="input-group input-group-icon">
        <input class="form-group" type="text" placeholder="First Name"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>


      <div class="input-group input-group-icon">
        <input class="form-group" type="text" placeholder="Middle Name"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>

    </div>


    <div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" placeholder="DD"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="MM"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="YYYY"/>
          </div>
        </div>
      </div>
      <div class="col-half">
        <h4>Gender</h4>
        <div class="btn-group">
    <button  type="button" class="btn btn-default" style="
    width: 125px;
    height: 54px;">Male</button>
    <button type="button" class="btn btn-default" style="
    width: 125px;
    height: 54px;">Female</button>
  </div>
      </div>
    </div>
<div class="row">
      <div class="col-half">
        <h4>Date of Request</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" placeholder="DD"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="MM"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="YYYY"/>
          </div>
        </div>
      </div>
      <div class="col-half">
        <h4>Blood Type</h4>
        <div class="input-group">
          <div class="col-twothirds">
          <select name="bloodtype" id="bloodtype" id="bloodtype" class="form-control" style="    width: 246px;
    height: 54px;">
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
        </div>
      </div>
    </div>


     <div class="row">
      <div class="col-half">
        <h4>Hospital</h4>
        <div class="form-group-2">
            <input type="Text" placeholder="Hospital"/>
        </div>
      </div>
      <div class="col-half">
        <h4>Room No</h4>
        <div class="form-group-2">
           <input type="text" placeholder="Room No."/>
        </div>
      </div>
    </div>



    <div class="row">
      <div class="col-half">
        <h4>Age</h4>
        <div class="form-group-2">
            <input type="Text" placeholder="Age"/>
        </div>
      </div>
      <div class="col-half">
        <h4>Telephone No.</h4>
        <div class="form-group-2">
           <input type="text" placeholder="Tel No."/>
        </div>
      </div>
    </div>




<div class="row">
  <h4>Attending Physician</h4>
      <div class="input-group input-group-icon">
        <input class = "form-group" type="text" placeholder="Attending Physician"/>
        <div class="input-icon"><i class="fa fa-stethoscope"></i></i></div>
        </div>
    </div>
    <div class="row">
  <h4>Clinical Diagnosis</h4>
      <div class="input-group input-group-icon">
        <input class = "form-group"  type="message" placeholder="Clinical Diagnosis"/>
        <div class="input-icon"><i class="fa fa-stethoscope"></i></div>
        </div>
    </div>

<button class="button"> REQUEST</button>
    </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script> -->

  

    <script  src="js/index.js"></script>




</body>

</html>
