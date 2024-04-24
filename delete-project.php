<?php
session_start();
$projectID = $_GET['project_id'];

 // Create connection
    $connection = mysqli_connect("localhost", "root", "root", "elysian_interiors");
    
    if(mysqli_connect_error()){
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "DELETE FROM DesignPortoflioProject WHERE id = '$projectID'";

// Execute the query
if (mysqli_query($connection, $sql)) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
}
mysqli_close($connection);
?>

