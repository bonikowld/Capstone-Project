<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Search - Project Blood Seeker</title>
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
                        <li><a class="is-active" href="about.html">SEARCH</a></li>
                        <li class="has-child"><a href="request.php">REQUEST</a>
                        </li>
                        <li><a href="gallery.html">DONATE</a></li>
                        <li><a href="admin/admin_login.php">ADMIN</a></li>
                        <li><a href="admin/admin_login.html" class="login">LOG-IN</a></li>
                    </ul>
                  

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->
 
<center>
 <h1>SEARCH BLOOD</h1>


<form action="" method="get">
 <div class="btn-group">
     <select name="bloodtype" class="form-control" required>
              <option value="">Select Blood</option>
              <option value="O">O</option>
              <option value="O-">O-</option>
              <option value="O+">O+</option>
              <option value="A-">A-</option>
              <option value="A+">A+</option>
              <option value="B-">B-</option>
              <option value="B+">B+</option>
              <option value="AB-">AB-</option>
              <option value="AB+">AB+</option>
             </select>
  </div>

  <div class="btn-group btn-group-primary">
       <select name="city" class="form-control" required>
              <option value="">Select City</option>
              <option value="Ozamiz City">Ozamiz City</option>
              <option value="Oroquieta City">Oroquieta City</option>
              <option value="Tangub City">Tangub City</option>
             </select>
  </div>
  <button class="btn btn-primary hidden-print"  name="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
</form>
</center>



<div class="container">
    <table class="table table-rounded custab table-hover">
    <thead>
        <tr>
        <th class="text-center">Serial Number</th>
        <th class="text-center">Blood Type</th>
          <th class="text-center">City</th>
            <th class="text-center">Reserve</th>
        </tr>
    </thead>

            <tr>
              <td class="text-center"> 1234-112231</td>
                <td class="text-center">Ozamiz City</td>
                <td class="text-center">A+</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="Reserve.html"><span class="glyphicon glyphicon-ok"></span> Yes</a></td>
            </tr>
            <tr>
              <td class="text-center"> 2234-112231</td>
                <td class="text-center">Oroquieta City</td>
                <td class="text-center">B</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="Reserve.html"><span class="glyphicon glyphicon-ok"></span> Yes</a></td>
            </tr>
            <tr>
               <td class="text-center"> 3334-112231</td>
                <td class="text-center">Tangub City</td>
                <td class="text-center">O+</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="Reserve.html"><span class="glyphicon glyphicon-ok"></span> Yes</a></td>
            </tr>
    <tbody>
            <?php
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "blood_bank";

              // Create connection
              $conn = mysqli_connect($servername, $username, $password, $dbname);
              // Check connection
              if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
              }

              if(isset($_GET['search'])){
              $city = $_GET['city'];
              $bloodtype = $_GET['bloodtype'];

              $result = mysqli_query($conn,"SELECT * FROM blood WHERE bloodtype = '$bloodtype' AND city = '$city' ;");

              while($row = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td class='text-center'>".$row['serialnumber']."</td>";
                echo "<td class='text-center'>".$row['bloodtype']."</td>";
                echo "<td class='text-center'>".$row['city']."</td>";
                echo "<td class='text-center'><a class='btn btn-info btn-xs' href='contact.html'><span class='glyphicon glyphicon-ok'></span> Yes</a></td>";
                echo "</tr>";
                }
              }
             
              mysqli_close($conn); 
           ?>
           
  </tbody>
    </table>
    </div>
</div>

<!-- <div id="myModal" class="modal fade " role="dialog">
  <div class="modal-dialog modal-lg"> -->

    <!-- Modal content-->
    <!-- <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body" >
      <div class="bloodData" >
      <b>Serial Number:</b> <span class="serialnumber"></span><br>
      <b>Donor:</b> <span class="donor"></span><br> 
      <b>Blood Type: </b> <span class="bloodtype"></span><br>
      <b>Component:</b> <span class="component"></span><br>
      <b>Quantity: </b> <span class="quantity"></span><br>
      <b>Extraction Date:</b> <span class="extractiondate"></span><br>
      <b>Expiration Date:</b> <span class="expirationdate"></span>
      </div>
      <p id="bloodpic"><img class="bloodimg" src="../admin/img/img.jpg" alt="Blood" height="218px" width="207px" ></p>
      </div>

    <form method="post" action="">
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" data-toggle='modal' data-target='#updateModal'>Update</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle='modal' data-target="#deleteModal" >Delete</button> 
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>  
     </div>
    </form> 
      </div>
    </div>
  </div>
    -->

    <!--  Scripts
    ================================================== -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>

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