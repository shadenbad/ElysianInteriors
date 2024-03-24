<?php

$projectID = $_GET['project_id'];

 // Create connection
    $connection = mysqli_connect("localhost", "root", "root", "elysian_interiors");
    
    if(mysqli_connect_error()){
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "DELETE FROM DesignPortoflioProject WHERE id = '$projectID'";

// Execute the query
if (mysqli_query($connection, $sql)) {
    // Project deleted successfully, redirect to the designer's homepage
    header("Location: DesignerPage.php"); // Update with the correct page name
    exit;
} else {
    echo "Error deleting project: " . mysqli_error($connection);
}

?>