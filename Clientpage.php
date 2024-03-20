 
<?php

session_start();

// Check if the user is logged in or the type is client 
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'client') {
    header('Location: Homepage.html'); // Redirect to the home page if not logged in
    exit();
}

?>  

<!DOCTYPE html>
<html> 
  <head>
        <title> Client Homepage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                   
.links{padding-left: 0.1vw;
  padding-right: 3vw;
  background-color:#173021; }



footer{
  background-color: #173021;
  color: #BFB7B1;
  padding: 2vw; 
} 

footer p{
  color: #BFB7B1;
  font-weight: bold;
  font-size: 1.7vw;
  padding: 2px 11px;
  border-radius: 3px;
  background-color: #173021;
} 
   footer .rights{
  font-size: 0.8vw;
  padding: 1.3vw;
  color: #BFB7B1;
  background-color: #173021;
}     
   
/* to make it responsive */ 
.hamburger{
  display: none;
  cursor: pointer;
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
    margin-top: 4vw;
    margin-bottom: 5vw;
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

 .button1{
    border: #EDEBD7 solid 0.12vw;
    border-radius:0.9vw ;
    position: absolute;
    top: 12vw; 
    right: 1.5vw;
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
.B2{ 
   border-radius: 8px ; 
   background-color: #DDC22B;
   width: 9em;
   height: 2.7em; 
   border-color: #FFF ; }

 .B2 a{ color : #FFF ; 
   background-color: #DDC22B ;
    text-decoration: none ; }

 #category {
   text-align: left;
display: block ;
padding-top: 4vw;
padding-left: 4vw;
} 

#filter { color : #FFF ; 
border-radius: 8px ; 
   background-color: #3a5a40; 
   height: 2.3em; 
   width: 5em;} 


#filter:hover { 
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);}



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

.text-container {
    position: relative;
    display: inline-block;
    vertical-align: top;
    margin-left: 4vw;
    margin-top: 5vw;
    margin-bottom: 4vw;
}

.chairImg {
    position: absolute;
    top: 2vw;
    right: 11vw;
    width: 24.7vw;
    border-radius: 16vw;
    z-index: 3;
}

.clientInfo:hover{
  transform: scale(1.1);
}

.clientInfo{
    display: inline-block;
    text-align : center ; 
    background-color: #DDC22B;
    box-shadow: 0 5px 25px rgba(1 1 1 / 15%);
    padding: 25px;
    border-radius: 15px 50px;
    margin: 15px;
    min-height: 6em;
    width: 25em;
    overflow: hidden;
    transition: 0.7s;
  }
  
  h3{
    font-size: 1.8vw;
    font-family: DM Serif Display ;

 }
  
  .clientInfo p {
      background-color: #fff ;
      line-height: 200% ; 
  }
  
  .designerLogo{ 
     width: 10vw;
     background-color: #FFF ; 
  }
  
  .consultation{ 
     width: 12vw;
     background-color: #FFF ; 
  }
  
  .button {
  position: relative;
  overflow: hidden;
  height: 3.7vw;
  background-color: #173021;
  background-size: 100%;
  color: #BFB7B1;
  margin-top: 0.8vw;
  line-height: 4vw;
  font-size: 1.5vw;
  font-family: Playfair Display ;
  width: 10vw;
  padding-left: 0.5vw ; 
  padding-right: 1vw ; 
 

}
.button a {
  background-color: #173021;
  color: #BFB7B1;
  font-size: 1.5vw; 
  padding-left: 0.5vw ; 
  padding-right: 3vw ;
  padding-bottom: 0.5vw;
}



.button a:hover {
background-color:#BFB7B1;
color: black ; 
}

a {
    text-decoration: none; 
    color: black ; 
}

        </style>
    </head>   
    <body>
         <main> 
                   <header>  
           <div class="navigation">
                 
                   <img class="logo" src="images/logo.png" alt="logo image">
                   <div class="links">
                   <a href="Homepage.html" class="nav-link">Home | </a>
                   <a href="signup.html" class="nav-link">Sign Up | </a>
                   <a href="login.html" class="nav-link">Log In </a>
                   </div>
                   <br> 
                  <div class="button-container">
                            <a href="logoutPage.php">
                                <button class="button1">Log Out</button>
                            </a>
                        </div>
                    
           </div> 
            
            <div class="hamburger">
                 <span class="bar"></span>
                 <span class="bar"></span>
                 <span class="bar"></span>
            </div> 
        </header>     
            
                
                <div class="arch-container">
                <img class="chairImg" src="images/chair.jpeg" alt="chair">
                <div class="arch-shape"></div>
                <div class="text-container">
                    <div class="welcome">
                     <?php
                     
                     // Start the session
                           session_start();
                           $servername = "localhost";
                           $username = "root";
                           $password = "root";
                           $dbname = "elysian_interiors";

                           // Create connection
                           $connection = mysqli_connect($servername, $username, $password, $dbname);
                           if (mysqli_connect_error()) {
                             die("Connection failed: " . mysqli_connect_error());
                             }

                     // Check if session variables are set
                            if(isset($_SESSION['clientID']) ) {
                            $id = $_SESSION['clientID']; 
                            
                             
                             $sql = "SELECT * FROM client WHERE id='$id'"; 
                             $result = mysqli_query($connection,$sql);
                             $row = mysqli_fetch_assoc($result); 
                             
                             if($row != null ){
                           // Display client information
                            echo "<h3>Welcome,"." ".$row['firstName']." ".$row['lastName']."</h3>";
                            echo "<div class='clientInfo'>" ; 
                            echo " <p style='font-size: 120% ; font-weight: bolder;'>".$row['firstName']." ".$row['lastName']."<br>".$row['emailAddress']."</p>";
                            echo "</div>"; } 
                             
                             else {
                                echo " <p style='font-size: 120% ; font-weight: bolder;'>Please log in to view your information!! </p>";

                             }
                            }
                             
                        ?>
                </div>
            </div>
                </div> 
  
        <form action="Clientpage.php" method="POST" id="category"> 
            <label> Select Category 
                <select id="desidnCategoryFilter" name="selectCategory"> 
                    
                    <?php 
                    $sqlCate = "SELECT * FROM designcategory" ; 
                    $resultCate = mysqli_query($connection, $sqlCate) ; 
                    if($resultCate->num_rows>0){
                        while($row = mysqli_fetch_assoc($resultCate)){
                            echo "<option value='".$row['id']."'>".$row['category']."</option>"; 
                        }
                    }

                    ?> 
                </select> 
            </label> 
            
            
            <button type="submit"id="filter"> Filter </button> 
            
        </form>
             <?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve selected category
    $category = $_POST['selectCategory'];
    header("Location:{$_SERVER['PHP_SELF']}?category=$category"); 
