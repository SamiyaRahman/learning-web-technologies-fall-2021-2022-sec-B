<?php
session_start(); 
include('../control/db.php');
include('../control/updatecheck.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<body>


<?php

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"users",$_SESSION["username"],$_SESSION["password"]);

if (!empty($userquery) && $userQuery->num_rows> 0) {
    echo "<form action='' method='post'>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
    
      echo "firstname : <input type='text' name='firstname' value=".$row["firstname"]." > <br>";
      echo "email : <input type='text' name='email' value=".$row["email"]." ><br>";
      
    }
    echo   "<input name='update' type='submit' value='Update'>";
  } else {
    echo "0 results";
  }



?>





<a href="../control/logout.php">logout</a>

</body>
</html>