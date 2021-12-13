<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
  .box{

    border:2px solid black;
    width:300px
  }

    img {
        width: 100px;
        height: 100px;
    }
    </style>
</head>

<body>
   <?php include("navbar.php"); ?>
   <br>
   <br>
   <br>

  <center>
  <div class="box">
    <label for="img">Profile Picture: </label> <br><br>
    <img src="../files/<?php echo $_SESSION['all_data']['img']; ?>" alt="Profile Picture"> <br><br>
    <label for="name">Name: </label><?php echo $_SESSION['firstname']; ?> <br><br>
    <label for="username">Username: </label><?php echo $_SESSION['all_data']['username']; ?> <br><br>
    <label for="gender">Gender: </label><?php echo $_SESSION['all_data']['gender']; ?> <br><br>
    <label for="dob">Date of birth: </label><?php echo $_SESSION['all_data']['dob']; ?> <br><br>
    <label for="email">Email: </label><?php echo $_SESSION['all_data']['email']; ?> <br><br>
    <label for="usrtype">User type: </label><?php echo $_SESSION['all_data']['utype']; ?> <br><br>
    </div>
  </center>

    <footer>
        <?php include("footer.php"); ?>
    </footer>
</body>
</html>