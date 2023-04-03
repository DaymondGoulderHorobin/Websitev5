<?php

$servername = "aotearoapartytest.coogbiulxfah.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "l8bboyhrcGIlZNtj4TVE";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>