<?php
class db
{
    
    function OpenCon() 
    {
        $suser = "root";
        $spass = "";
        $server = "localhost";
        $dbname = "image_sharing";
        $conn = new mysqli($server, $suser, $spass, $dbname) or die("Connection failed: %s\n".$conn->error);

        return $conn;
    }
    function CheckLogin($conn, $table, $user, $pass)
    {
        $que = "SELECT * FROM " . $table . " WHERE username='" . $user . "' AND userpass='" . $pass . "'";
        $result = $conn->query($que);
        return $result;
    }
    function UserRegistration($conn, $reg_data)
    {
       
        $message_s = "";
        $stmt = $conn->prepare("INSERT INTO Users VALUE (?, ?, ?, ?, ?, ?, ?, ?)");// prepare and bind
       
        $stmt->bind_param("ssssssss", $reg_data['username'], $reg_data['name'], $reg_data['email'], $reg_data['gender'], $reg_data['password'],
        $reg_data['dob'], $reg_data['usertype'], $reg_data['img']);
        
        if($stmt->execute())
        {
            $message_s = "<h4>Registration successful...</h4>" ;
        }
        else {
            $message_s =  "<h6>Registration failed...!</h6>";
        }

        return $message_s;
    }





    function CheckUserType($conn, $username)
    {
        $query = "SELECT * FROM users WHERE username='$username'";
        $result = $conn->query($query);
        if($result->num_rows > 0)
        {
            $res = $result->fetch_assoc();
        }
        $result->free();
        return $res;
    }
    
   
    function CheckUser($conn,$table,$username,$password)
    {
   $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
    return $result;
    }
   
    function ShowAll($conn,$table)
    {
   $result = $conn->query("SELECT * FROM  $table");
    return $result;
    }
    function GetUserByUname($conn,$table, $uname)
    {
   $result = $conn->query("SELECT * FROM  $table WHERE username='$uname'");
    return $result;
    }
   
    function UpdateUser($conn,$table,$username,$firstname,$email)
    {
        $sql = "UPDATE $table SET firstname='$firstname', email='$email' WHERE username='$username'";
   
       if ($conn->query($sql) === TRUE) {
           $result= "Record updated successfully";
       } else {
           $result= "Error updating record: " ;
       }
       return $result;
    }

    function removeUser($conn, $username_x)
    {
       
        $message_s = "";
        $stmt = $conn->prepare("DELETE FROM users WHERE username = ?");// prepare and bind
       
        $stmt->bind_param("s", $username_x);
        
        if($stmt->execute())
        {
            $message_s = "User Removed Successfully" ;
        }
        else {
            $message_s =  "Unable to remove user!";
        }

        return $message_s;
    }
    

    function CloseCon($conn)
    {
        $conn->close();
    }
}
?>