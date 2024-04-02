<?php


  $connection = mysqli_connect("localhost", "root", "root", "elysian_interiors");
    
    if(mysqli_connect_error()){
      die("Connection failed: " . mysqli_connect_error());
    }
    
$requestID = $_GET['request_id'];

$query = "UPDATE DesignConsultationRequest SET statusID = 100000002  WHERE id = '$requestID'";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query execution failed: " . mysqli_error($connection));
}

header("Location: DesignerPage.php");
?>