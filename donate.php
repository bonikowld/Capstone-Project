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

        $sql = "INSERT INTO donate_blood (identificationno, lastname, firstname, middlename, age, birthdate, sex, religion, nationality, education, occupation, cellphonenum, email, bloodbank)
                VALUES ('".$_POST["identificationno"]."','".$_POST["lastname"]."','".$_POST["firstname"]."','".$_POST["middlename"]."','".$_POST["age"]."','".$_POST["birthdate"]."','".$_POST["sex"]."','".$_POST["religion"]."','".$_POST["nationality"]."','".$_POST["education"]."','".$_POST["occupation"]."','".$_POST["cellphonenum"]."','".$_POST["email"]."','".$_POST["bloodbank"]."')";

        if ($conn->query($sql) == TRUE) {
          echo "<script type='text/javascript'>alert('Donate Successfull ');</script>";
          } else {
          echo "<script type='text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
          }
          
          $conn->close();
}
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Donate - Project Blood Seeker</title>
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
        
        <!-- <style>
          .error{
           color:red
          }
        </style> -->

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
                          <li><a href="request.php">Request</a></li>
                          <li class="active"><a href="donate.php">Donate</a></li>

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


 <div class="container">
  <form>
   <strong><center><H2>PATIENT INFORMATION</H2></center> </strong>
    <div class="row">
      <div class="input-group input-group-icon">
        <input class="form-group" type="text" placeholder="Last Name"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
        </div>
        <div class="input-group input-group-icon">
        <input class="form-group"  type="text" placeholder="First Name"/>
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
        <h4>Civil Status</h4>
        <div class="btn-group">
    <button  type="button" class="btn btn-default" style="
    width: 123px;
    height: 54px;">Single</button>
    <button type="button" class="btn btn-default" style="
    width: 123px;
    height: 54px;">Married</button>
  </div>
      </div>
      <div class="col-half">
        <h4>Age</h4>
        <div class="form-group-2">
        <input type="Text" placeholder="Age"/>
        </div>
      </div>
    </div>


     <div class="row">
     <h4>Address</h4>
       <div class="form-group-2">
        <input type="text" placeholder="Address"/>
        </div>
      <div class="col-half">
        <h4>Email Address</h4>
        <div class="form-group-2">
           <input type="text" placeholder="Email Address."/>
        </div>
      </div>
       <div class="col-half">
        <h4>Nationality</h4>
        <div class="form-group-2">
        <input type="Text" placeholder="Nationality"/>
        </div>
      </div>
    </div>
   <div class="row">
      <div class="col-half">
        <h4>Education</h4>
        <div class="form-group-2">
           <input type="text" placeholder="Room No."/>
        </div>
      </div>
       <div class="col-half">
        <h4>Work</h4>
        <div class="form-group-2">
        <input type="Text" placeholder="Work"/>
        </div>
      </div>
    </div>

      <div class="row">
      <div class="col-half">
        <h4>Telephone No.</h4>
        <div class="form-group-2">
           <input type="text" placeholder="Telephone No."/>
        </div>
      </div>
       <div class="col-half">
        <h4>Cellphone No.</h4>
        <div class="form-group-2">
        <input type="Text" placeholder="Cellphone No."/>
        </div>
      </div>
    </div>

  <div class="row">
     <h4>Identification No.</h4>
       <div class="form-group-2">
        <input type="text" placeholder="Id No."/>
        </div>
</div>
   

<button class="button"> DONATE</button>
    </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>





    <!--  Scripts
    ================================================== -->

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>

    <script src="assets/js/formvalidation.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    </body>
</html>
