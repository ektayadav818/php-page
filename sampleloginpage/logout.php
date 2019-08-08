<?php

    session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title>logout page</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #7f8c8d">

  <div id="main-wrapper">
    <center>
      <h2>Logout page</h2>
      <h3>Welcome 
        <?php echo $_SESSION['username'] ?>
          
        </h3>
      <img src="image/photo.png" class="photo"/>

    </center>

    <form class="myform" action="logout.php" method="post">
     
      <input name="logout"  type="submit"  id="logout_btn" value="Log Out" /><br>
    </form>

    <?php
        if (isset($_POST['']))
        session_destroy();
        header('location:index.php')
    ?>
  </div>
</body>
</html>