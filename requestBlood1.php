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
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Request - Project Blood Seeker</title>
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
                        <li><a class="is-active" href="request.html">REQUEST</a></li>
                        <li><a href="donate.html">DONATE</a></li>
                        <li><a href="admin/admin_login.php">ADMIN</a></li>
                        <li><a href="admin/admin_login.html" class="login">LOG-IN</a></li>
                    </ul>
                  

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->


   
 <h1>REQUEST BLOOD</h1>



<!-- Form Name -->

<!-- Text input-->
<center>
<form action="" method="POST">
<label>Complete Name</label>

<div class="form-inline">
        <div class="form-group">
          <div class="col-4">
            <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
        </div>
      </div>
        <div class="form-group">
          <div class="col-4">
            <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
        </div>
      </div>
           <div class="form-group">
            <div class="col-4">
            <input type="text" class="form-control" name="middlename" placeholder="Middle Name" required>
        </div>
      </div>
        </div>

</center>
<br>
 <center>
<div class="form-inline" >
        <div class="form-group">

<label>Age</label>
          <div class="col-4"> 
           <input type="text" name="age" class="form-control" required>
        </div>
<br>

      </div>
      </div>
<div class="form-inline">
        <div class="form-group">
          <label>Birh Date</label>
          <div class="col-4">
            <input type="date" class="form-control" name="birthdate" placeholder="Birth Date" required>
        </div>
</div>

<div class="form-group">
            <label>Sex</label>
            <div class="col-4">
            <select type="text" name="sex" class="form-control" required>
              <option value="M">M</option>
              <option value="F">F</option>
          </select>
        </div>
</div>

<div class="form-group">
          <label>Hospital</label>
          <div class="col-4">
            <input type="text" class="form-control" name="hospital" placeholder="Hospital" required>
        </div>
      </div>
</div>

<br>
<div class="form-inline">
        
        <div class="form-group">
          <label>Tel. No</label>
          <div class="col-4">
            <input type="text" class="form-control" name="cellphonenum" placeholder="Cellphone No." required>
        </div>
      </div>
           <div class="form-group">
          <label>Room No.</label>
            <div class="col-4">
            <input type="text" class="form-control" name="roomnum" placeholder="Room No." required>
        </div>
      </div>
      <div class="form-group">
          <label>Attending Physician</label>
            <div class="col-4">
            <input type="text" class="form-control" name="physician" placeholder="Physician" required>
        </div>
      </div>


    </div>
    <br>
<div class="form-inline">
        
      
          <label>Clinical Diagnosis</label>
          <div class="col-4">
            <textarea type="message" class="form-control" name="diagnosis" placeholder="Clinical Diagnosis" required></textarea>
        </div>
    
</div>

<div class="form-group">
  <label class="col-4 control-label"></label>
  <div class="col-4">
    <button class="btn btn-primary" type="submit" name="request">Request</button>
  </div>
</div>


</form>
</center>




  
    
      


    

<!--


<div class="form-group">
  <label class="col-md-4 control-label" >Age</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></i></span>
  <input name="reqage" id="reqage" placeholder="Age" class="form-control"  type="text" required>
  <span class="error_form" id="reqage_error_message"></span>
    </div>
  </div>
</div>
<div>
    <div class="form-group">
  <label class="col-md-4 control-label" >Birth Date</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></i></span>
  <input name="reqbdate" id="reqbdate" placeholder="Birth Date" class="form-control"  type="date" required>
  <span class="error_form" id="reqbdate_error_message"></span>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" >Sex</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></i></span>
  <select name="reqsex" id="reqsex" id="bloodtype" class="form-control" required>
              <option value="">Sex</option>
              <option value="Ozamiz-">Male</option>
              <option value="Oroquieta">Female</option>
  </select>
  <span class="error_form" id="reqsex_error_message"></span>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Hospital</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></i></span>
  <input name="hospital" id="hospital" placeholder="Hospital" class="form-control"  type="text" required>
  <span class="error_form" id="hospital_error_message"></span>
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" >Room No</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></i></span>
  <input name="roomno" id="roomno" placeholder="Room No" class="form-control"  type="text" required>
  <span class="error_form" id="roomno_error_message"></span>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Tel No</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></i></span>
  <input name="reqtelno" id="reqtelno" placeholder="Tel No" class="form-control"  type="Text" required>
  <span class="error_form" id="reqtelno_error_message"></span>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Blood type</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></i></span>
 <select name="bloodtype" id="bloodtype" class="form-control" required>
              <option value="">Blood Type</option>
              <option value="O-">O-</option>
              <option value="O+">O+</option>
              <option value="O">O</option>
              <option value="A-">A-</option>
              <option value="A+">A+</option>
              <option value="A">A</option>
              <option value="B-">B-</option>
              <option value="B+">B+</option>
              <option value="O">O</option>
              <option value="AB-">AB-</option>
              <option value="AB+">AB+</option>
              <option value="AB">AB</option>
 </select>
 <span class="error_form" id="bloodtype_error_message"></span>
    </div>
  </div>
</div>


<div class="form-group">

  <label class="col-md-4 control-label" >Attending Physician</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></i></span>
  <input name="last_name" placeholder="Atteding Physician" class="form-control"  type="Text">

    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Clinical Diagnosis</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"></i></span>
  <input name="last_name" placeholder="Clinical Diagnosis" class="form-control"  type="Text">


    </div>
  </div>
</div>

<div>
    
</div>

<center>
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-primary" >Request</button>
  </div>
</div>
</center>
</form>
</div>
    </div><!-- /.container -->


<!-->



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
