<?php

if (!isset($_SESSION["userid"]) || $_SESSION['userid'] !== true) {
    header('Location: login.php'); // Redirect to the login page
    exit;
}

?>