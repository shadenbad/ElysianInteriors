User
this is the update handler page : <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start the session if not already started
session_start();

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $designCategory = $_POST['design-category']; 
    $projectID = $_POST['project_id'];
    $projectName = $_POST['project-name'];
    $description = $_POST['project-description'];

    // Check if the file upload field is set and not empty
    if (isset($_FILES["project-image"]) && $_FILES["project-image"]["error"] == 0) {
        $directory = "ProjectImages/"; 
        $timestamp = time(); // Get current timestamp
        $designerID = $_SESSION['user_id']; 
        $image_name = $designerID . "_" . $timestamp . "_" . basename($_FILES["project-image"]["name"]); 
        $file = $directory . $image_name;
        
        // Move uploaded file to the target directory
        if (move_uploaded_file($_FILES["project-image"]["tmp_name"], $file)) {
            echo "The file ". htmlspecialchars($image_name). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Database connection
    $servername = "sql313.infinityfree.com";
    $username = "if0_36485051";
    $password = "Ll112233Ll";
    $dbname = "if0_36485051_elysian_interiors";
    $connection = mysqli_connect($servername, $username, $password,  $dbname);
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Query to get category ID
    $sql1 = "SELECT id FROM DesignCategory WHERE category = '$designCategory'";
    $result1 = mysqli_query($connection, $sql1); 
    if (!$result1) {
        die("Query execution failed: " . mysqli_error($connection));
    }
    $row = mysqli_fetch_assoc($result1); 
    $categoryid = $row['id']; 

    // Update project in the database
    $query = "UPDATE DesignPortoflioProject SET projectName = '$projectName', description = '$description', designCategoryID = '$categoryid', projectImgFileName = '$image_name' WHERE id = '$projectID'";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query execution failed: " . mysqli_error($connection));
    }

    // Redirect to DesignerPage.php after successful update
    header("Location: DesignerPage.php");
    exit(); // Stop script execution
}
?>


