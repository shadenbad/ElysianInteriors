<?php

$projectID = $_GET['project_id'];

    $connection = mysqli_connect("localhost", "root", "root", "elysian_interiors");
    
    if(mysqli_connect_error()){
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "DELETE FROM DesignPortoflioProject WHERE id = '$projectID'";

if (mysqli_query($connection, $sql)) {
    header("Location: DesignerPage.php"); 
    exit;
} else {
    echo "Error deleting project: " . mysqli_error($connection);
}

?>