<?php
include('db.php');

$user = $_POST['uname'];

if($user=="")
{
    echo "0 results";
}

$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUserByUname($conobj,"users",$user );



if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>username</th><th>Name</th><th>email</th><th>utype</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["username"]."</td><td>".$row["firstname"]."</td><td>".$row["email"]."</td><td>".$row["utype"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }