function validateForm1() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
  
    if (username == "") {
      document.getElementById("mytext").innerHTML="Please Enter username";
      
      return false;
     
    }
    if ( password == "") {
      document.getElementById("mytext").innerHTML="Please Enter password";
      return false;
    }
  
  
    
  }