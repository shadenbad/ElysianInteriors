<?php
session_start();
$projectID = $_GET['project_id'];

 // Create connection
 $servername = "sql208.infinityfree.com";
 $username = "if0_36485235";
 $password = "Ll112233Lll";
 $dbname = "if0_36485235_elysian_interiors";
 
 // Create connection
 $connection = mysqli_connect($servername, $username, $password, $dbname);
    
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

