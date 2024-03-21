<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>

    <body>
        <?php
        // put your code here
        session_start();
error_reporting(E_ALL);
ini_set('log_errors', '1');
ini_set('display_errors', '1');
include 'db.php'; // Your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $userType = $_POST['user-type'];

    $table = $userType === "designer" ? "designer" : "client";
    
    $stmt = $conn->prepare("SELECT id, password FROM $table WHERE emailAddress = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_type'] = $userType;
            $redirectPage = $userType === "designer" ? "DesignerPage.php" : "Clientpage.html";
            header("Location: $redirectPage");
            exit();
        }
    }

    // Login failed
    header("Location: login.php?error=invalid_credentials");
    exit();
}

// Redirect back if accessed directly without posting form data
header("Location: login.php");
exit();
        ?>
     

   







</html>
