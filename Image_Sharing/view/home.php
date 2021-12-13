<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href ="../css/stylehome.css">
</head>
<body>
    <div class="container">

    <nav class='nav'>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>

</label>

<label class="logo">Home</label>


<ul>
    
   
  <li><a class="active" href="home.php">Home</a></li>
  
  <li><a href="profile.php">Profile</a></li>

  <li><a href="employee.php">Employee</a></li>
  
  <li><a href="../control/logout.php">Logout</a></li>
  
</ul>
    
</nav>
    <?php
        include("../control/db.php");

        $con = new db();
        $conobj = $con->OpenCon();
        $res = $con->CheckUserType($conobj, $username);
        $con->CloseCon($conobj);

        $_SESSION['all_data'] = $res;
        $_SESSION['utype'] = $res['utype'];
        $_SESSION['firstname'] = $res['firstname'];
    ?>
    <h1>Welcome <?php echo $_SESSION['firstname']; ?></h1>
    <?php
        if($_SESSION['utype'] == "customer")
        {
            include("cust_message.php");
        }
    ?>
    
    </div>
    <footer>
        <?php include("footer.php"); ?>
    </footer>
</body>
</html>