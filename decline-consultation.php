<?php


  $connection = mysqli_connect("localhost", "root", "root", "elysian_interiors");
    
    if(mysqli_connect_error()){
      die("Connection failed: " . mysqli_connect_error());
    }
    
// Step 2: Retrieve the request ID from the query parameter
$requestID = $_GET['request_id'];

// Step 3: Update the request status to "consultation declined"
$query = "UPDATE DesignConsultationRequest SET statusID = 100000002  WHERE id = '$requestID'";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query execution failed: " . mysqli_error($connection));
}

// Step 4: Redirect back to the designer's page
header("Location: DesignerPage.php");
?>