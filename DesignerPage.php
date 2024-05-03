<?php

session_start();

// Check if the user is logged in or the type is client 
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'designer') {
    header('Location: Homepage.php'); // Redirect to the home page if not logged in
    exit();
}
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>  
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Kalam:wght@300;400;700&family=Lobster&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <title>Designer Homepage</title>
     
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

 h3{
    font-size: 1.8vw;
    font-family: DM Serif Display ;
 }
.message {
    font-size: 1.6vw;
    margin: 3.5vw 2vw 2vw;
    margin-right: 36vw;
    line-height : 1.7vw;
    font-family: kalam ;
} 
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
.designerinfo{
    display: inline-block;
    text-align : center ; 
    background-color: #DDC22B;
    box-shadow: 0 5px 25px rgba(1 1 1 / 15%);
    border:#FEFEFA solid 0.1vw;
    border-radius: 1.2vw 4vw;
    padding: 2vw 2vw;
    margin: 2vw 4.5vw;
    min-height: 6em;
    width: 34vw;
    overflow: hidden;
    transition: 0.7s;
    line-height : 200%; 
    color : black ; 
}

.designerinfo p {
  background-color: #DDC22B;
  font-size: 1.3vw;
  font-weight: bold;
  font-family: PT Serif ;
}

.designerinfo:hover{
  transform: scale(1.05);
}

.text-container {
    position: relative;
    display: inline-block;
    vertical-align: top;
    margin-left: 2vw;
}

.chairImg {
    position: absolute;
    top: 2vw;
    right: 11vw;
    width: 24.7vw;
    border-radius: 16vw;
    z-index: 3;
}
.brandlogo{
    width: 21vw;
}

