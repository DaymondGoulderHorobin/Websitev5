<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style2.css"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
    </head>
<body>




<!--<nav>
  <ul class="cf">
      <li><a href="index.php">Home</a></li>
      <li><a class="dropdown" href="#">About Us</a>
          <ul>
              <li><a href="candidates.php">Candidates</a></li>
              <li><a href="news.php">News</a></li>
              <li><a href="constitution.php">Constitution</a></li>
              <li><a href="policy.php">Policy</a></li>
          </ul>
          </li>
        <?php
        if (isset($_SESSION["userid"])){
            echo "<li><a href='profile.php'>Proflie page</a></li>";
        }

        else {
            echo "<li><a href='signup.php'>Sign Up</a></li>";
            echo "<li><a href='login.php'>Log in</a></li>";
        }
        ?>
          <li><a class="dropdown" href="#">Join Us</a>
            <ul>
                <li><a href="member.php">Become a member</a></li>
                <li><a href="volunteer.php">Volunteer</a></li>
                <li><a href="updates.php">Get updates</a></li>
                <li><a href="events.php">Events</a></li>
            </ul>
            </li>    
      <li><a href="contact.php">Contact us</a></li>
  </ul>
</nav>-->

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><div class="image-container">
    <div class="col-md-2 px-0 me-auto">
        <img src="img/logo.jpg" class="img-fluid">
    </div>
</div></a>
    <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-4">
      <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About us
          </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="news.php">News</a>
          <a class="dropdown-item" href="candidates.php">Candidates</a>
          <a class="dropdown-item" href="constitution.php">Constitution</a>
          <a class="dropdown-item" href="policy.php">Policy</a>
          <a class="dropdown-item" href="#">Constitution</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Join Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="signup.php">Become a Member</a>
          <a class="dropdown-item" href="volunteer.php">Volunteer for Us</a>
          <a class="dropdown-item" href="constitution.php">Get Updates</a>
          <a class="dropdown-item" href="policy.php">Events</a>
          <a class="dropdown-item" href="#">Constitution</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
    </ul>

    <!-- Search Bar --> 
    <!--<form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
    </div>
</nav>


    
     <!-- Include Bootstrap JS -->   
    
