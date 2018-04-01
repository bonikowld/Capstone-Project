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

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

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
                          <b class="navbar-text"><span class="glyphicon glyphicon-user"></span> WELCOME
                           <?php 
                                if(isset($_SESSION['username'])){
                                  echo $_SESSION['username'];
                                }
                                else{ echo 'Session not set';
                                }
                              ?>
                              </b>
                              <li><a href="admin/logout.php"><span class="glyphicon glyphicon-log-out"></span> Log-out</a></li>                       
                        </ul>
                      </div>
                    </div>
                  </nav>


        <div class="container">
<form action="" method="POST">
   <center><h1>Donate Blood</h1></center>

   <div class="row">
      
      <h4>Identification Number</h4>
      <div class="input-group-icon">
        <input name="identificationno" id="idNo" placeholder="Identification No." type="text">
      <div class="input-icon fa fa-user"></i></div>
      </div>

   </div>
   <br>
   <div class="row">

      <h4>Name</h4>
      <div class="input-group-icon">
        <input  name="lastname" id="last_name" placeholder="Last Name" type="text" required>
        <div class="input-icon fa fa-user"></i></div>
      </div>

      <div class="input-group-icon">
        <input name="firstname" id="first_name" placeholder="First Name" type="text" required>
        <div class="input-icon fa fa-user"></div>
      </div>

      <div class="input-group-icon">
        <input name="middlename" id="middle_name" placeholder="Middle Name" type="text" required>
        <div class="input-icon fa fa-user"></div>
      </div>

   </div>

    <div class="row">

      <div class="col-half">
        <h4>Age</h4>
        <div class="input-group">
            <input name="age" id="age" placeholder="Age" type="type" required>
        </div>
      </div>

      <div class="col-half">
        <h4>Date of Birth</h4>
        <div class="input-group">
            <input name="birthdate" id="bdate" placeholder="Birth Date"  type="date" required>
        </div>
      </div>

    </div>


    <div class="row">

      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <input type="radio" name="sex" value="Male" id="gender-male"/>
          <label for="gender-male">M</label>
          <input type="radio" name="sex" value="Female" id="gender-female"/>
          <label for="gender-female">F</label>
        </div>
      </div>

      <div class="col-half">
        <h4>Religion</h4>
        <div class="input-group">
           <input name="religion" id="religion" placeholder="Religion" type="text">
        </div>
      </div>
    </div>


     <div class="row">

      <div class="col-half">
        <h4>Nationality</h4>
        <div class="input-group">
            <input name="nationality" id="nationality" placeholder="Nationality" type="text">
        </div>
      </div>
      
      <div class="col-half">
        <h4>Education</h4>
        <div class="input-group">
           <input name="education" id="education" placeholder="Education" type="text">
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col-half">
        <h4>Occupation</h4>
        <div class="input-group">
            <input name="occupation" id="occupation" placeholder="Occupation" type="text">
        </div>
      </div>
      
      <div class="col-half">
        <h4>Cellphone No.</h4>
        <div class="input-group">
           <input name="cellphonenum" id="cel_no" placeholder="Cellphone No." type="text" required>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col-half">
        <h4>Email Address</h4>
        <div class="input-group">
            <input name="email" id="email_add" placeholder="Email Address" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
        </div>
      </div>
      
      <div class="col-half">
        <h4>Blood Bank</h4>
        <div class="input-group">
           <input name="bloodbank" id="bloodbank" placeholder="Blood Bank" type="email" required>
        </div>
      </div>

    </div>

        <button class="button" type="submit" name="donate">SUBMIT</button>
    </div>
</form>
    </div><!-- /.container -->






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
