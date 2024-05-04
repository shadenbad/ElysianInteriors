<?php
 session_start(); 
 
  error_reporting(E_ALL);
       ini_set('log_errors','1');
       ini_set('display_errors','1');
 
if (isset($_SESSION['user_id'])) {
    $clientId = $_SESSION['user_id'];
}

// Database connection
$servername = "sql208.infinityfree.com";
$username = "if0_36485235";
$password = "Ll112233Lll";
$dbname = "if0_36485235_elysian_interiors";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {
       $designerId = $_POST['designerID']; 
    $roomType = $_POST['room-type'];
    $roomWidth = $_POST['room-width'];
    $roomLength = $_POST['room-length'];
    $designCategory = $_POST['design-category'];
    $colorPreferences = $_POST['color-preferences'];

    $statusName = "Pending Consultation";
    $date = date("Y-m-d");

    // Get status ID
    $sql = "SELECT id FROM requeststatus WHERE status='$statusName'";
    $result = mysqli_query($connection, $sql) ; 
    $row = $result->fetch_assoc();
    $statusId = $row['id'];

    // Insert room type if it doesn't exist
    $sql3 = "INSERT INTO roomtype (type) SELECT $roomType WHERE NOT EXISTS (SELECT 1 FROM roomtype WHERE type = '$roomType')";
    $result3 = mysqli_query($connection, $sql3);

    // Get room type ID
    $sql1 = "SELECT id FROM roomtype WHERE type='$roomType'";
    $result1 = mysqli_query($connection, $sql1);
    $row1 = $result1->fetch_assoc();
    $roomTypeID = $row1['id'];

    // Get design category ID
    $sql2 = "SELECT id FROM designcategory WHERE category='$designCategory'";
    $result2 = mysqli_query($connection, $sql2); 
    $row2 = $result2->fetch_assoc();
    $categoryID = $row2['id'];

    // Insert into design consultation request
    $stmt = $connection->prepare("INSERT INTO designconsultationrequest (clientID, designerID, roomTypeID, designCategoryID, roomWidth, roomLength, colorPrefrences, date, statusID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $clientId, $designerId, $roomTypeID, $categoryID, $roomWidth, $roomLength, $colorPreferences, $date, $statusId);
    
    if ($stmt->execute()) {
        header("Location: Clientpage.php");
        exit();
    } else {
        echo "Error: Unable to process your request. Please try again later.";
        // Log errors for debugging
        // error_log("Error executing SQL statement: " . $stmt->error);
    }
    $stmt->close();
}

$connection->close();
?> 

