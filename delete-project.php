<?php
session_start();
$projectID = $_GET['project_id'];

 // Create connection
 $servername = "sql313.infinityfree.com";
 $username = "if0_36485051";
 $password = "Ll112233Ll";
 $dbname = "if0_36485051_elysian_interiors";
 
 // Create a connection
 $connection = new mysqli($host, $username, $password, $database);
    
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

