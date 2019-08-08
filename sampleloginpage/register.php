<?php

      require 'dbconfig/config.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title>Registertion page</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #7f8c8d">

  <div id="main-wrapper">
    <center>
      <h2>Registration Form</h2>
      <img src="image/photo.png" class="photo"/>

    </center>

    <form class="myform" action="register.php" method="post">
      <label><b>Username</b></label><br>
      <input name="username" type="text" class="inputvalue" placeholder="Type your user name"/><br>
       <label><b>Password</b></label><br>
      <input name="password" type="password" class="inputvalue" placeholder="Type your password"/><br>
      <label><b> confirm Password</b></label><br>
      <input name="cpassword" type="password" class="inputvalue" placeholder="confirm password"/><br>
      
      <input  name="submit_btn"  type="submit" id="signup_btn" value="sign-up"/><br>
      <input  name="button" type="button"  id="back_btn" value="back" /><br>
    </form>

    <?php
      if (isset($_POST['submit_btn']))
      {

        //echo "script type="text/javascript"> alert("Sign up button is clicked") </script>";

        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword =$_POST['cpassword'];

       if ($password==$cpassword)
        {
          # code...
          $query="select * from user WHERE username='$username' ";
          $query_run =mysql_query($con,$query);

      
          if (mysql_num_rows($query_run)>0) 
          {
 
              // there is already a user with the same username

              # code...
              echo "script type="text/javascript"> alert("User is already exist ....  tryanother user name") </script";

          }
         else
          {

             $query="insert into user values('$username','$password')";
             $query_run =mysql_query($con,$query);

            if ($query_run)
            {

              echo "script type="text/javascript"> alert("User registered .... go to login page to login ") </script>";
            }


            else
            {
              echo "script type="text/javascript"> alert("Error !") c/script>";

            }

          }

          else{
            echo "script type="text/javascript"> alert(" password and confirm password does not match ") </script>";
          }
        }
      }
  </div>
  </div>
</body>
</html>
















