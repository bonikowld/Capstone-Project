<?php
session_start();
include 'assets/lib/login.php';
?>

<?php
  // if (isset($_POST['request'])) {
  //   $lastname = $_POST['lastname'];
  //   $firstname = $_POST['firstname'];
  //   $middlename = $_POST['middlename'];
  //   $age = $_POST['age'];
  //   $birthmonth = $_POST['birthmonth'];
  //   $birthday = $_POST['birthday'];
  //   $birthyear = $_POST['birthyear'];
  //   $sex = $_POST['sex'];
  //   $nationality = $_POST['nationality'];
  //   $civilstatus = $_POST['civilstatus'];
  //   $education = $_POST['education'];
  //   $occupation = $_POST['occupation'];
  //   $contactnum = $_POST['contactnum'];
  //   $address = $_POST['address'];
  //   $email = $_POST['email'];
  //   $identificationno = $_POST['identificationno'];
  //   $bloodbank = $_POST['bloodbank'];
    
    
    
  //   $secretKey = "6LfIoXsUAAAAAPGeftRQh1BfA_GbxBAQVPne8gYf";
  //   $responseKey = $_POST['g-recaptcha-response'];
  //   $userIP = $_SERVER['REMOTE_ADDR'];

  //   $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
  //   $response = file_get_contents($url);
  // }
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Donate - Project Blood Seeker</title>
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/icon.png">
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
        <!-- <script src="assets/js/modernizr-2.6.2.min.js"></script>
         -->
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
                          <!-- <li><a href="request.php">Request</a></li> -->
                          <li class="active"><a href="donate.php">Donate</a></li>
                           <li><a href="assets/lib/loginadmin.php">Admin</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        <b class='navbar-text'>
                            <?php 
                                    // if(isset($_SESSION['username'])){
                                    //   echo $_SESSION['username'];
                                    
                                    // }
                                    // else{ 
                                    //   echo "Session not set";
                                      
                                    // }
                            ?>
                        </b>  
                              <!-- <li><a href='admin/logout.php'><span class='glyphicon glyphicon-log-out'></span> Log-out</a></li>               -->
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

        $sql = "INSERT INTO donate_blood (fullname, age, birthdate, sex, nationality, civilstatus, education, occupation, cellphonenum, email, identificationno, bloodbank, homeaddress)
                VALUES ('".$_POST["fullname"]."','".$_POST["age"]."','".$_POST["birthdate"]."','".$_POST["sex"]."','".$_POST["nationality"]."','".$_POST["civilstatus"]."','".$_POST["education"]."','".$_POST["occupation"]."','".$_POST["contactnum"]."','".$_POST["email"]."','".$_POST["identificationno"]."','".$_POST["bloodbank"]."','".$_POST["address"]."')";

        if ($conn->query($sql) == TRUE) {
          echo "<script type='text/javascript'>alert('Donate Successfull ');</script>";
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
   <strong><center><h2>DONOR'S INFORMATION</h2></center> </strong>
    <div class="row">
        <input type="text" class="form-group"  name="fullname" id="fullname" placeholder="Full Name" required style="width: 100%">
  
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
            <input type="text"  name="birthyear" id="birthyear" placeholder="YYYY" required>
          </div>
        </div>
      </div>

      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <div class="col-twothirds">
          <select name="sex" id="sex" class="form-control" style="width: 255px; height: 54px;" required>
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
          <select name="civilstatus" id="civilstatus" class="form-control" style="width: 246px; height: 54px;" required>
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
        <input type="text" name="age" id="age" placeholder="Age" required>
        </div>
      </div>
    </div>


     <div class="row">
     <h4>Address</h4>
       <div class="form-group-2">
        <input type="text" name="address" id="address" placeholder="Address" required>
        </div>

        <div class="form-group-2">
        <h4>Any Valid ID No.</h4>
        <div class="form-group-2">
           <input type="text" name="identificationno" id="identificationno" placeholder="ID No." required>
        </div>

      <div class="col-half">
        <h4>Email Address</h4>
        <div class="form-group-2">
           <input type="text" name="email" id="email" placeholder="Email Address." required>
        </div>

      </div>
       <div class="col-half">
        <h4>Nationality</h4>
        <div class="form-group-2">
        <input type="text" name="nationality" id="nationality" placeholder="Nationality" required>
        </div>
      </div>
    </div>
   <div class="row">
      <div class="col-half">
        <h4 style="margin-left: 6%;">Education</h4>
        <div class="form-group-2">
        <select name="education" id="education" class="form-control" style="width: 246px;height: 54px;margin-left: 6%;" required >
        <option value="" selected="selected" disabled="disabled">-- select one --</option>
        <option value="No formal education">No formal education</option>
        <option value="Primary education">Primary education</option>
        <option value="Secondary education">Secondary education or high school</option>
        <option value="GED">GED</option>
        <option value="Vocational qualification">Vocational qualification</option>
        <option value="Bachelors degree">Bachelor's degree</option>
        <option value="Masters degree">Master's degree</option>
        <option value="Doctorate or higher">Doctorate or higher</option>
        </select>
        </div>
      </div>
       <div class="col-half">
        <h4>Work</h4>
        <div class="form-group-2">
        <input type="text" name="occupation" id="occupation" placeholder="Work" required style="
    width: 257px;
">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-half">
        <h4 style="margin-left: 6%">Contact No.</h4>
        <div class="form-group-2">
           <input type="text" name="contactnum" id="contactnum" placeholder="Telephone No." style="
    margin-left: 6% ;
    width: 95%;
" required>
        </div>
      </div>
       <!-- <div class="col-half">
        <h4>Cellphone No.</h4>
        <div class="form-group-2">
        <input type="Text" placeholder="Cellphone No."/>
        </div>
      </div>
    </div> -->
     <!-- <div class="col-half">
     <h4>Valid ID no.</h4>
       <div class="form-group-2">
        <input type="text" name="identificationno" placeholder="ID no." required>
        </div>
  </div> -->

    <div class="row">
        <h4>Blood Bank</h4>
        <div class="form-group-2">
          <div class="form-group-twothirds"> 
          <select name="bloodbank" id="bloodbank" class="form-control" style="width: 255px; height: 54px;" required>
          <option value="" selected="selected" disabled="disabled">-- select one --</option>

          <?php

          $usertable="branch";
          $columnname="branchaddress";

       


           $result=mysqli_query($conn, "SELECT * FROM branch");
   
     

          if ($result)
          {

          while( $row = mysqli_fetch_array($result))
                {
                  $branchaddress=$row["$columnname"];
                  echo"<option>$branchaddress</option>";
                }

          }
           ?>


              <!-- <option value="" selected="selected" disabled="disabled">-- select one --</option>
              <option value="Oroquieta City">Oroquieta City</option>
              <option value="Ozamiz City">Ozamiz City</option>
              <option value="Tangub City">Tangub City</option> -->
          $options="</select>";
        </div>
      </div>
    </div><br>
          <!-- <center><div class="g-recaptcha" data-sitekey="6LfIoXsUAAAAALXHdXSwMTD1znd_o419bnCP0R3E"></div></center> -->
      <button class="button" name="donate" id="donate"> DONATE</button>
    </form>
    <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
</div>

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

  

    <!-- <script  src="js/index.js"></script> -->




</body>

  <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="assets/js/snbutton.js"></script>
  <script>
     $().ready(function(){
         SNButton.init("donate",{
             fields: ["lastname","firstname","middlename","birthmonth","birthday","birthyear","sex","civilstatus","age","address","identificationno","email","nationality","education","occupation","contactnum","bloodbank"],
             enabletext: "Donate",
             disabletext: "Please input all the required fields"
         })
     })
  </script>

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
