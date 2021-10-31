<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$number=$_REQUEST['number'];

		if($username != ""){
			if($password != ""){
				if($email != ""){
					if($number !="")

					
				
					setcookie('username', $username, time()+3600, '/');
					setcookie('password', $password, time()+3600, '/');
					setcookie('email', $email, time()+3600, '/');
					setcookie('number', $number, time()+3600, '/');

					$myfile = fopen('user.txt', 'w');
					$user = $username."|".$password."|".$email."|".$number;
					fwrite($myfile, $user);
					fclose($myfile);

					$myfile = fopen('user.txt', 'a');
					$user = $username."|".$password."|".$email."|".$number."\r\n";
					fwrite($myfile, $user);
					fclose($myfile);

					header('location: login.html');
				}else{
					echo "invalid email...";
				}
			}else{
				echo "invalid password...";
			}
		}else{
			echo "invalid username...";
		}
	}
		else{
			echo "invalid username...";
		}
	
?>


<?php
// define variables and set to empty values
$nameErr = $emailErr = $passwordErr = $numberErr = "";
$name = $email = $password = $number = "";

if(isset($_REQUEST['submit'])) {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["password"])) {
    $password = "";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["number"])) {
    $number = "";
  } else {
    $number = test_input($_POST["number"]);
  }

 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>