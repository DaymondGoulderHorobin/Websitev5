<?php

//Database of the user accounts, currently done through Amazon
$serverName = "aotearoapartytest.coogbiulxfah.us-east-1.rds.amazonaws.com";
$dBUsername = "admin";
$dBPassword = "l8bboyhrcGIlZNtj4TVE";
$dBName = "aotearoaparty";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


