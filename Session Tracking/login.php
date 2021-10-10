<?php

include('header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <fieldset>
        <legend>LOGIN</legend>
        <label for="">User Name :</label>
        <input type="text">
        <br>
        <label for="">Password</label>
        <input type="text">

        <hr>

        <input type="checkbox">Remember Me
        <hr>
        <br>
        <br>


        <button>Sumit</button> <a href="forget.php">Forget password</a>
    </fieldset>
</body>

<?php

include('footer.php')

?>
</html>