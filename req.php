<!DOCTYPE html>
<html>
    <?php


    session_start();
    if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'client') {
    header('Location: Homepage.php'); // Redirect to the home page if not logged in
    exit();
}


 error_reporting(E_ALL);
       ini_set('log_errors','1');
       ini_set('display_errors','1');
?>  
    
<head>
  <meta charset="UTF-8">
  <title>Request Design Consultation</title>
  <link rel="stylesheet" href="req1.css">
    <style>        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #FCFCF6;
        }

        html, body {
            margin: 0;
            padding: 0;
        }


        .navigation {
            overflow: hidden;
            background-color: #173021;
            color: #BFB7B1;
        }

        .hamburger {
            display: none;
            cursor: pointer;
        }

        .navigation img {
            float: right;
        }

        .navigation a:hover {
            background-color: #0b140f;
            color: #FFF;
        }

        .navigation a {
            display: inline;
            color: var(--clr-headingText);
            text-decoration: none;
            font-weight: 500;
            line-height: 400%;
            font-size: 1.7vw;
        }

        .navigationP1 {
            padding-left: 3vw;
            padding-right: 3vw;
        }


        .logo {
            width: 11%;
            height: 9%;
            float: right;
        }



        form {
            width: 400px;
            height: 560px;
            padding: 100px 40px 0px 40px;
            background-color: #59574740;
            border: 1px solid #ccc;
            margin-left: 20%;
            margin-top: 8%;
            border-radius: 15% 15% 15% 0;
            background-image: url(images/dec5.png);
            background: linear-gradient(to right, #4cbd72, #bdcdc3) url(images/dec2.png);
            margin-top: -12%;
            margin-bottom: 10%;
        }

        h2 {
            text-align: center;
            color: #000000;
        }

        label {
            display: block;
            margin-top: 20px;
            color: #000000;
        }


        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 20px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            background-color: #f3f1f1;
            border-radius: 10px;
        }

        button[type="submit"] {
            background-color: #e6ce35e5;
            color: #fff;
            padding: 10px 20px;
            margin-left: 1%;
            margin-top: 30px;
            border: none;
            cursor: pointer;
            border-radius: 0% 3% 32% 0%;
        }

            button[type="submit"]:hover {
                background-color: #555;
            }

        /*footer style*/
        footer {
            background-color: #173021;
            color: #BFB7B1;
            padding: 2vw;
            margin-top: 0;
        }

            footer p {
                color: #BFB7B1;
                font-weight: bold;
                font-size: 1.7vw;
                padding: 2px 11px;
                border-radius: 3px;
            }

            footer .rights {
                font-size: 0.8vw;
                padding: 1.3vw;
                color: #BFB7B1;
            }
    </style>
</head>
<body>

  <div class="navigation">
            
    <br>
 <div class="navigationP1">  
    
        <img class="logo" src="images/logo.png" alt="logo image">
        <a href="Homepage.php" class="nav-link">Home | </a>
        <a href="signup.php" class="nav-link">Sign Up | </a>
        <a href="login.php" class="nav-link">Log In </a>

        <br> 
 </div>                  
       <br>
       <br> 
    
</div> 
 
 <div class="hamburger">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
 </div> 

 <img src="images/dec4.png" class="light" height="300px" width="300px" >

 
<!--------------------------------------------------------------------------------------------------------------------->
<?php 
if (isset($_GET['id'])) {
$designerId = $_GET['id']; } ?> 
 
<form action="req2.php" method="POST">
  <h2>Design Consultation</h2>
  <input type="hidden" name="designerID" value="<?php echo $designerId; ?>">
  <label for="room-type">Room Type:</label>
  <select id="room-type" name="room-type" required>
    <option name="type" value="">Select room type</option>
    <option name="type" value="Living Room">Living Room</option>
    <option name="type" value="Bedroom">Bedroom</option>
    <option name="type" value="Kitchen">Kitchen</option>
    <option name="type" value="Bathroom">Bathroom</option>
    <option name="type" value="Dining Room">Dining Room</option>
    <option name="type" value="Home Office">Home Office</option>
  </select>

  <label for="room-dimensions">Room Dimensions (in meters):</label>
  <div>
    <input type="text" id="room-width" name="room-width" placeholder="Width" required>
    <input type="text" id="room-length" name="room-length" placeholder="Length" required>
  </div>

  <label for="design-category">Design Category:</label>
  <select id="design-category" name="design-category" required>
    <option name="category" value="">Select design category</option>
    <option name="category" value="Modern">Modern</option>
    <option name="category" value="Country">Country</option>
    <option name="category" value="Coastal">Coastal</option>
    <option name="category" value="Minimalist">Minimalist</option>
  </select>

  <label for="color-preferences">Color Preferences:</label>
  <textarea id="color-preferences" name="color-preferences" rows="4" placeholder="Enter your color preferences"></textarea>

  <button type="submit" name="submit">Request Consultation</button>
</form>





<!------------------------------------------------------------------------------------------------------>
  <footer style="margin-bottom: 0 ; margin-top:10%">
    <em>Contact Us </em>
    <p style="margin: 0.75vw; font-size: small;">(Contact@ElysianInteriors.sa)</p>
    <small class="rights">
     © Elysian Interiors 2024. All rights reserved.
    </small> 
 </footer>


</body>
</html>