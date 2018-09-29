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
if(isset($_POST['register'])){
		
		    $birthday = $_POST['day'];
        $birthmonth = $_POST['month'];
        $birthyear = $_POST['year'];

        $_POST["birthdate"] = $birthday."-".$birthmonth."-".$birthyear;

$sql = "INSERT INTO users (lastname, firstname, middlename, dateofbirth, contactnum, homeaddress, username, pass, email)
                VALUES ('".$_POST["lastname"]."','".$_POST["firstname"]."','".$_POST["middlename"]."','".$_POST["birthdate"]."','".$_POST["cellphonenum"]."','".$_POST["homeaddress"]."','".$_POST["username"]."','".$_POST["pass"]."','".$_POST["email"]."')";

if ($conn->query($sql) == TRUE) {
	echo "<script type='text/javascript'>alert('Sign-Up Successfull');</script>";
	} else {
	echo "<script type='text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
	}
	
	$conn->close();

}
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Donate - Project Blood Seeker</title>
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
        <link rel="stylesheet" href="assets/css/stylerequest.css">
        
        <!-- Modernizr -->
		<script src="assets/js/modernizr-2.6.2.min.js"></script>
		
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
                          <li><a href="search.php">Search</a></li>
                          <li><a href="request.php">Request</a></li>
                          <li class="active"><a href="donate.php">Donate</a></li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                      </div>
                    </div>
                  </nav>

    <div class="container" style="
    margin-top: 2%;
    margin-bottom: 5%;
    color:#801800;
">
  <form method="post" action="" >
   <strong><center><H2>REGISTRATION FORM</H2></center> </strong>

 <strong><center><H3>PERSONAL INFORMATION</H3></center> </strong>
    <div class="form-group row">

      <div class="input-group input-group-icon">
        <input class = "form-group" type="text" name="lastname" id="lname" placeholder="Last Name" required> 
        <div class="input-icon"><i class="fa fa-user"></i></div>

        </div>


        <div class="input-group input-group-icon">
        <input class="form-group" type="text" name="firstname" id="fname" placeholder="First Name" required>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>


      <div class="input-group input-group-icon">
        <input class="form-group" type="text" name="middlename" id="mname" placeholder="Middle Name" required>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>

    </div>


    <div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" name="day" id="day" placeholder="DD" required>
          </div>
          <div class="col-third">
            <input type="text" name="month" id="month" placeholder="MM" required>
          </div>
          <div class="col-third">
            <input type="text" name="year" id="year" placeholder="YYYY" required>
          </div>
        </div>
      </div>

      <div class="col-half">
        <h4>Contact No</h4>
       <div class="form-group-2">
            <input type="Text" name="cellphonenum" id="contactno" placeholder="Contact No" required>
        </div>
    </div>
</div>


<div class="row">
  <h4>Complete Address</h4>
        <input class = "form-group-2" type="text" name="homeaddress"  id="address" placeholder="Complete Address" required>
    </div>

 <strong><center><H3>LOG-IN INFORMATION</H3></center> </strong>
 <div class="form-group row">

      <div class="input-group input-group-icon">
        <input class = "form-group" type="text" name="username"  id="username" placeholder="Username" required>
        <div class="input-icon"><i class="fa fa-user"></i></div>

        </div>


        <div class="input-group input-group-icon">
        <input class="form-group" type="text" name="email" id="emailadd" placeholder="Email Address" required>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>


      <div class="input-group input-group-icon">
        <input class="form-group" type="password" name="pass" id="pass" placeholder="Password" required>
        <div class="input-icon"><i class="fa fa-lock"></i></div>
      </div>

    </div>
 

<button type="submit" class="button" name="register"> REGISTER NOW</button>
<h4 class="text-center">
				Already have an account? <a class="link" href="index.php">Login Now</a>
		</h4>
    </div>


</form>
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


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>




</body>

</html>


    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>

    <script src="assets/js/regformvalidation.js"></script>

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