.Speciality{
    text-align: center;
    line-height: 3vw;
    height: 3vw;
    width: 22vw;
    box-shadow: 0 5px 25px rgba(1 1 1 / 15%);
    border-radius: 6vw;
    background-color: #EDEBD7;
    margin-left: auto;
    margin-right: auto; 
    font-size: 1.2vw;
    font-family: PT Serif ;
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

/*Desgin consultation style*/
.consultation{
    margin-top: 8vw;
    margin-bottom: 11vw;
}

.consultation a:link, a:visited {
  text-decoration: none;
}

.consultation a:hover {
  text-decoration: none;
  color: #274C35;
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
.tableport{
    width: 88%;
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

 
.B2 decline{ 
   border-radius: 8px ; 
   background-color: #DDC22B;
   width: 9em;
   height: 3.2em; 
   border-color: #FFF ; 
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
                <a href="signup.php" class="nav-link">Sign Up | </a>
                <a href="login.php" class="nav-link">Log In </a>
                </div> 
                <br> 
         </div> 
        </header>

        <main>
            
            <div class="arch-container">
                <img class="chairImg" src="images/chair.jpeg" alt="chair image">
                <div class="arch-shape"></div>
                <div class="text-container">
                    <div class="welcome">
                        
                        <?php 
                        session_start(); 
                        $connection = mysqli_connect("localhost", "root", "root", "elysian_interiors");
                         
                            
                            $id = $_SESSION['user_id']; 
                            
                            if(mysqli_connect_error()){
                                 die("Connection failed: " . mysqli_connect_error());
                            }
                            else {
                                $sql="SELECT * FROM designer WHERE id='$id'";
                                $result= mysqli_query($connection, $sql);
                                $row= mysqli_fetch_assoc($result);
                                
                                echo '<h3>Welcome '.$row["firstName"].'</h3>';
                            } 
                        ?>
                         <div class="button-container">
                            <a href="logoutPage.php">
                                <button class="button1">Log Out</button>
                            </a>
                         </div>
                         <p class="message">Unleash your design powers, craft captivating spaces.</p> 
                    </div>
                    <div class="designerinfo">
                        <?php
                             
                                $sql="SELECT * FROM designer WHERE id='$id'";
                                $result= mysqli_query($connection, $sql);
                                $row= mysqli_fetch_assoc($result);
                                
                                //display designer info
                                echo '<p>'.$row["firstName"].''.$row["lastName"].'<br>'.$row["emailAddress"].'<br><img class="brandlogo" src="ProjectImages/' . $row['logoImgFileName'] . '" alt="designer\'s logo"> <br>'.'Speciality :';
                               $mysql = "SELECT dc.category
                                         FROM Designer d
                                         INNER JOIN DesignerSpeciality ds ON d.id = ds.designerID
                                         INNER JOIN DesignCategory dc ON ds.designCategoryID = dc.id
                                         WHERE d.id = $id";        
                               $re = mysqli_query($connection, $mysql);
                               $numRows = mysqli_num_rows($re); // Get the total number of rows
    
                               echo '<div class="Speciality">';
                               $i = 1; // Initialize counter
                               while ($row = mysqli_fetch_assoc($re)) {
                                  echo $row["category"];
        
                                   if ($i !== $numRows) { // Check if it's not the last iteration
                                     echo ' - ';
                                    }
                                    $i++; // Increment counter
                                }
                                echo '</div></p>';
                            ?>
                    </div>
                    
                </div>
            </div>

            <div class="portfolio">
                <table class="tableport">
                    <caption> Design Portfolio </caption>
                    <div class="button-container">
                        <a href="add.php">
                            <button class="button2">Add New Project</button>
                        </a>
                    </div>
                    <tr>
                        <th>Project Name</th>
                        <th>Image</th>
                        <th>Design Category</th>
                        <th class="last-cell-with-color">Description</th>
                        <th class="empty-cell"></th>
                        <th class="empty-cell"></th>
                    </tr>
                    
                        <?php
                        $sql = "SELECT dp.id, dp.projectName, dp.description, dc.category AS designCategory, dp.projectImgFileName
                                FROM designportoflioproject dp
                                INNER JOIN designcategory dc ON dp.designCategoryID = dc.id
                                WHERE dp.designerID = '$id'";
                        $result= mysqli_query($connection, $sql);
                        if ($result->num_rows > 0) {
                             // Display projects
                            while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td class="bottomRadiusLeft">' . $row["projectName"] . '</td>';
                            echo '<td><img class="tableimage" src="ProjectImages/'.$row['projectImgFileName'].'" alt="sun house image"></td>';
                            echo '<td>'.$row["designCategory"].'</td>';
                            echo '<td>'.$row["description"].'</td>';
                            echo '<td><button class="B2"><a href="Update.php?project_id=' . $row['id'] . '">Edit</a></button></td>';
                            echo '<td class="bottomRadiusRight"><button class="B2"><a href="delete-project.php?project_id=' . $row['id'] . '">Delete</a></button></td>';    
                            echo '</tr>';
                        }
                        
                        } 
                        
                        else {
            // If no designers found
            echo "<tr><td colspan='4'>No Projects found.</td></tr>";
        }
                      
                        ?>
                    
                </table>
            </div> 
            
            
            <div class="consultation">
                <table>
                    <caption> Design Consultation Requests </caption>
                    <tr>
                        <th>Client</th>
                        <th>Room</th>
                        <th>Dimensions</th>
                        <th>Design Category</th>
                        <th>Color Preferences</th>
                        <th class="last-cell-with-color">Date</th>
                        <th class="empty-cell"></th>
                        <th class="empty-cell"></th>
                    </tr>
                    
                    <?php
    // Assuming $connection is properly initialized and connected to your database
     $sql = "SELECT dcr.id AS requestID, c.firstName AS clientFName, c.lastName AS clientLName, rt.type AS roomType, dcat.category AS designCategory, dcr.roomWidth, dcr.roomLength, dcr.colorPrefrences, dcr.date
            FROM designconsultationrequest dcr
            INNER JOIN client c ON dcr.clientID = c.id
            INNER JOIN roomtype rt ON dcr.roomTypeID = rt.id
            INNER JOIN designcategory dcat ON dcr.designCategoryID = dcat.id
            WHERE dcr.designerID = ? AND dcr.statusID NOT IN (SELECT id FROM requeststatus WHERE status IN ('Consultation Declined', 'Consultation Provided'))"; 
    
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute(); 
    $result = $stmt->get_result(); 
                        
                        if ($result->num_rows > 0) {
                        
                        while ($row = mysqli_fetch_assoc($result)) {
                            
                            echo '<tr>';
                            echo '<td class="bottomRadiusLeft">'. $row["clientFName"].' '.$row["clientLName"]. '</td>';
                            echo '<td>' . $row["roomType"] . '</td>';
                            echo '<td>' . $row["roomWidth"] . 'x' . $row["roomLength"] . '</td>';
                            echo '<td>' . $row["designCategory"] . '</td>';
                            echo '<td>' . $row["colorPrefrences"] . '</td>';
                            echo '<td>' . $row["date"] . '</td>';
                            echo '<td><button class="B2"><a href="con1.php?request_id=' . $row['requestID'] . '">Provide Consultation</a></button></td>';
                            echo '<td class="bottomRadiusRight"><button class="B2 decline" data-id="' . $row['requestID'] . '">Decline Consultation</button></td>';


                            echo '</tr>';
                        }
                        } 
                        
                       
                             else {
    // If no requests found
    echo "<tr><td colspan='7'>No design consultation requests found.</td></tr>";
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
// JavaScript part on the DesignerPage.php
$(document).ready(function() {
    $('.decline').on('click', function() {
        var requestId = $(this).data('id'); // Assumes data-id attribute holds the request ID
        if (confirm('Are you sure you want to decline this consultation request?')) {
            $.ajax({
                url: 'decline-consultation.php',
                type: 'POST',
                data: {requestId: requestId},
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        alert('Consultation declined successfully.');
                        // Remove the row on success
                        $('button[data-id="' + requestId + '"]').closest('tr').remove();
                    } else {
                        alert('Failed to decline the consultation. ' + (response.message || ''));
                    }
                },
                error: function() {
                    alert('Error processing your request.');
                }
            });
        }
    });
});

</script>
    </script>
