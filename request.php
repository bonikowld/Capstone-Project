<?php
        session_start();  
        include 'assets/lib/login.php';
?>

<?php
  if (isset($_POST['request'])) {
    $fullname = $_POST['fullname'];
    $birthmonth = $_POST['birthmonth'];
    $birthday = $_POST['birthday'];
    $birthyear = $_POST['birthyear'];
    $sex = $_POST['sex'];
    $requestmonth = $_POST['requestmonth'];
    $requestday = $_POST['requestday'];
    $requestyear = $_POST['requestyear'];
    $bloodtype = $_POST['bloodtype'];
    $component = $_POST['component'];
    $units = $_POST['units'];
    $hospital = $_POST['hospital'];
    $roomnum = $_POST['roomnum'];
    $age = $_POST['age'];
    $cellphonenum = $_POST['cellphonenum'];
    $physician = $_POST['physician'];
    $diagnosis = $_POST['diagnosis'];
    $city = $_POST['city'];
    $secretKey = "6LfIoXsUAAAAAPGeftRQh1BfA_GbxBAQVPne8gYf";
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
    $response = file_get_contents($url);
  }
?>

<!DOCTYPE html>
<html lang="en" >

 <head>
        <meta charset="utf-8">
        <title>Request - Project Blood Seeker</title>
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/icon.png">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/stylerequest.css">
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>

        
        <!-- <style>
          .error{
           color:red
          }
        </style> -->


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
                          <li><a href="search.php">Search</a></li>
                          <li><a href="donate.php">Donate</a></li>
                          <!-- <li class="active"><a href="request.php">Request</a></li>   -->
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


            <div id="loginModal" class="modal fade" role="dialog">
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

<?php           
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
        $_SESSION["reload"] = "1";

        $birthday = $_POST['birthday'];
        $birthmonth = $_POST['birthmonth'];
        $birthyear = $_POST['birthyear'];

        $_POST["birthdate"] = $birthday."-".$birthmonth."-".$birthyear;

        $requestday = $_POST['requestday'];
        $requestmonth = $_POST['requestmonth'];
        $requestyear = $_POST['requestyear'];

        $_POST["requestdate"] = $requestday."-".$requestmonth."-".$requestyear;


        $sql = "INSERT INTO request_blood (serialnumber, fullname, age, birthdate, sex, dateofrequest, bloodtype, component, units, hospital, roomnum, cellphonenum, physician, diagnosis, city )
                VALUES ('".$_POST["serialnumber"]."','".$_POST["fullname"]."','".$_POST["age"]."','".$_POST["birthdate"]."','".$_POST["sex"]."','".$_POST["requestdate"]."','".$_POST["bloodtype"]."','".$_POST["component"]."','".$_POST["units"]."','".$_POST["hospital"]."','".$_POST["roomnum"]."','".$_POST["cellphonenum"]."','".$_POST["physician"]."','".$_POST["diagnosis"]."','".$_POST["city"]."')";

        if ($conn->query($sql) == TRUE) {
          echo "<script type='text/javascript'>alert('Request Successfull and Wait for the Confirmation');</script>";
          } else {
          echo "<script type='text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
          }

          $conn->close();
        
        }             
 
?>




<div class="container" style="
    margin-top: 2%;
    margin-bottom: 5%;
">
  <form method="post" action="">
   <strong><center><H2>PATIENT INFORMATION</H2></center> </strong>
    <div class="form-group row">

      <div class="input-group input-group-icon">
        <input class = "form-group" type="text" name="fullname" id="fullname" placeholder="Full Name"/ style="width: 195%" required>
        <div class="input-icon"><i class="fa fa-user" ></i></div>
        </div>

      <div class="input-group">
        <input class = "form-group" type="text" name="serialnumber" id="serialnumber" valu  e="<?php $idblood = $_GET['idblood']; $sql = "SELECT * FROM blood WHERE idblood = '$idblood' "; $result = $conn->query($sql);
                                                                                              if ($result->num_rows > 0) {
                                                                                              // output data of each row
                                                                                              while($row = $result->fetch_assoc()) {
                                                                                                echo $row["serialnumber"];          
                                                                                                }    
                                                                                              }
                                                                                              else {       
                                                                                              } 
                                                                                              ?>"style="width: 195%" hidden>
        
      </div>
      
    </div>


    <div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" name="birthmonth" id="birthmonth" placeholder="MM" required>  
          </div>
          <div class="col-third">
            <input type="text" name="birthday" id="birthday" placeholder="DD" required>
          </div>
          <div class="col-third">
            <input type="text" name="birthyear" id="birthyear" placeholder="YYYY"required>
          </div>
        </div>
      </div>

      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <div class="col-twothirds">
          <select name="sex" id="sex" class="form-control" style="width: 246px; height: 54px;" required>
              <option value="" selected="selected" disabled="disabled">-- select one --</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
  </select>

        </div>
      </div>
    </div>

