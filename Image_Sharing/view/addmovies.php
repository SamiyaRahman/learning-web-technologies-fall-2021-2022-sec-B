<?php
include("../control/db.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Movie Registration Form</title>
    <link rel="stylesheet" type="text/css" href ="../css/styleaddm.css">
    <script defer src="../js/addmovie.js"></script>
 
<style>
.button {
    background-color: #008CBA;
  border: none;
  color: white;
  padding: 8px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 50%;
}
</style>

<style>
.button1 {
    background-color: #f44336;
  border: none;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 50%;
}
</style>
</head>

<body style="background-image: url(Image/o.png);background-size:100% 100%">

<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>

</label>

<label class="logo">Movies</label>


<ul>
    
   
  <li><a class="active" href="home.php">Home</a></li>
  
  <li><a href="profile.php">Profile</a></li>

  <li><a href="admin.php">Admin</a></li>
  
  <li><a href="../control/logout.php">Logout</a></li>
  
</ul>
    
</nav>
<?php
    $succ="";

    $reg_data = array();

    $idE= $movienameE =  $showtimwE = $message_x = $message_f = "";
    $idi=$movienamei = $showtimwi = "";

    $err_pass = $message_s = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        
        if(empty($_POST['moviename'])){$nameE = $err_star; $message_x = "Please Fillup Required Fields!";}
        else{$reg_data['moviename'] = $_POST['moviename'];}
        if(empty($_POST['id'])){$emailE = $err_star;}
        else{$reg_data['id'] = $_POST['id'];}
        if(empty($_POST['showtime'])){$emailE = $err_star;}
        else{$reg_data['showtime'] = $_POST['showtime'];}

        if(isset($_POST['submit']))
        {
            $conn = new db();
            $connobj = $conn->OpenCon();
            $message_s = $conn->addmovies($connobj, $reg_data);
            $conn->CloseCon($connobj); 

            $succ="Movie added successfully";
        }

    }
    else {
        $message_f = " Failed";
    }


?>

<h1><?php echo  $succ; ?></h1>

<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<center>

<fieldset style="width:50%">
            <legend><strong>Movie Registration</strong></legend>

            <p id="mytext"></p>
            <form  action="" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
            <div class="form-warper">


            <div class="form-group form-border">
                    <label for="id">ID         :</label>
                    <input type="text" name="id" id="id" placeholder="Enter Movie ID">
                </div>
            
                <div class="form-group form-border">
                    <label for="moviename">Movie Name:</label>
                    <input type="text" name="moviename" id="moviename" placeholder="Enter Movie Name">
                </div>
                
                <br>

                <div class="form-group form-border">
                    <label for="showtime">Show Time:</label>
                    <input type="datetime-local" name="showtime" id="showtime" >
                </div>
                <br>

                <div class="form-submit">
                    <input class="button" type="submit" name="submit" value="Submit">
                    <input class="button" type="reset" value="Reset">
                </div>
            </div>
            <br>
            <br>


            <input type=button class="button1" onClick="parent.location='movies.php'" value='Back'>
            


            </form>
        </fieldset>
        </center>