exit ; } 

if (isset($_GET['category'])){
    $category = $_GET['category']; 
   
     $sql_designers = "SELECT d.*, GROUP_CONCAT(dc.category SEPARATOR ', ') AS specialties FROM Designer d
                            LEFT JOIN DesignerSpeciality ds ON d.id = ds.designerID
                            LEFT JOIN DesignCategory dc ON ds.designCategoryID = dc.id
                            WHERE dc.id = $category
                            GROUP BY d.id";
     
}
    
    else {
    $sql_designers = "SELECT d.*, GROUP_CONCAT(dc.category SEPARATOR ', ') AS specialties FROM Designer d
                        LEFT JOIN DesignerSpeciality ds ON d.id = ds.designerID
                        LEFT JOIN DesignCategory dc ON ds.designCategoryID = dc.id
                        GROUP BY d.id";
} 

$result_designers = mysqli_query($connection, $sql_designers);

 echo "<table>
             <caption>Interior Designers</caption>
                <tr>
                    <th>Designer</th>
                    <th>Specialty</th>
                    <th>Request Consultation</th> 
                </tr>";
 
 if ($result_designers->num_rows > 0) {
            // Loop through each designer and display them in the table
            while ($row = mysqli_fetch_assoc($result_designers)) {
                echo "<tr> <br> <br>";
                echo "<td ><a href='portfolio.php?id=".$row['id']."'><img class='designerLogo' src='ProjectImages/".$row['logoImgFileName']."' alt='Designer Logo'>"."<br>".$row['brandName']."</a></td>";
                echo "<td>" . $row['specialties'] . "</td>";
                echo '<td><button class="B2"><a href="req.php?id=' . $row["id"] . '">Request Design Consultation</a></button></td>';
                echo "</tr>";
            }
        }
        
        else {
            // If no designers found
            echo "<tr><td colspan='3'>No designers found.</td></tr>";
        }

        echo "</table>"; 
?>

 <?php 
   echo "<table border='1'>
            <tr>
                <th>Designer</th>
                <th>Room</th>
                <th>Diemnsions</th>
                <th>Design Category</th>
                <th>Color Preferences</th>
                <th>Request Date</th> 
                <th>Design Consultation</th>
            </tr>"; 
   
   // $clientID = 100000000 ;
// $clientID = $_SESSION['id'];
$sql_requests = "SELECT
    dcr.*, 
    rt.type AS roomType,
    rs.status,
    dc.category,
    d.logoImgFileName
FROM
    designconsultationrequest AS dcr
LEFT JOIN
    RoomType AS rt ON dcr.roomTypeID = rt.id
LEFT JOIN
    RequestStatus AS rs ON dcr.statusID = rs.id
LEFT JOIN
    DesignCategory AS dc ON dcr.designCategoryID = dc.id
LEFT JOIN
    designer AS d ON dcr.designerID = d.id  
WHERE
    dcr.clientID = $clientID";

// Execute the query to fetch requests
$result_requests = $connection->query($sql_requests);

// Check if requests are retrieved
if ($result_requests->num_rows > 0) {
    // Loop through each request and display them in the table
    while ($row = $result_requests->fetch_assoc()) {
        echo "<tr>";
        // Designer's logo and brand name
        echo "<td ><a href='portfolio.php?id=".$row['id']."'><img class='designerLogo' src='ProjectImages/".$row['logoImgFileName']."' alt='Designer Logo'>"."<br>".$row['brandName']."</a></td>";
        echo "<td>{$row['roomType']}</td>";
        echo "<td>{$row['roomWidth']}x{$row['roomLength']}</td>";
        echo "<td>{$row['category']}</td>";
        echo "<td>{$row['colorPrefrences']}</td>";
        echo "<td>{$row['date']}</td>";

        echo "<td>{$row['status']}</td>";
        echo "</tr>";
    }
}
    else {
    // If no requests found
    echo "<tr><td colspan='7'>No design consultation requests found.</td></tr>";
}

echo "</table>"
       ?> 
             
                
                     <footer style="margin-bottom: 0 ; margin-top:10%">
             <em style="background-color:#173021;">Contact Us </em>
     <p style="margin: 0.75vw; font-size: small;">(Contact@ElysianInteriors.sa)</p>
     <small class="rights">
         © Elysian Interiors 2024. All rights reserved.
     </small> 
 </footer>
        
        </main>
                  <script>
    const hamburger = document.querySelector(".hamburger");
    const navigation = document.querySelector(".navigation");

    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        navigation.classList.toggle("active");
    })

    document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
        hamburger.classList.remove("active");
        navigation.classList.remove("active");

    })) 
    </script>
        </body>
           </html>  
