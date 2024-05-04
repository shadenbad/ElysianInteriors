
<?php
// Database configuration
$servername = "sql313.infinityfree.com";
$username = "if0_36485051";
$password = "Ll112233Ll";
$dbname = "if0_36485051_elysian_interiors";

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

