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
<html lang="en" >

 <head>
        <meta charset="utf-8">
        <title>Request - Project Blood Seeker</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

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

<body>

<div class="container">
<form action="" method="POST">
   <center><h1>Patient Information</h1></center> 
    <div class="row">
      <div class="input-group input-group-icon">
        <input type="text" name="lastname" placeholder="Last Name"/>
        <div class="input-icon fa fa-user"></i></div>
      </div>
        <div class="input-group input-group-icon">
        <input type="text" name="firstname" placeholder="First Name"/>
        <div class="input-icon fa fa-user"></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" name="middlename" placeholder="Middle Name"/>
        <div class="input-icon fa fa-user"></div>
      </div>
    </div>

    <div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" name="birthdate" placeholder="DD"/>
          </div>
          <div class="col-third">
            <input type="text" name="birthdate" placeholder="MM"/>
          </div>
          <div class="col-third">
            <input type="text" name="birthdate" placeholder="YYYY"/>
          </div>
        </div>
      </div>

      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <input type="radio" name="sex" value="M" id="gender-male"/>
          <label for="gender-male">M</label>
          <input type="radio" name="sex" value="F" id="gender-female"/>
          <label for="gender-female">F</label>
        </div>
      </div>


    <div class="row">
      <div class="col-half">
        <h4>Age</h4>
        <div class="input-group">
            <input type="text" name="age" placeholder="Age"/>
        </div>
      </div>

      <div class="col-half">
        <h4>Hospital</h4>
        <div class="input-group">
           <input type="text" name="hospital" placeholder="Hospital"/>
        </div>
      </div>
    </div>


     <div class="row">
      <div class="col-half">
        <h4>Tel No</h4>
        <div class="input-group">
            <input type="Text" name="cellphonenum" placeholder="Tel No."/>
        </div>
      </div>
      
      <div class="col-half">
        <h4>Room No</h4>
        <div class="input-group">
           <input type="text" name="roomnum" placeholder="Room No."/>
        </div>
      </div>
    </div>


    <div class="row">
      <h4>Attending Physician</h4>
          <div class="input-group input-group-icon">
            <input type="text" name="physician" placeholder="Attending Physician"/>
            <div class="input-icon fa fa-stethoscope"></div>
            </div>
        </div>

    <div class="row">
      <h4>Clinical Diagnosis</h4>
      <div class="input-group input-group-icon">
        <input type="message" name="diagnosis" placeholder="Clinical Diagnosis"/>
        <div class="input-icon fa fa-stethoscope"></div>
        </div>
    </div>

        <button class="button" type="submit" name="request"> REQUEST</button>
    </div>
</form>




  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>





</body>

</html>
