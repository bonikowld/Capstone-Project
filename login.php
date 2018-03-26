<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Sign-in - Project Blood Seeker</title>
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


    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            

            <div class="navbar-main">
                
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/sadaka-logo.png" alt=""></a> -->
                  
                </div>
            
                <div id="navbar" class="navbar-collapse collapse pull-right">

                  
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="search.php">SEARCH</a></li>
                        <li><a href="request.html">REQUEST</a></li>
                        <!-- class="is-active" -->
                        <li><a href="donate.html">DONATE</a></li>
                        <li><a href="admin/admin_login.php">ADMIN</a></li>
                        <li><a href="login.php" class="is-active">LOG-IN</a></li>
                    </ul>
                  

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->
	<br><br>
    <div class="Registration-main-w3ls">
		<div class="mt-2 text-center">
				<h1 class="header-w3ls">
					Sign in to access your Account
				</h1>
		</div>
		<br>
		<form action="#" method="post">

			<div class="main">
					<div class="form-left-to-w3l">
						<h4 class="reg">Username or Email</h4><br>
						<input type="text" name="username" id="username" required="" placeholder="Username/Email" required="">
					</div>
					<div class="form-right-to-w3ls ">
						<h4 class="reg">Password</h4><br>
						<input type="password" name="cpassword" placeholder="Password" required="">
					</div>
			</div>
			
			<div class="btnn">
				<button type="submit" class="btn btn-danger btn-block">Login</button><br>
			</div>

		</form>

		<br>
		<h4 class="text-center">
				Don't have an account yet? <a class="link" href="register.html">Sign Up Now</a></label>
		</h4>


		<div class="clear"></div>



	</div>
	<div class="footer">
		<p>&copy;Donor Login</p>
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
