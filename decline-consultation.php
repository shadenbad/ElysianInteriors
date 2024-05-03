// PHP part in decline-consultation.php
<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'designer') {
    // Redirect if unauthorized access
    header('Location: login.php');
    exit();
}
ini_set('display_errors', 1);
error_reporting(E_ALL);

$requestId = filter_input(INPUT_POST, 'requestId', FILTER_VALIDATE_INT);
$response = ['success' => false];

if ($requestId) {
    include 'db_connect.php'; // Ensure your database connection is handled in this file
    $stmt = $connection->prepare("UPDATE designconsultationrequest SET statusID = ? WHERE id = ?");
    $declinedStatusId = 100000002; // Example status ID for 'Consultation Declined'
    
    if ($stmt) {
        $stmt->bind_param('ii', $declinedStatusId, $requestId);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            $response['success'] = true;
        } else {
            $response['message'] = 'No changes made to the database.';
        }
        $stmt->close();
    } else {
        $response['message'] = 'Database error: ' . $connection->error;
    }
    $connection->close();
} else {
    $response['message'] = 'Invalid request ID.';
}

header('Content-Type: application/json');
echo json_encode($response);
exit;
?>
