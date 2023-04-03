<?php
  


?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
    
    <meta charset="UTF-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aotearoa Party</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
    <script src="https://kit.fontawesome.com/004f557632.js" crossorigin="anonymous"></script>
 


    </head>
<body class="d-flex flex-column min-vh-100">
    

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="img/logo.jpg" class="img-fluid" alt="Aotearoa Party"></a>
        <div class="image-container">
          <div class="col-md-2 px-0">
     


    </div>
</div></a>
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-4">
      <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
          

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
          Join Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="signup.php">Sign Up</a>
          <a class="dropdown-item" href="volunteer.php">Volunteer for Us</a>
          <a class="dropdown-item" href="updates.php">Get Updates</a>
          <a class="dropdown-item" href="events.php">Events</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item ps-3">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>

            <?php
            if (isset($_SESSION["userid"])){
                echo "<li class='nav-item dropdown'>
                <a class='nav-link dropdown-toggle' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                  Profile
                </a>
              <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                <a class='dropdown-item' href='fullmember.php'>Join Us</a>
                <a class='dropdown-item' href='profile.php'>Membership Status</a>
                <a class='dropdown-item' href='forum.php'>Forum</a>
               
              </div>
            </li>";
                echo "<li class='nav-item'>
                <a class='nav-link' href='includes/logout.inc.php'>Log out</a></li>";
            }

            else {
                echo "<li class='nav-item'>
                        <a class='nav-link' href='signup.php'>Sign Up</a></li>";
                echo "<li class='nav-item'>
                        <a class='nav-link' href='login.php'>Log in</a></li>";
            }
            ?>
    </ul>

    
  </div>
    </div>
</nav>

<main class="main-content">
    
    
    
