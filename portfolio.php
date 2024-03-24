<!DOCTYPE html>
<?php 
 include 'db.php'; 
 
session_start();
 error_reporting(E_ALL);
       ini_set('log_errors','1');
       ini_set('display_errors','1');

// Check if the user is logged in or the type is client 
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'client') {
    header('Location: Homepage.php'); // Redirect to the home page if not logged in
    exit();
}?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Kalam:wght@300;400;700&family=Lobster&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <title>Designer portfolio Page</title>
        <style>

html, body {
margin: 0;
padding: 0;
}

body{
    background-color: #FCFCF6;
}

/*navigation style */
.logo { 
width: 11%  ;
height: 9% ;
float: right; }

.navigation {
overflow: hidden;
background-color: #173021;
color: #BFB7B1;
}
.navigation img {
float: right;
}

.navigation a:hover { 
  background-color: #0b140f ;
  color: #FFF ;
}

.navigation a {
  display: inline ; 
  color: var(--clr-headingText);
  text-decoration: none;
  font-weight: 500;
  line-height: 400% ; 
  font-size: 1.7vw;
}

.navigation{
  padding-left: 3vw;
  padding-right: 3vw;
  padding-bottom: 1vw;
}

/*button style*/

.button1{
    border: #EDEBD7 solid 0.12vw;
    border-radius:0.9vw ;
    position: absolute;
    top: 2vw; 
    right: -20vw;
    background-color: #FEFEFA;
    box-shadow: 0 5px 25px rgba(1 1 1 / 15%);
    color: black;
    z-index: 3;
    width: 6vw;
    height: 2vw;
    font-size: 1.15vw;
    font-family: PT Serif ;
} 
 
  .button1:hover {
   box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
 }
        
 /* welcome style*/


.arch-container {
    position: relative;
    padding-bottom: 5vw;
}

.arch-shape {
    position: absolute;
    top: 0vw;
    right: -1vw;
    width: 24vw;
    height: 38vw;
    background-color: #173021;
    border-top-left-radius: 16vw;
    border-top-right-radius: 16vw;
    transform: rotate(180deg);
    z-index: 1;
    margin-right: 5vw;
}


.chairImg {
    position: absolute;
    top: 2vw;
    right: 11vw;
    width: 24.7vw;
    border-radius: 16vw;
    z-index: 3;
}


/*Desgin protofilo style */

.button2{
    border: #FEFEFA solid 0.12vw;
    border-radius: 1.4vw ;
    position: absolute;
    right: 10vw;
    background-color: #FEFEFA;
    box-shadow: 0 5px 25px rgba(1 1 1 / 15%);
    color: black;
    z-index: 3;
    width: 11vw;
    height: 2.7vw;
    font-size: 1.15vw;
    font-family: PT Serif ;
}

.portfolio{
    margin-top: 40vw;
    margin-bottom: 10vw;
}


/* tables style*/
table {
    border-collapse: separate;
    border-spacing: 0;
    margin-left: auto;
    margin-right: auto;  
    border-radius: 1.5vw;
    font-size: 1.2vw;
    font-family: PT Serif ;
    box-shadow: -2vw 2vw 3vw #E5E4E4;
}


th {
    background-color: #3a5a40;
    color: white;
    text-align: center;
    padding: 1vw;
  }

th.empty-cell {
    display: none;
}

td{
    text-align: center;
    padding: 0.8vw;
    background-color: #ffffff; 
}

th:first-child {
    border-top-left-radius: 1.5vw;
}

th:last-child {
    border-right: hidden;
}

.last-cell-with-color {

    border-top-right-radius: 1.5vw;

}

.bottomRadiusLeft{
    border-bottom-left-radius: 1.5vw;
}

.bottomRadiusRight{
    border-bottom-right-radius: 1.5vw;
}

caption{ 
    line-height: 3.4vw;
    font-size: 1.7vw ; 
    font-weight: bold ; 
    text-align: left;
}

.B2{ 
   border-radius: 8px ; 
   background-color: #DDC22B;
   width: 9em;
   height: 3.2em;
   border-color: #FFF ; 
}

.B2 a{ color : #FFF ; 
   background-color: #DDC22B ;
    text-decoration: none ;
    font-size: 1.1vw;
    font-family: PT Serif ;
 }

.tableimage{
    width: 14vw;
}

/*footer style*/
footer{
  background-color: #173021;
  color: #BFB7B1;
  padding: 2vw; 
  margin-top: 0;
} 

footer p{
  color: #BFB7B1;
  font-weight: bold;
  font-size: 1.7vw;
  padding: 2px 11px;
  border-radius: 3px;
} 
footer .rights{
  font-size: 0.8vw;
  padding: 1.3vw;
  color: #BFB7B1;
}  
        </style>
    </head>

    <body>
        <header>
            <div class="navigation">
                <div class="links"> 
                <img class="logo" src="images/logo.png" alt="logo image">
                <a href="Homepage.php" class="nav-link">Home | </a>
                <a href="SignUp.php" class="nav-link">Sign Up | </a>
                <a href="LogIn.php" class="nav-link">Log In </a>
                </div> 
                <br> 
         </div> 
        </header>

        <!-------------------------------------------------------------------------------------------------------->
        
        <main>
            
            
            <div class="arch-container">
                <img class="chairImg" src="images/chair.jpeg" alt="chair">
                <div class="arch-shape"></div>
                
            </div>

            <div class="portfolio">
                <table>
                    <caption> Design Portfolio </caption>
                 
                    <tr>
                        <th>Project Name</th>
                        <th>Image</th>
                        <th>Design Category</th>
                        <th class="last-cell-with-color">Description</th>
                        <th class="empty-cell"></th>
                        <th class="empty-cell"></th>
                    </tr>
                    
                    <?php 
                    
if (isset($_GET['id'])) {
$designerId = $_GET['id']; } 
    
    

// Prepare and bind the parameter
$stmt = $conn->prepare("
    SELECT 
        dp.projectName, 
        dp.projectImgFileName, 
        dc.category AS categoryName, 
        dp.description 
    FROM 
        designportoflioproject dp 
    INNER JOIN 
        designcategory dc 
    ON 
        dp.designCategoryID = dc.id 
    WHERE 
        dp.designerID = ?
");
$stmt->bind_param("i", $designerId); // Assuming designerID is an integer

// Execute the statement
$stmt->execute();

// Get the results
$result = $stmt->get_result();

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Loop through the rows and display or use the data as needed
    while ($row = $result->fetch_assoc()) {
        echo "<tr>"; 
        echo "<td>". $row['projectName'] . "</td>";
        echo "<td><img src='ProjectImages/".$row['projectImgFileName']."' alt='Project Image' style='width:100px;'></td>";
        echo "<td>" . $row['categoryName'] . "</td>";
        echo "<td>" . $row['description'] . "</td></tr>";

    }
// Close the statement
$stmt->close();
} else {
    echo "<tr><td colspan='4'>No designer ID provided.</td></tr>";
}
?>

                    
                </table>
            </div>

           
        </main>

        <footer style="margin-bottom: 0 ; margin-top:10%">
           <em>Contact Us </em>
           <p style="margin: 0.75vw; font-size: small;">(Contact@ElysianInteriors.sa)</p>
           <small class="rights">
            © Elysian Interiors 2024. All rights reserved.
           </small> 
        </footer>
    </body>

</html>