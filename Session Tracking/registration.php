<?php

include('header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<hr>
<body>
    <form action="">

    <fieldset>
    <legend>REGISTRATION</legend>

    <label for="">Name............................:</label>
    <input type="text">

    <hr>
    <label for="">Email............................:</label>
    <input type="text">

    <hr>
    <label for="">User Name.........................:</label>
    <input type="text">

    <hr>
    <label for="">Password..........................:</label>
    <input type="password">

    <hr>
    <label for="">Confirm Password...................:</label>
    <input type="pasword">
<hr>
    <fieldset>
        <legend>Gender</legend>

        <input type="radio">Male
        <input type="radio">Female
        <input type="radio">Others
    </fieldset>
<hr>
    <fieldset>
        <legend>Date of Birth</legend>

        <input type="date">
    </fieldset>
    <hr>
    <button>Submit</button>
    <button>Reset</button>



    </fieldset>

    <br>
    <br>

    <hr>



  

    </form>
    <?php

include('footer.php')

?>
</body>
</html>