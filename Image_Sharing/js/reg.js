function validateForm3() {
  var name = document.getElementById("full-name").value;
  var email = document.getElementById("user-email").value;
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var cpassword = document.getElementById("cpassword").value;

  if (full - name == "") {
    document.getElementById("mytext").innerHTML = "Please Enter Fill name";
    return false;
  }
  if (user - email == "") {
    document.getElementById("mytext").innerHTML = "Please Enter Email";
    return false;
  }
  if (username == "") {
    document.getElementById("mytext").innerHTML = "Please Enter User Name";
    return false;
  }
  if (password == "") {
    document.getElementById("mytext").innerHTML = "Please Enter Password";
    return false;
  }
  if (cpassword == "") {
    document.getElementById("mytext").innerHTML =
      "Please Enter Confirm Password";
    return false;
  }
}
