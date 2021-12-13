<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body style="background-color: gray">


<link rel="stylesheet" type="text/css" href ="../css/stylefind.css">

<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>

</label>

<label class="logo">Offers</label>


<ul>
    
   
  <li><a class="active" href="home.php">Home</a></li>
  
  <li><a href="profile.php">Profile</a></li>

  <li><a href="employee.php">Employee</a></li>
  
  <li><a href="../control/logout.php">Logout</a></li>
  
</ul>
    
</nav>





<center>
<div id="result">


</div>
</center>
<br>
<br>
<br>
<br>
<br>
<br>
<center>

<form id='form' method='post'>
  <textarea type='text' id='name'></textarea><br>
  <input type='text' id='body'  /><br>

  <input type='submit' value='submit' />

</form>
</center>


      

  </body>

<script>
var form=document.getElementById('form')

form.addEventListener('submit',function(e){

  e.preventDefault()
var name = document.getElementById('name').value
var body = document.getElementById('body').value


  fetch("https://jsonplaceholder.typicode.com/posts", {
     
     // Adding method type
     method: "POST",
      
     // Adding body or contents to send
     body: JSON.stringify({
         title:name,
         body:body
        
     }),
      
     // Adding headers to the request
     headers: {
         "Content-type": "application/json; charset=UTF-8"
     }
 })
  
 // Converting to JSON
 .then(response => response.json())
  
 // Displaying results to console
//  .then(json => console.log(json));

.then(function(data){
  console.log(data)
  var result = document.getElementById('result')

  result.innerHTML = `<h2>The Offer is : ${data.title}</h2>
  <h3>The Offer Till : ${data.body}
  `
})
})

  </script>


</html>



