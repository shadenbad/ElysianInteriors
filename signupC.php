<?php

session_start();
 error_reporting(E_ALL);
       ini_set('log_errors','1');
       ini_set('display_errors','1');
include 'db.php'; // Assumes db.php contains your mysqli connection to the database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $conn->real_escape_string($_POST['first-name']);
    $lastName = $conn->real_escape_string($_POST['last-name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Securely hash the password

    // Check if the email already exists
    $checkEmailQuery = $conn->prepare("SELECT emailAddress FROM client WHERE emailAddress = ?");
    $checkEmailQuery->bind_param("s", $email);
    $checkEmailQuery->execute();
    $checkEmailResult = $checkEmailQuery->get_result();
    
    if ($checkEmailResult->num_rows > 0) {
        // Email already exists, redirect back with an error message
        header("Location: signup.php?error=email_exists");
        exit();
    } else {
        // Insert the client info into the database
        $stmt = $conn->prepare("INSERT INTO client (firstName, lastName, emailAddress, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $firstName, $lastName, $email, $password);
        
        if ($stmt->execute()) {
            // Registration successful
            $clientId = $stmt->insert_id; // Retrieve the ID of the newly inserted client record

            // Set session variables and redirect to the client's homepage
            $_SESSION['user_id'] = $clientId;
            $_SESSION['user_type'] = 'client';
            header("Location: Clientpage.html"); // Adjust the redirection location as necessary
            exit();
        } else {
            die("Error: Failed to register the client.");
        }
    }
} else {
    echo "Error: Invalid request method.";
}
?>



