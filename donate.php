<?php
session_start();
include 'assets/lib/login.php';
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
        <link rel="stylesheet" href="assets/css/style.css">

        
        <!-- Modernizr -->
        <!-- <script src="assets/js/modernizr-2.6.2.min.js"></script>
         -->
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
                        <b class='navbar-text'>
                      
                        <?php 
                                if(isset($_SESSION['username'])){
                                  echo $_SESSION['username'];
                                 
                                }
                                else{ 
                                  echo "Session not set";
                                  
                                }
                              ?>
                              </b>  
                              <li><a href='admin/logout.php'><span class='glyphicon glyphicon-log-out'></span> Log-out</a></li>              
                        </ul>
                      </div>
                    </div>
                  </nav>
<?php
if(!empty($_POST)){       
        $_SESSION["reload"] = "1";
        
        $birthday = $_POST['birthday'];
        $birthmonth = $_POST['birthmonth'];
        $birthyear = $_POST['birthyear'];

        $_POST["birthdate"] = $birthday."-".$birthmonth."-".$birthyear;

        $sql = "INSERT INTO donate_blood (lastname, firstname, middlename, age, birthdate, sex, nationality, civilstatus, education, occupation, cellphonenum, email, identificationno, bloodbank, homeaddress)
                VALUES ('".$_POST["lastname"]."','".$_POST["firstname"]."','".$_POST["middlename"]."','".$_POST["age"]."','".$_POST["birthdate"]."','".$_POST["sex"]."','".$_POST["nationality"]."','".$_POST["civilstatus"]."','".$_POST["education"]."','".$_POST["occupation"]."','".$_POST["contactnum"]."','".$_POST["email"]."','".$_POST["bloodbank"]."','".$_POST["identificationno"]."','".$_POST["address"]."')";

        if ($conn->query($sql) == TRUE) {
          echo "<script type='text/javascript'>alert('Donate Successfull ');</script>";
          } else {
          echo "<script type='text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
          }
          
          $conn->close();
}

?>
 <div class="container">
  <form method="post" action="">
   <strong><center><h2>DONOR'S INFORMATION</h2></center> </strong>
    <div class="row">
      <div class="input-group input-group-icon">
        <input type="text" class="form-group"  name="lastname" placeholder="Last Name" required>
        <div class="input-icon"><i class="fa fa-user"></i></div>
        </div>
        <div class="input-group input-group-icon">
        <input type="text" class="form-group"   name="firstname" placeholder="First Name" required>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" class="form-group"  name="middlename"  placeholder="Middle Name" required>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" name="birthday" placeholder="DD" required>
          </div>
          <div class="col-third">
            <input type="text" name="birthmonth" placeholder="MM" required>
          </div>
          <div class="col-third">
            <input type="text"  name="birthyear" placeholder="YYYY" required>
          </div>
        </div>
      </div>

      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <div class="col-twothirds">
          <select name="sex" class="form-control" style="width: 246px; height: 54px;" required>
              <option value="" selected="selected" disabled="disabled">-- select one --</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
  </select>

        </div>
      </div>
    </div>

<div class="col-half">
        <h4>Civil Status</h4>
        <div class="input-group">
          <div class="col-twothirds">
          <select name="civilstatus" class="form-control" style="width: 246px; height: 54px;" required>
              <option value="" selected="selected" disabled="disabled">-- select one --</option>
              <option value="Single">Single</option>
              <option value="Married">Married</option>
  </select>

        </div>
      </div>
    </div>

      <div class="col-half">
        <h4>Age</h4>
        <div class="form-group-2">
        <input type="text" name="age" placeholder="Age" required>
        </div>
      </div>
    </div>


     <div class="row">
     <h4>Address</h4>
       <div class="form-group-2">
        <input type="text" name="address" placeholder="Address" required>
        </div>
      <div class="col-half">
        <h4>Email Address</h4>
        <div class="form-group-2">
           <input type="text" name="email" placeholder="Email Address." required>
        </div>
      </div>
       <div class="col-half">
        <h4>Nationality</h4>
        <div class="form-group-2">
        <input type="text" name="nationality" placeholder="Nationality" required>
        </div>
      </div>
    </div>
   <div class="row">
      <div class="col-half">
        <h4>Education</h4>
        <div class="form-group-2">
        <select name="education" class="form-control" style="width: 246px; height: 54px;" required>
        <option value="" selected="selected" disabled="disabled">-- select one --</option>
        <option value="No formal education">No formal education</option>
        <option value="Primary education">Primary education</option>
        <option value="Secondary education">Secondary education or high school</option>
        <option value="GED">GED</option>
        <option value="Vocational qualification">Vocational qualification</option>
        <option value="Bachelor's degree">Bachelor's degree</option>
        <option value="Master's degree">Master's degree</option>
        <option value="Doctorate or higher">Doctorate or higher</option>
        </select>
        </div>
      </div>
       <div class="col-half">
        <h4>Work</h4>
        <div class="form-group-2">
        <input type="text" name="occupation" placeholder="Work" required>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-half">
        <h4>Contact No.</h4>
        <div class="form-group-2">
           <input type="text" name="contactnum" placeholder="Telephone No." required>
        </div>
      </div>
       <!-- <div class="col-half">
        <h4>Cellphone No.</h4>
        <div class="form-group-2">
        <input type="Text" placeholder="Cellphone No."/>
        </div>
      </div>
    </div> -->
    <div class="row">
        <h4>Blood Bank</h4>
        <div class="form-group-2">
          <div class="form-group-twothirds"> 
          <select name="bloodbank" class="form-control" style="width: 246px; height: 54px;" required>
              <option value="" selected="selected" disabled="disabled">-- select one --</option>
              <option value="Oroquieta City">Oroquieta City</option>
              <option value="Ozamiz City">Ozamiz City</option>
              <option value="Tangub City">Tangub City</option>
          </select>
        </div>
      </div>
    </div>

  <div class="col-half">
     <h4>Valid ID no.</h4>
       <div class="form-group-2">
        <input type="text" name="identificationno" placeholder="ID no." required>
        </div>
  </div>

      <button class="button"> DONATE</button>
    </form>
</div>

<!-- <div class="footer"> 
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
</div> -->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <!-- <script  src="js/index.js"></script> -->




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