<div class="row">
      <div class="col-half" style="margin-left: 15px; width: 255px;">

        <h4>Date of Request</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" name="requestmonth" id="requestmonth" placeholder="MM" required>
          </div>
          <div class="col-third">
            <input type="text" name="requestday" id="requestday" placeholder="DD" required>
          </div>
          <div class="col-third">
            <input type="text" name="requestyear" id="requestyear" placeholder="YYYY" required>
          </div>
        </div>
      </div>
      
      <div class="col-half">
        <h4>Hospital</h4>                                                                                      
        <div class="input-group">
        <input class = "form-group" type="text" name="hospital" id="hospital" value=""style="width: 118%" >
        </div>
      </div>                                                                                     
      
      
      <div class="col-half">
        <div class="input-group">
        <input class = "form-group" type="text" name="bloodtype" id="bloodtype" value="<?php $idblood = $_GET['idblood']; $sql = "SELECT * FROM blood WHERE idblood = '$idblood' "; $result = $conn->query($sql);
                                                                                        if ($result->num_rows > 0) {
                                                                                        // output data of each row
                                                                                        while($row = $result->fetch_assoc()) {
                                                                                          echo $row["bloodtype"]; 
                                                                                          }    
                                                                                        }
                                                                                        else {                                                                                         
                                                                                        }                                                                                                                                                                        
                                                                                        ?>"style="width: 118%" hidden>
        </div>
      </div>

                <input class = "form-group" type="text" name="component" id="component" value="<?php $idblood = $_GET['idblood']; $sql = "SELECT * FROM blood WHERE idblood = '$idblood' "; $result = $conn->query($sql);
                                                                                        if ($result->num_rows > 0) {
                                                                                        // output data of each row
                                                                                        while($row = $result->fetch_assoc()) { 
                                                                                          echo $row["component"];                                                                                   
                                                                                          }    
                                                                                        }
                                                                                        else {                                                                                          
                                                                                        }                                                                                      
                                                                                        ?>"style="width: 116%" hidden>
                
                <input class = "form-group" type="text" name="units" id="units" value="<?php $idblood = $_GET['idblood']; $sql = "SELECT * FROM blood WHERE idblood = '$idblood' "; $result = $conn->query($sql);
                                                                                        if ($result->num_rows > 0) {
                                                                                        // output data of each row
                                                                                        while($row = $result->fetch_assoc()) {      
                                                                                          echo $row["quantity"];                                                                                        
                                                                                          }    
                                                                                        }
                                                                                        else {                                                                                         
                                                                                        }                                                                                                                                                                              
                                                                                        ?>"style="width: 100%" hidden>
                
      
</div>

    <div class="row">
        <div class="col-half" style="margin-left: 15px; width: 255px;">
          <h4>Room No.</h4>
          <div class="form-group-2">
              <input type="Text" name="roomnum"id="roomnum" placeholder="Room No." required>
          </div>
        </div>
        <div class="col-half" style="width: 245px">
          <h4>Age</h4>
          <div class="form-group-2">
            <input type="text" name="age" id="age" placeholder="Age" required>
          </div>
      </div>
    </div>



    <div class="row">
        <h4 style="margin-left: 2%;">Telephone No.</h4>
        <div>
           <input class = "form-group" type="text" name="cellphonenum" id="cellphonenum" placeholder="Tel No." required style="margin-left: 2%;margin-right: 2%;width: 94%;">
        </div>
    </div>

<div class="row">
  <h4 style="margin-left: 2%;">Attending Physician</h4>
    <div>
        <input class = "form-group" type="text" name="physician" id="physician" placeholder="Attending Physician" required style="margin-left: 2%;margin-right: 2%;width: 94%;">   
    </div>
</div>

<div class="row">
  <h4>Clinical Diagnosis</h4>
      <div class="input-group input-group-icon">
        <input class = "form-group"  type="message" name="diagnosis" id="diagnosis" placeholder="Clinical Diagnosis" required>
        <div class="input-icon"><i class="fa fa-stethoscope"></i></div>
      </div>
</div>

<div class="row">
    <div>
        <input class = "form-group" type="text" name="city" id="city" value="<?php $idblood = $_GET['idblood']; $sql = "SELECT * FROM blood WHERE idblood = '$idblood' "; $result = $conn->query($sql);
                                                                                        if ($result->num_rows > 0) {
                                                                                        // output data of each row
                                                                                        while($row = $result->fetch_assoc()) {      
                                                                                          echo $row["city"];                                                                                        
                                                                                          }    
                                                                                        }
                                                                                        else {                                                                                         
                                                                                        }                                                                                                                                                                              
                                                                                        ?>" hidden style="margin-left: 2%;margin-right: 2%;width: 94%;">   
    </div>
</div>
<br>

<center><div class="g-recaptcha" name="captcha" data-sitekey="6LfIoXsUAAAAALXHdXSwMTD1znd_o419bnCP0R3E"></div></center>
<button class="button" type="submit" name="request" id="request"> REQUEST</button>

</div>


</form>

<script src='https://www.google.com/recaptcha/api.js'></script>

<div class="footer"> 
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
  
  <!-- JavaScript for enable/disable button-->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script> -->
    <!-- <script  src="js/index.js"></script> -->
</body>
  
  <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="assets/js/snbutton.js"></script>
  <script>
     $().ready(function(){
         SNButton.init("request",{
             fields: ["lastname","firstname","middlename","birthmonth","birthday","birthyear","sex","requestmonth","requestday","requestyear","bloodtype","component","units","hospital","roomnum","age","cellphonenum","physician","diagnosis","city","captcha"],
             enabletext: "Request",
             disabletext: "Please input all the required fields"
         })
     })
  </script>

</html>

 <script src="assets/js/formvalidation.js"></script>

  
