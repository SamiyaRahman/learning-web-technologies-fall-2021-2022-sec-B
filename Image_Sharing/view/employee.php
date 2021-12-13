<?php
session_start(); 
include('../control/db.php');
include('../control/updatecheck.php');

if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

if($_SESSION['utype'] != "employee") // Redirecting to home if user is not employee type
{
    header("location: home.php");
}

include('../control/rm-user.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
div.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  
}
</style>


<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

 <style type ="text/css"></style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Panel</title>
    <link rel="stylesheet" type="text/css" href ="../css/style.css">
    
    </head>

<body style="background-image: url(Image/L.jpg);background-size:100% ">



<div class="sticky">

<nav>

<label class="logo">Employee Panel</label>

<ul>
   
  <li><a class="active" href="home.php">Home</a></li>
  
  <li><a href="profile.php">Profile</a></li>
  
  <li><a href="employee.php">Employee</a></li>
  
  <li><a href="../control/logout.php">Logout</a></li>
  
</ul>
    
</nav>

</div>

<form action="" method="POST">
<table>
<?php
include('../control/fetch.php');
?>

<br>
<br>
<br>

  

 

<input type=button class="button" onClick="parent.location='find.php'" value='Find User'> 
<input type=button class="button" onClick="parent.location='offer.php'" value='Offers'> 
<input type=button class="button" onClick="parent.location='feedback.php'" value='Feedback'> 
<input type=button class="button" onClick="parent.location='employee_create_content.php'" value='Create Content'> 
<input type=button class="button" onClick="parent.location='create_campaign.php'" value='Create Campaign'> 
<input type=button class="button" onClick="parent.location='search_images.php'" value='Search Images'> 
<input type=button class="button" onClick="parent.location='support.php'" value='Support'> 
<input type=button class="button" onClick="parent.location='Review.php'" value='Review'> 
<input type=button class="button" onClick="parent.location='view_all_things.php'" value='View All Things'> 
<input type=button class="button" onClick="parent.location='update.php'" value='Update'> 


<input type="submit" class="button" name="remove" value="Remove">
</form>


</table>

<br>
<br>
<br>
<br>




<br>
<br>
<br>
<br>

<footer>
        <?php include("footer.php"); ?>
    </footer>
    


    </body>
</html>
  