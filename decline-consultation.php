<?php


$servername = "sql208.infinityfree.com";
$username = "if0_36485235";
$password = "Ll112233Lll";
$dbname = "if0_36485235_elysian_interiors";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);
    
    if(mysqli_connect_error()){
      die("Connection failed: " . mysqli_connect_error());
    } 

$requestId = $_GET['request_id'];

$sql = "UPDATE designconsultationrequest SET statusID = 100000002 WHERE id = ?";
$stmt = $connection->prepare($sql);

if ($stmt) {
    $stmt->bind_param("i", $requestId);
    $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo json_encode(true);
            echo '<script>window.location.href = "DesignerPage.php";</script>';

        } else {
            echo json_encode(false);  // No rows updated
        }
        $stmt->close();
    } else {
        echo json_encode(false);  // Statement preparation failed
    }
    $connection->close();
?>

