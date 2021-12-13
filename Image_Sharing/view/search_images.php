<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Archive</title>
    <link rel="stylesheet" href="./css/style.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
  </head>

  <body id="setImg">

  <link rel="stylesheet" type="text/css" href ="../css/stylefind.css">

<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>

</label>

<label class="logo">Search Images</label>


<ul>
    
   
  <li><a class="active" href="home.php">Home</a></li>
  
  <li><a href="profile.php">Profile</a></li>

  <li><a href="employee.php">Employee</a></li>
  
  <li><a href="../control/logout.php">Logout</a></li>
  
</ul>
    
</nav>

<br>
<br>
    <h2 class="d-flex justify-content-center mt-5 head-text">Search Images</h2>
    <!-- Search Input field and button -->
    <div class="container">
      <form class="col-md-6 m-auto py-5">
        <div class="input-group mb-3">
          <input
            id="search-field"
            type="text"
            class="form-control"
            placeholder="Search Image"
            aria-label="Recipient's username"
            aria-describedby="button-addon2"
          />
          <button
            onclick="searchBooks()"
            class="btn btn-danger"
            type="button"
            id="searchBtn"
          >
            Search
          </button>
        </div>
      </form>
    </div>

    <h1 id="searchResult" class="d-flex justify-content-center"></h1>

    <!-- Book Card -->

    <div class="row row-cols-1 row-cols-md-4 ps-5 g-3" id="bookCard"></div>
    <!-- External JavaScript link -->
    <script src="../js/search.js"></script>
  </body>
</html>
