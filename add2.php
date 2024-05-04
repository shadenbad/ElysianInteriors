<?php
session_start();

// Check if the user is logged in as a designer
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'designer') {
    header('Location: Homepage.php'); // Redirect to the home page if not logged in
    exit();
}

error_reporting(E_ALL);
ini_set('log_errors', '1');
ini_set('display_errors', '1');

$servername = "sql208.infinityfree.com";
$username = "if0_36485235";
$password = "Ll112233Lll";
$dbname = "if0_36485235_elysian_interiors";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_error()) {
die("Connection failed: " . mysqli_connect_error()); }
else {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $name = $connection->real_escape_string( $_POST['project-name']);
        $category = $connection->real_escape_string($_POST['design-category']);
        $description = $connection->real_escape_string( $_POST['project-description']);

        $directory = "ProjectImages/"; 
        $timestamp = time(); // Get current timestamp
        $designer_id = $_SESSION['user_id']; 
        $image_name = $designer_id . "" . $timestamp . "" . basename($_FILES["project-image"]["name"]); 
        $file = $directory . $image_name;
        
        // Move uploaded file to the target directory
        if (move_uploaded_file($_FILES["project-image"]["tmp_name"], $file)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["project-image"]["name"])). " has been uploaded.";
         } else {
          echo "Sorry, there was an error uploading your file.";
           }

           // Prepare SQL statement to retrieve the ID of the design category
    $sql1 = "SELECT id FROM DesignCategory WHERE category = '$category'";

    // Execute SQL statement
    $result = mysqli_query($connection, $sql1);

    if (mysqli_num_rows($result) > 0) {
        // Fetch the result row
        $row = mysqli_fetch_assoc($result);
        // Get the design category ID
        $designCategory_id = $row['id'];
    }

    // Prepare SQL statement
    $sql = "INSERT INTO DesignPortoflioProject (designerID, projectName, projectImgFileName, description, designCategoryID) 
            VALUES ('$designer_id', '$name', '$image_name', '$description', '$designCategory_id')";

    // Execute SQL statement
    if (mysqli_query($connection, $sql)) {
        // Redirect to designer's homepage
        header("Location: DesignerPage.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
    // Close database connection
    mysqli_close($connection);

    }    
}
?>