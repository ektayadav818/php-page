<?php



?>

<!DOCTYPE html>
<html>
<head>
  <title>Login page</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #7f8c8d">

 <!---  <header>
      <nav id="header-nav" class="navbar">
        <div class="container">
          <div class="navbar-header">
            <a href="index.php" class="pull-left">
              <div id ="logo-img" alt ="logo image"></div>
              </a>

               <div class="navbar-brand">
          
            <a href="index.php"><h1>Rajasthan States of Mines and Mineral Ltd.</h1>
            </a>
          
            </div>
          
        </div>
      </nav>
    </header> --->


  <div id="main-wrapper">
    <center>
      <h2>Login Form</h2>
      <img src="image/photo.png" class="photo"/>

    </center>

    <form class="myform" action="index.php" method="post">
      <label><b>Username</b></label><br>
      <input type="text" class="inputvalue" placeholder="Type your user name"/><br>
       <label><b>Password</b></label><br>
      <input type="text" class="inputvalue" placeholder="Type your password"/><br>
      
      <input type="submit" id="login_btn" value="Login"/><br>
      <a href="register.php"> <input  type="button"  id="register_btn" value="Register" /><br>
    </form>

    <?php
    if (isset($_POST['login']))
   {

      $username=$_POST['username'];
      $password =$_POST['password'];

      $query ="select * from user WHERE username ='$username' AND password ='$password'";

      $query_run = mysql_query($con,$query);
      if(mysql_num_rows($query_run)>0)
      {
        //valid

        $_SESSION['username']= $username;
        header('location:homepage.php');

      } else
      {

        //invalid
        echo '<script type"text/javascript"> alert ("invalid credential") </script>'
      }
      # code...
    }



    ?>
  </div>
</body>
</html>