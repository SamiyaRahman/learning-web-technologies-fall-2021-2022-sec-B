<tr>
<th>Select</th>
<th>username</th>
<th>Gender</th>
<th>Email</th>
<th>Birthday</th>
<th>User Type</th>


</tr>


<?php

$conn = mysqli_connect("localhost","root","","image_sharing");
 
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }


    $sql ="SELECT username, gender,email,dob,utype from users";
    $result =$conn-> query($sql);

    if($result-> num_rows > 0)
    {
        while ($row = $result -> fetch_assoc())
        {
            echo "<tr>".'<td><input type="checkbox" name="uname" id="username" value="'. $row['username'].'"></td><td>' . $row["username"] . "</td><td>". $row ["gender"]."</td><td>". $row ["email"]."</td><td>". $row ["dob"]."</td><td>". $row ["utype"]."</td></tr>";
        }
        echo "</table>";

    }

    else
    {
        echo "0 result";
    }

    $conn -> close();



?>