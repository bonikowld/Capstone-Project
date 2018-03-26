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
        <link rel="stylesheet" href="assets/css/style.css">
        
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
                        <li><a class="is-active" href="request.php">REQUEST</a></li>
                        <li><a href="donate.php">DONATE</a></li>
                        <li><a href="admin/admin_login.php">LOG-IN</a></li>

                    </ul>
                  

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->


        <center>
 <h1>DONATE BLOOD</h1>

        <div class="w3-container w3-teal">

<form class="form-horizontal" action=" "  method="post" id="contact_form">

<!-- Form Name -->

<!-- Text input-->

 <div class="form-group">
    <label class="col-md-4 control-label" >Identification No.</label> 
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
    <span class="input-group-addon"></i></span>
    <input name="identificationno" id="idNo" placeholder="Identification No." class="form-control"  type="text">
    <span class="error_form" id="idNo_error_message"></span>
      </div>
    </div>
  </div>

<div class="form-group">
  <label class="col-md-4 control-label">Last Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"></i></span>
  <input  name="lastname" id="last_name" placeholder="Last Name" class="form-control"  type="text" required>
  <span class="error_form" id="lname_error_message"></span>
    </div>
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" >First Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></span>
  <input name="firstname" id="first_name" placeholder="First Name" class="form-control"  type="text" required>
  <span class="error_form" id="fname_error_message"></span>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Middle Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></i></span>
  <input name="middlename" id="middle_name" placeholder="Middle Name" class="form-control"  type="text" required>
  <span class="error_form" id="mname_error_message"></span>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Age</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></i></span>
  <input name="age" id="age" placeholder="Age" class="form-control"  type="type" required>
  <span class="error_form" id="age_error_message"></span>
    </div>
  </div>
</div>
<div>
  
<div class="form-group">
  <label class="col-md-4 control-label" >Birth Date</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></i></span>
  <input name="birthdate" id="bdate" placeholder="Birth Date" class="form-control"  type="date" required>
  <span class="error_form" id="bdate_error_message"></span>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Sex</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></i></span>
  <select name="sex" id="sex" id="sex" class="form-control" required>
              <option value="">Sex</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
  </select>
  <span class="error_form" id="sex_error_message"></span>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Religion</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></i></span>
  <input name="religion" id="religion" placeholder="Religion" class="form-control"  type="text">
  <span class="error_form" id="religion_error_message"></span>
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" >Nationality</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></i></span>
  <input name="nationality" id="nationality" placeholder="Nationality" class="form-control"  type="text">
  <span class="error_form" id="nationality_error_message"></span>
    </div>
  </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" >Education</label> 
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
    <span class="input-group-addon"></i></span>
    <input name="education" id="education" placeholder="Education" class="form-control"  type="text">
    <span class="error_form" id="education_error_message"></span>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" >Occupation</label> 
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
    <span class="input-group-addon"></i></span>
    <input name="occupation" id="occupation" placeholder="Occupation" class="form-control"  type="text">
    <span class="error_form" id="occupation_error_message"></span>
      </div>
    </div>
  </div>

<!-- <div class="form-group">
  <label class="col-md-4 control-label" >Telephone No</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></i></span>
  <input name="tel_no" id="tel_no" placeholder="Telephone No." class="form-control"  type="text" required>
  <span class="error_form" id="telno_error_message"></span>
    </div>
  </div>
</div> -->

<div class="form-group">
    <label class="col-md-4 control-label" >Cellphone No</label> 
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
    <span class="input-group-addon"></i></span>
    <input name="cellphonenum" id="cel_no" placeholder="Cellphone No." class="form-control"  type="text" required>
    <span class="error_form" id="celno_error_message"></span>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" >Email Address</label> 
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
    <span class="input-group-addon"></i></span>
    <input name="email" id="email_add" placeholder="Email Address" class="form-control"  type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
    <span class="error_form" id="email_error_message"></span>
      </div>
    </div>
  </div>

  
  <div class="form-group">
    <label class="col-md-4 control-label" >Blood Bank</label> 
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
    <span class="input-group-addon"></i></span>
    <input name="bloodbank" id="bloodbank" placeholder="Blood Bank" class="form-control"  type="email" required>
    <span class="error_form"  id="mname_error_message"></span>
      </div>
    </div>
  </div>

<div class="form-group">
  <label class="col-md- control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-primary" name="donate" >Submit</button>
  </div>
</div>

</form>
</div>
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
