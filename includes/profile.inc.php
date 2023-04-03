<?php

session_start(); 

if (!isset($_SESSION['id'])) {
    die("Not logged in");
}

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $user_id = $_SESSION['id'];
    $sql = "SELECT * FROM fullmembers WHERE user_id=$user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo "0 results";
    }
    
    $conn->close();
    ?>