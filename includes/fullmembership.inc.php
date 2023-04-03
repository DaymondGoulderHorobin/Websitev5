<?php
    
    session_start();
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    // Get the values of the form elements
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $elector = isset($_POST['elector']) ? 'YES' : 'NO';
    $eligible = isset($_POST['eligible']) ? 'YES' : 'NO';
    $electorate = $_POST['electorateinput'];
    $citizen = isset($_POST['citizen']) ? 'YES' : 'NO';
    $permanent = isset($_POST['permanent']) ? 'YES' : 'NO';
    $other = isset($_POST['other']) ? 'YES' : 'NO';
    $reason = $_POST['reason'];
    $years = 'NA';
    $months = 'NA';

    // Set the status based on whether the user is an elector
    $status = $elector === 'YES' ? 'full member' : 'ineligible';

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO fullmembers (name, address, phone, dob, email, elector, electorate, eligible, citizen, permanent, other, reason, user_id, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssssssssss", $name, $address, $phone, $dob, $email, $elector, $electorate, $eligible, $citizen, $permanent, $other, $reason, $id, $status);

    // Execute the SQL statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
?>

