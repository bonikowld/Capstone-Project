<?php
        session_start();   
        include 'assets/lib/login.php';
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Home - Project Blood Seeker</title>
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
                          <li class="active"><a href="index.php">Home</a></li>
                          <li><a href="search.php">Search</a></li>
                          <li><a href="request.php">Request</a></li>
                          <li>
                            <?php
                                    if(isset($_SESSION['username'])){
                                        echo "<li><a href='donate.php'>Donate</a></li>";
                                    
                                    }
                                    else{
                                        echo "<a data-toggle='modal' data-target='#loginModal'>Donate</a></li>";
                                    }
                            ?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <!-- <li><a href="register.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
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

    <!-- Carousel
    ================================================== -->
   
         <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome to Blood Seeker</div>
          <div class="intro-heading text-uppercase">Want to Donate Blood?</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" data-toggle='modal' data-target='#loginModal'>Donate Now</a>
        </div>
      </div>
    </header>


   

<div class="row">
  <div class="column">
    <h2>Mission</h2>
    <p>The Philippine National Red Cross brings timely, 
    effective and compassionate humanitarian assistance 
  for the most vulnerable without consideration of nationality,</p>
  </div>
 <div class="column">
    <h2>Vision</h2>
    <p>Vision The Philippine Red Cross will be the foremost humanitarian organization in the Philippines, in services provided and number of people served.</p>
  </div>
  <div class="column">
    <h2>Red Cross Youth</h2>
    <p>The Red Cross Youth is one of the six major services of the Philippine Red Cross. Its mission is to educate and empower the children and youth in the spirit of Red Cross</p>
  </div>
</div>
<div class="row">
  <div class="column2">
   <button class="btn btn-default hidden-print"  name="readmore"  data-toggle="modal" href="#readmore1"> Read More</button>
  </div>
  <div class="column2">
     <button class="btn btn-default hidden-print"  name="readmore" data-toggle="modal" href="#readmore2"> Read More</button>
  </div>
  <div class="column2">
    
    <button class="btn btn-default hidden-print"  name="readmore" data-toggle="modal" href="#readmore3"> Read More</button>
  </div>
</div>

<div class="row">
  <div class="column3">
  <img src="assets/avatar/img_avatar.png" alt="Avatar" style="width:200px">
  <h2>OROQUIETA CITY OFFICE</h2>
   <p><span class="glyphicon glyphicon-map-marker"></span> Philippine Red Cross Capitol Compound Oroquieta City Misamis Occidental Philippines</p>
     <p><span class="glyphicon glyphicon-earphone">  (088) 531-1068 </p>
  </div>
  <div class="column3">
       <img src="assets/avatar/img_avatar.png" alt="Avatar" style="width:200px">
       <h2>OZAMIZ CITY OFFICE</h2>
    <p><span class="glyphicon glyphicon-map-marker"></span> S.M. Lao Hospital Compound, Manabay, Ozamis City, 7200, Misamis Occidental</p>
     <p><span class="glyphicon glyphicon-earphone"> (088) 521 3837 </p>
  </div>
  <div class="column3">
    
      <img src="assets/avatar/img_avatar.png" alt="Avatar" style="width:200px">
      <h2>TANGUB CITY OFFICE</h2>
   <p><span class="glyphicon glyphicon-map-marker"></span> Philippine Red Cross, City Hall Drive, Tangub City, Misamis Occidental </p>
    <p><span class="glyphicon glyphicon-earphone"> (088) 395 3162 </p>


  </div>
</div>


  <!-- Modal login-->
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
                        <input type="text"  name="username"  class="form-control" required>
                        <label>Password</label>
                        <input type="password"  name="pass" class="form-control" required><br>
                        <button class='btn btn-success' name="signin_btn">Log-in</button>
                        <a href="register.php" class='btn btn-warning'>Sign-Up</a>
                    </form>
                </div>
             
                <!-- <div class="modal-footer">
               </div> -->
                </div>
              </div>
            </div>   

<!-- Modal readmore1-->

<div class="modal fade" id="readmore1"  role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <strong><h2 class="header">RED CROSS MISSION</h2></strong>
              <p>The Philippine National Red Cross brings timely, effective and compassionate</p> <p>humanitarian assistance for the most vulnerable without consideration of</p><p> nationality, race, creed, gender,socialstatus or political belief.</p>
          </div>
        </div>
      </div>
    </div>
<!-- Modal readmore2-->
    <div class="modal fade" id="readmore2" role="dialog" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <strong><h2 class="header">RED CROSS VISION</h2></strong>
              <p>The Philippine Red Cross will be the foremost humanitarian organization in</p><p>thePhilippines, in services provided and number of people served.</p> 
        </div>
      </div>
    </div>
    <div class="modal fade" id="readmore3" role="dialog" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <strong><h2 class="header">RED CROSS YOHTH</h2></strong>
              <p>The Philippine Red Cross will be the foremost humanitarian organization in</p><p>thePhilippines, in services provided and number of people served.</p> 
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
                <a href="#">About the Website</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms and Conditions</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
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
