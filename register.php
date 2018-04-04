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


// TODO - ADD DONOR ACCOUNT QUERY




?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Donate - Project Blood Seeker</title>
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
        <link rel="stylesheet" href="assets/css/registration.css">
        
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
                          <li><a href="request.php">Request</a></li>
                          <li class="active"><a href="donate.php">Donate</a></li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                      </div>
                    </div>
                  </nav>

	<br>
    <div class="Registration-main-w3ls">
			<div class="mt-2 text-center">
					<h1 class="header-w3ls">
						Sign Up to get started
					</h1>
			</div>
			<br>
		<form action="" method="post">
			<p class="content-divider center mt-4"><span>personal information</span></p><br>
			
			<h4 class="reg">Name</h4><br>
			<div class="main">
				<div class="form-left-to-w3l">
					<input type="text" name="lname" id="lname" placeholder="Last Name" required="">
					<span class="form-required" id="lname_error_message"></span>
					<div class="clear"></div>
				</div>
				<div class="form-center-to-w3ls">
					<input type="text" name="fname" id="fname" placeholder="First Name" required="">
					<span class="form-required" id="fname_error_message"></span>
					<div class="clear"></div>
				</div>
				<div class="form-right-to-w3ls">
					<input type="text" name="mname" id="mname" placeholder="Middle Name" required="">
					<span class="form-required" id="mname_error_message"></span>
					<div class="clear"></div>
				</div> 
			</div>
			
			<h4 class="reg">Date of Birth</h4><br>
			<div class="main">
				<div class="form-left-to-w3l">
					        <input type="text" name="day" id="day" placeholder="DD" required="">
							<span class="form-required" id="day_error_message"></span>
				</div>
				<div class="form-center-to-w3ls">
					        <input type="text" name="month" id="month" placeholder="MM" required="">
							<span class="form-required" id="month_error_message"></span>
				</div>
				<div class="form-right-to-w3ls">
					        <input type="text" name="year" id="year" placeholder="YYYY" required="">
							<span class="form-required" id="year_error_message"></span>	
				</div>
			</div>
				
				<h4 class="reg">Contact Number</h4><br>
				<div class="form-center-to-w3ls ">
						<input type="text" name="contactnum" id="contactno" placeholder="Phone No./Tel. No." required="">
						<span class="form-required" id="contactno_error_message"></span>
				</div>
			
				<h4 class="reg">Address</h4><br>
				<div class="form-add-to-w3ls add">
						<input type="text" name="address" id="address" placeholder="Complete Address" required="">
						<span class="form-required" id="address_error_message"></span>
						<div class="clear"></div>
				</div>


            <p class="content-divider center mt-4"><span>login information</span></p><br>
            <div class="main">
				<div class="form-left-to-w3l">
					<h4 class="reg">Username</h4><br>
					<input type="text" name="username" placeholder="Username" required="">
				</div>
				<div class="form-right-to-w3ls ">
					<h4 class="reg">Email Address</h4><br>
					<input type="email" name="email" placeholder="Email" required="">
				</div>
			</div>

			<div class="main">
					<div class="form-left-to-w3l">
						<h4 class="reg">Password</h4><br>
						<input type="password" name="password" required="" placeholder="Password" required="">
					</div>
					<div class="form-right-to-w3ls ">
						<h4 class="reg">Confirm password</h4><br>
						<input type="password" name="cpassword" placeholder="Confirm Password" required="">
					</div>
			</div>
			
			<div class="btnn">
				<button type="submit" class="btn btn-danger btn-block" name="register">Register</button><br>
			</div>

		</form>
		<br>
		<h4 class="text-center">
				Already have an account? <a class="link" href="login.php">Login Now</a>
		</h4>


		<div class="clear"></div>



	</div>
	
	<div class="footer">
		<p>&copy;Donor Registration</p>
	</div>






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
