<?php
// Start the session
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "elysian_interiors";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if session variables are set
if (isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];

    // Check if a category is provided in the request
    if (isset($_GET['category'])) {
        $category = $_GET['category'];

        $sql_designers = "SELECT d.*, GROUP_CONCAT(dc.category SEPARATOR ', ') AS specialties 
        FROM Designer d
        LEFT JOIN DesignerSpeciality ds ON d.id = ds.designerID
        LEFT JOIN DesignCategory dc ON ds.designCategoryID = dc.id
        WHERE dc.id = $category
        GROUP BY d.id";

    } else {
        // If no category is provided, fetch all designers
        $sql_designers = "SELECT d.*, GROUP_CONCAT(dc.category SEPARATOR ', ') AS specialties 
        FROM Designer d
        LEFT JOIN DesignerSpeciality ds ON d.id = ds.designerID
        LEFT JOIN DesignCategory dc ON ds.designCategoryID = dc.id
        GROUP BY d.id";
    }

    $result_designers = mysqli_query($connection, $sql_designers);

    // Check if designers are retrieved
    if ($result_designers->num_rows > 0) {
        // Create an array to hold designers' data
        $designersData = array();

        while ($row = mysqli_fetch_assoc($result_designers)) {
            // Add each designer's data to the array
            $designersData[] = $row;
        }

        // Send designers' data as JSON response
        header('Content-Type: application/json');
        echo json_encode($designersData);
    } else {
        // If no designers found for the category
        echo json_encode(array());
    }
} else {
    // If user is not logged in, return empty response
    echo json_encode(array());
}
?>