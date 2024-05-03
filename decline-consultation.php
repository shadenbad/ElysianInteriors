<?php

include 'con1.php'; 

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

$requestId = isset($_GET['requestId']) ? $_GET['requestId'] : null;

if ($requestId) {
    $sql = "UPDATE design_consultations SET status = 'consultation declined' WHERE id = ?";

    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("i", $requestId);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo json_encode(true);
        } else {
            echo json_encode(false);  // No rows updated
        }
        $stmt->close();
    } else {
        echo json_encode(false);  // Statement preparation failed
    }
    $conn->close();
} else {
    echo json_encode(false);  // No requestId provided
}
?>
