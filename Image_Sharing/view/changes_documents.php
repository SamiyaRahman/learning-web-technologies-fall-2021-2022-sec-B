<?php
	if(isset($_COOKIE['flag'])){
?>

<html>
<head>
	<title>Change Documents</title>
</head>
<body>
	<h1 style="text-align: center;" >Welcome to Change documents Page</h1>
	<center>
    <a href="home.php">Home</a>
    <br>
    <a href="logout.php">Logout</a>
    </center>
</body>
</html>


<?php
 
 }else{
 	header('location: login.html');
 }

?>