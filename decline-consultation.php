<?php
session_start();

$requestId = $_GET['request_id'];

// Create connection
$connection = mysqli_connect("localhost", "root", "root", "elysian_interiors");

if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE designconsultationrequest SET statusID = 100000002 WHERE id = ?";
$stmt = $connection->prepare($sql);

if ($stmt) {
    $stmt->bind_param("i", $requestId);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo 'true';  // Send 'true' if the update was successful
        // Redirect to designer homepage using JavaScript
        echo '<script>window.location.href = "DesignerPage.php";</script>';
    } else {
        echo 'false';  // Send 'false' if the update failed
    }

    $stmt->close();
} else {
    echo 'false';  // Send 'false' if the statement preparation failed
}

$connection->close();
?>