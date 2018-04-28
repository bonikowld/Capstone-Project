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

        if(isset($_POST['signin_btn'])){

          $username = $_POST['username'];
          $pass = $_POST['pass'];

          $sql = "SELECT * FROM users WHERE username = '$username' AND pass = '$pass'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_array($result);

          $_SESSION['city']= $row['bloodbank'];
          
          $count=mysqli_num_rows($result);

          if($count==1){
            if ($row['role']=="admin")
              {
                header ("location: admin/index.php"); 
                    
                    
              }  
            else if ($row['role']=="")
              {
                $_SESSION['role']=$row['role'];
                header ("location: donate.php");
                $_SESSION['username']= $row['firstname']; 
              }
            }

          else{
            $prompt = "Log in Failed Invalid Username or Password";
            echo "<script type='text/javascript'>alert('$prompt');</script>";
          }
        
         
          mysqli_close($conn);

        }
?>