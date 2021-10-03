<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP From Validation</title>
    
</head>
<body>

<?php
$nameErr=$emailErr='';

if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    
    if ($name=='') {
    $nameErr = "Name is required";
    } else {
    $name = input_data($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    $nameErr = "Only alphabets and white space are allowed";
    }
    echo "Your name is: ". $name;
    }
    }

    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['email'];
        } else {  
            $email = input_data($_POST["email"]);  
         
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  

   

        
        
    
     function input_data($data) {  
        $data = trim($data);  
        $data = stripslashes($data);  
        $data = htmlspecialchars($data);  
        return $data;  
      }  
  

?>

<span class = "error">* required field </span>  
<br><br>  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >    

<fieldset style="width:30%">
        <legend>Name</legend>

       <input type="text" name="name">
       <hr>
       <br>
       <input type="submit" name="submit" value="submit">
       <span class="error">* <?php echo $nameErr; ?> </span>  
     

       
        
    </fieldset>

    <fieldset style="width:30%">
        <legend>Email</legend>

       <input type="text" name='email'>
       <hr>
       <br>
       <input type="submit" name="submit" value="submit"> 
       <span class="error">* <?php echo $emailErr; ?> </span>  
    </fieldset>

    <fieldset style="width:30%">
        <legend>Date of Birth</legend>

       <input type="date" value='value' name='value'>
       <hr>
       <br>
       <button>Submit</button>
    </fieldset>

    <fieldset style="width:30%">
        <legend>Gender</legend>

        <input type="radio" name=>Male</input>
        <input type="radio" name=>Female</input>
        <input type="radio" name=>Other</input>

       <hr>
       <br>
       <button>Submit</button>
    </fieldset>

    <fieldset style="width:30%">
        <legend>Degree</legend>

       <input type="checkbox" name=>SSC</input>
       <input type="checkbox" name=>HSC</input>
       <input type="checkbox" name=>BSc</input>
       <input type="checkbox" name=>MSc</input>
       <hr>
       <br>
       <button>Submit</button>
    </fieldset>

    
    <fieldset style="width:30%">
        <legend>BLOOD GROUP</legend>
        <select id="cars" name="cars">
    <option value=""></option>
    <option value="volvo">A+</option>
    <option value="saab">A-</option>
    <option value="fiat">B+</option>
    <option value="audi">O+</option>
  </select>
       <hr>
       <br>
       <input type="submit">
    </fieldset>

</from>








    
</body>
</html>