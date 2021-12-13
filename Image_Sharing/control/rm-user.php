<?php

if(isset($_POST['remove']))
{
    $connect = new db();
    $connetion = $connect->OpenCon();
    $result = $connect->removeUser($connetion, $_POST['uname']);
    $connect->CloseCon($connetion); 
}


?>