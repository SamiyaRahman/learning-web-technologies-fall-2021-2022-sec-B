<?php 

    include("../control/logincheck.php");

    if(isset($_SESSION['username'])){
    header("location: home.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script defer src="../js/login.js"></script>




    
<style>
.button {
  background-color: #008CBA; 
  border: none;
  color: white;
  padding: 7px 14px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

    
</head>
<body style="background-image: url(Image/W.jpg);>
    <?php echo "<h1>$error_m</h1>"; ?>
    <div class="container">

<script type="text/javascript" language="javascript">

window.onload = function() {
    document.getElementById("Button").onmouseover = function()
    {
        this.style.backgroundColor = "#9933ff";
    }

    document.getElementById("Button").onmouseout = function()
    {
        this.style.backgroundColor = "#9999ff";
    }
}



</script>
        
        <center>

        <p id="mytext"></p>
            <form  action="" onsubmit="return validateForm1()" method="post" enctype="multipart/form-data">
            <div class="form-warper">




            <div class="form-grp">
            <h1>Login form</h1>
            <label for="username">Username: 
                <input type="text" name="username" id="username" placeholder="Enter your username">
            </label> <br>
            <br>
            <label for="password">Password: 
                <input type="password" name="password" id="password" placeholder="Enter your password">
            </label>
            </div>
                <br>
            <div class="sub-button">
            <input type="submit" name="submit" id ="Button" value="Login">
            </div>
            
            </form>
            
            <br>
            <button class="button" onclick="window.location.href='registration.php'">Register</button>
           
            </center>
        </div>
    </div>

    <br>
    

    <?php
$cookie_name = "Employee";
$cookie_value = "Image Sharing";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<?php

setcookie("user", "", time() - 3600);
?>
<?php
if(count($_COOKIE) > 0) {
echo "Cookies are enabled.";
} else {
echo "Cookies are disabled.";
}
?>



</body>
</html>