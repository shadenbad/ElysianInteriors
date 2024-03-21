<?php

session_start();
error_reporting(E_ALL);
ini_set('log_errors', '1');
ini_set('display_errors', '1');
include 'db.php'; // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $conn->real_escape_string($_POST['first-name']);
    $lastName = $conn->real_escape_string($_POST['last-name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Securely hash the password
    $brandName = $conn->real_escape_string($_POST['brand-name']);

    // Check if the email is already registered
    $emailCheckStmt = $conn->prepare("SELECT id FROM designer WHERE emailAddress = ?");
    $emailCheckStmt->bind_param("s", $email);
    $emailCheckStmt->execute();
    $emailCheckResult = $emailCheckStmt->get_result();
    if ($emailCheckResult->num_rows > 0) {
        header("Location: signup.php?error=email_exists");
        exit();
    }

    $imgName = 'default_logo.png'; // Default image name in case file upload fails
    if (isset($_FILES['logo']) && $_FILES['logo']['error'] == 0) {
        $folder = "ProjectImages/";
        if (!is_dir($folder)) { // Check if the directory exists
            mkdir($folder, 0777, true); // Create directory if not exists
        }
        $time = time();
        $imgName = $time . "_" . basename($_FILES["logo"]["name"]);
        $file = $folder . $imgName;

        if (!move_uploaded_file($_FILES["logo"]["tmp_name"], $file)) {
            die("Error: There was a problem uploading the image file.");
        }
    }

    // Now proceed to insert the designer with the $imgName being set to either the uploaded file's name or the default
    $stmt = $conn->prepare("INSERT INTO designer (firstName, lastName, emailAddress, password, brandName, logoImgFileName) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $firstName, $lastName, $email, $password, $brandName, $imgName);

    if ($stmt->execute()) {
        $designerId = $stmt->insert_id;

        // Insert designer specialities
        if (isset($_POST['specialities']) && is_array($_POST['specialities'])) {
            $stmtSpeciality = $conn->prepare("INSERT INTO designerspeciality (designerID, designCategoryID) VALUES (?, ?)");
            foreach ($_POST['specialities'] as $specialityId) {
                $stmtSpeciality->bind_param("ii", $designerId, $specialityId);
                $stmtSpeciality->execute();
            }
        }

        $_SESSION['user_id'] = $designerId;
        $_SESSION['user_type'] = 'designer';
        header("Location: DesignerPage.php");
        exit();
    } else {
        die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    }
} else {
    echo "Error: Invalid request method.";
}

?>
