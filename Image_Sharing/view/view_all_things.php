<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<style>
        .post {
            background-color: gray;
            display: flex;
             flex-wrap: nowrap;
            width:600px;
            padding: 10px;
            margin: 10px;
            border: 2px solid cornflowerblue;
            border-radius: 20px;
        }
        .btn{
         padding:10px;
          height:40px;
          margin:30px;
        }
        .btn:hover{
          background:green;
        }
    </style>
<body>


<link rel="stylesheet" type="text/css" href ="../css/stylefind.css">

<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>

</label>

<label class="logo">View All Things</label>


<ul>
    
   
  <li><a class="active" href="home.php">Home</a></li>
  
  <li><a href="profile.php">Profile</a></li>

  <li><a href="employee.php">Employee</a></li>
  
  <li><a href="../control/logout.php">Logout</a></li>
  
</ul>
    
</nav>

<br>
<br>
<br>



<h1>Display posts</h1>
<div id="posts">
   
    </div>
    <script src="../js/posts.js"></script>



</body>
</html>


