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

</head>
<body>



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

 <div class="login-page">
  <div class="form">
    <form class="login-form" method="post" action="">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button name="adminSignin">login</button>
    </form>
  </div>
</div>




</body>
</html>