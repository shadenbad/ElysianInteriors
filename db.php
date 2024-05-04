
<?php
// Database configuration
$servername = "sql208.infinityfree.com";
$username = "if0_36485235";
$password = "Ll112233Lll";
$dbname = "if0_36485235_elysian_interiors";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

