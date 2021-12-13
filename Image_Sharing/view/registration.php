<?php
include("../control/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    
</head>
<body style="background-image: url(Image/RR.jpg);background-size:100% 100%">

<script defer src="../js/reg.js"></script>

<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>






<?php
    $reg_data = array();
    $err_star = "<p style='color: red; display: inline-block'>*</p>";
    $nameE = $emailE = $usernameE = $passE = $cpassE = $message_x = $message_f = "";
    $namei = $emaili = $usernamei = $gender = $dob = $passi = $utype = "";
    $err_pass = $message_s = "";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $reg_data['gender'] = $_POST['gender'];
        $reg_data['dob'] = $_POST['date'];
        $reg_data['usertype'] = $_POST['usertype'];
        if(empty($_POST['name'])){$nameE = $err_star; $message_x = "Please Fillup Required Fields!";}
        else{$reg_data['name'] = $_POST['name'];}
        if(empty($_POST['email'])){$emailE = $err_star;}
        else{$reg_data['email'] = $_POST['email'];}
        if(empty($_POST['username'])){$usernameE = $err_star;}
        else{$reg_data['username'] = $_POST['username'];}
        if(empty($_POST['password'])){$passE = $err_star;} else {
            if($_POST['password'] != $_POST['cpassword'])
            {
                $err_pass = "<h4 style='color: red;'>Password didn't match.</h4>";
            }
            else{$reg_data['password'] = $_POST['password'];}
        }
        if(empty($_POST['cpassword'])){$cpassE = $err_star;}


        $target_dir = "../files/";
        $reg_data['img'] = $_FILES["FileUpload"]["name"];
        $target_file = $target_dir . basename($_FILES["FileUpload"]["name"]);

        if (move_uploaded_file($_FILES["FileUpload"]["tmp_name"], $target_file)) {
            $message_f = "The file ". basename( $_FILES["FileUpload"]["name"]). " has been uploaded.";
        }
        else {
            $message_f = "Sorry, there was an error uploading your file.";
        }

    }
?>


<?php
if(isset($_POST['submit']))
{
    $conn = new db();
    $connobj = $conn->OpenCon();
    $message_s = $conn->UserRegistration($connobj, $reg_data);
    $conn->CloseCon($connobj);
}
?>

    <div class="container">
    <?php
        echo "<h4 style='color: red'>$message_x</h4>";
        echo "<h4 style='color: red'>$message_f</h4>";
        echo $err_pass;
        echo $message_s; 
    ?>

    <center>
    
        <fieldset style="width:50%">
            <legend><strong>Registration</strong></legend>
            <p id="mytext"></p>
            <form  action="" onsubmit="return validateForm3()" method="post" enctype="multipart/form-data">
            <div class="form-warper">
            

            
                <div class="form-group form-border">
                    <label for="full-name">Name:</label>
                    <input type="text" name="name" id="full-name"/> <?php echo $nameE; ?>
                </div>
                
                <br>

                <div class="form-group form-border">
                    <label for="user-email">Email:</label>
                    <input type="email" name="email" id="user-email"/><?php echo $emailE; ?>
                </div>
                <br>

                <div class="form-group form-border">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username"/><?php echo $usernameE; ?>
                </div>
                <br>
                <div class="form-group form-border">
                    <label for="password">Password:</label></td>
                    <input type="password" name="password" id="password"/><?php echo $passE; ?>
                </div>
                <br>
                <div class="form-group form-border">
                    <label for="cpassword">Confirm Password:</label></td>
                    <input type="password" name="cpassword" id="cpassword"/><?php echo $cpassE; ?>
                </div>
               
               <br>

                <div class="form-group form-legend">
                    <fieldset>
                        <legend>Gender</legend>
                        <div class="btn-group btn-group-toggle inp_x" data-toggle="buttons">
                            <label class="btn btn-primary">
                                <input type="radio" name="gender" id="male" value="male" checked="checked"> Male
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="gender" id="female" value="female"> Female
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="gender" id="female" value="female"> Other
                            </label>
                        </div>
                    </fieldset>
                </div>

                <div class="form-group form-legend">
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <div class="inp_x">
                            <input type="date" name="date" id="dob">
                        </div>
                    </fieldset>
                </div>

                <div class="form-group form-legend">
                    <fieldset>
                        <legend>User Type</legend>

                        <div class="btn-group btn-group-toggle inp_x">
                        <select name="usertype" id="usertype">
                            <option value="">Please Choose User Type</option>
                            <option value="admin">Admin</option>
                            <option value="employee">Employee</option>
                            <option value="brand">Brand</option>
                        </select>
                        </div>

                  
                    </fieldset>
                </div>

                <div class="form-group form-legend">
                    <fieldset>
                        <legend>Profile Picture</legend>
                        <div class="inp_x">
                            <input type="file" name="FileUpload" id="FileUpload">
                        </div>
                    </fieldset>
                </div>
                
                <div class="form-submit">
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" value="Reset">
                </div>
            </div>
            </form>
        </fieldset>


      <button class="button" onclick="window.location.href='login.php'">LOG IN</button>

    

        
        
        </center>
    </div>
</body>
</html>