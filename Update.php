<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Update Project</title>
  <script src="Const.js"></script>
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
    margin-top: 30px;
    margin-left: 290px;
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
          <a href="Homepage.ph" class="nav-link">Home | </a>
                   <a href="signup.ph" class="nav-link">Sign Up | </a>
                   <a href="login.ph" class="nav-link">Log In </a>
  
          <br> 
   </div>                  
         <br>
  
        </div>
  </header>
  <main>
      <?php
        // Check if the project ID is present in the query string
        $projectID = $_GET['project_id'];
        
        $connection = mysqli_connect("localhost", "root", "root", "elysian_interiors");
        $sql = "SELECT * FROM designportoflioproject WHERE id = $projectID";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        
        // Check if a project is found with the given ID
        if (!$row) {
        echo 'Project not found.';
        exit;
        }
        $designerID = $row['designerID'];
    ?>
  <form action="update_handler.php" method="POST" enctype="multipart/form-data">
    <h2>Update Project</h2>

    <input type="hidden" name="project_id" value="<?php echo $row['id']; ?>">
   
    <label for="project-name">Project Name:</label>
    <input type="text" id="project-name" name="project-name" required value="<?php echo $row["projectName"]; ?>">
 
    <label for="project-image">Project Image: <img class="tableimage" src="<?php echo "ProjectImages/". $row["projectImgFileName"]; ?>" alt="project image" width="30vw"></label>
    <input type="file" id="project-image" name="project-image"required style="color: aliceblue;">

<label for="design-category">Design Category:</label>
<select id="design-category" name="design-category" required>
    <?php
    $sql = " SELECT DesignCategory.id, DesignCategory.category 
FROM DesignCategory";
    $result = mysqli_query($connection, $sql);

    while ($category = mysqli_fetch_assoc($result)) {
        $categoryId = $category['id'];
        $categoryName = $category['category'];
        $selected = ($categoryId == $row['designCategoryID']) ? 'selected' : '';
        echo "<option value='$categoryName' $selected>$categoryName</option>";
    }
    ?>
</select>

    <label for="project-description">Project Description:</label>
    <textarea id="project-description" name="project-description" required><?php echo $row["description"]; ?></textarea>

    <button type="submit">Update</button>
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

