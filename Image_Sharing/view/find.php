<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body style="background-image: url(Image/FF.jpg);background-size:100% 100%">


<link rel="stylesheet" type="text/css" href ="../css/stylefind.css">

<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>

</label>

<label class="logo">Find User</label>


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
<br>
<br>
<br>
<br>
<br>



 <script>
function showmyuser() {
  var uname=  document.getElementById("uname").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "/Image_Sharing/control/getuser.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);


}
</script>

</head>

<center>

<h2>Find detail of user</h2>
<br>
  <input type="text" id="uname" onkeyup="showmyuser()" >
  

<p id="mytext"></p>
 
</center>

</body>
</html>



