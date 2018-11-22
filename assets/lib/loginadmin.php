<?php
session_start();

?>
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
?>

<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Home - Project Blood Seeker</title>
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/icon.png">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="../css/loginadmin.css" rel="stylesheet" type="text/css" />

        <style>
          .button {
            padding: 5px 15px;
            font-size: 18px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #800000;
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px #4d0000;
          }

          .button:hover {background-color: #330000}

          .button:active {
            background-color: #330000;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
          }

          .adminlogin{
          background-image: url("../images/search.jpg");
          background-repeat: no-repeat;
          background-attachment: scroll;
          background-position: center center;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          height: 700px;
          }
        </style>

</head>
<body class="adminlogin">



<?php 

if(isset($_POST['adminSignin'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM branch WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    


    $count=mysqli_num_rows($result);

    if($count==1){
        $_SESSION['city']= $row['branchaddress'];
        header ("location: ../../admin/index.php");
        
    } 

    else{
      $prompt = "Log in Failed Invalid Username or Password";
      echo "<script type='text/javascript'>alert('$prompt');</script>";
    }
  
   
    mysqli_close($conn);

  }

?>


<input class="button" type="button" value="Go Back!" onclick="history.back(-1)" />

 <div class="login-page">
  <div class="form">
    <center><h3>ADMINISTRATOR</h3></center>
    <form class="login-form" method="post" action="">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button name="adminSignin">login</button>
    </form>
  </div>
</div>




</body>
</html>