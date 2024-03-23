<?php

session_start();

// Check if the user is logged in or the type is client 
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'designer') {
    header('Location: Homepage.php'); // Redirect to the home page if not logged in
    exit();
}
?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Add Project Page</title>
  <style>
    html {
    scroll-behavior: smooth;
}
body { background-color: #FCFCF6  ;} 
html, body {
    margin: 0;
    padding: 0;
}


.navigation {
overflow: hidden;
background-color: #173021;
color: #BFB7B1;

}
.logo { 
width: 11%  ;
height: 9% ;
float: right; }

.hamburger{
  display: none;
  cursor: pointer;
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

.navigationP1{
  padding-left: 3vw;
  padding-right: 3vw;
}
  
  form {
    width: 400px;
    height: 460px;
    padding: 60px 20px 20px 20px;
    background-color: #627542b2;
    background: linear-gradient(to right, #173021, #0b3d10);
    border: 1px solid #ccc;
    backdrop-filter: blur(50000px);
    margin-left: auto;
    margin-right: auto;
    margin-top: 8%;
    border-radius: 15% 15% 15% 0;
    margin-bottom: 10%;

  }
  
  h2 {
    text-align: center;
    color: #fff;
    filter:drop-shadow(0px 1px 1px #463f10) ;

  }
  
  label {
    display: block;
    margin-top: 10px;
    color: #ffffff;
    
    
  }
  
  input[type="text"],
  input[type="file"],
  select,
  textarea {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #0a4226;
    box-sizing: border-box;
  }
  
  button[type="submit"] {
    background-color:  #e6ce35e5;
    color: #ffffff;
    padding: 20px 20px ;
    border: none;
    border-radius: 5% 5% 50% 0%;
    cursor: pointer;
    margin-top: 50px;
    margin-left: 280px;
  }
  
  button[type="submit"]:hover {
    background-color: #555;
  }

  /*footer style*/
  footer{
  background-color: #173021;
  color: #BFB7B1;
  padding: 0.8vw 2vw 2vw 2vw; 
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
    <br>
 <div class="navigationP1">  
        <img class="logo" src="images/logo.png" alt="logo image">
        <a href="Homepage.php" class="nav-link">Home | </a>
        <a href="Signup.php" class="nav-link">Sign Up | </a>
        <a href="Login.php" class="nav-link">Log In </a>

        <br> 
 </div>                  
       <br>

      </div>
    </header>
      
<main>

  <form action="add2.php" method="POST" enctype="multipart/form-data">
    <h2>Add Project</h2>

    <label for="project-name">Project Name:</label>
    <input type="text" id="project-name" name="project-name" required>

    <label for="project-image">Project Image:</label>
    <input type="file" id="project-image" name="project-image" required style="color: aliceblue;">

    <label for="design-category">Design Category:</label>
    <select id="design-category" name="design-category" required>
      <option name="category" value=" ">Select a category</option>
      <option name="category" value="Country">Country</option>
      <option name="category" value="Modern">Modern</option>
      <option name="category" value="Coastal">Coastal</option>
      <option name="category" value="Minimalist">minimalist</option>
    </select>

    <label for="project-description">Project Description:</label>
    <textarea id="project-description" name="project-description" required></textarea>

    <button type="submit" name="submit">Add Project</button>
  </form>
      
</main>
  <footer style="margin-bottom: 0; margin-top:10%">
    <br> 
    <em>Contact Us </em>
<p style="margin: 0.75vw; font-size: small;">(Contact@ElysianInteriors.sa)</p>
<small class="rights">
© Elysian Interiors 2024. All rights reserved.
</small> 

</footer> 
</body>
</html> 

