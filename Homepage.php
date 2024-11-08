<!DOCTYPE html>

<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<style> 
            
html {
    scroll-behavior: smooth;
}
body { background-color: #FEFEFA ;} 
html, body {
    margin: 0;
    padding: 0;
}
           
#pic1{ background-color: #173021 ; } 
           
#pic1 img {  width : 100% ; }
           
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

.navigationP1{
  padding-left: 3vw;
  padding-right: 3vw;
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
   
/* to make it responsive */ 
.hamburger{
  display: none;
  cursor: pointer;
}





/* first part style*/

.button {
  position: relative;
  overflow: hidden;
  height: 4vw;
  border-radius: 1.65vw;
  background: #274C35;
  background-size: 100%;
  color: #FCFCF6;
  border: none;
  margin-top: 0.8vw;
  text-align:center;
  line-height: 4vw;
  font-size: 1.5vw;
  font-family: Playfair Display ;
  width: 18vw;
  margin-left: auto;
  margin-right: auto; 
}

.button:hover::before {
  transform: scaleX(1);
}

.button-content {
  position: relative;
  z-index: 1;
}
.button a {
	text-decoration: none;
}
.button::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  transform: scaleX(0);
  transform-origin: 0 50%;
  width: 18vw;
  height: inherit;
  border-radius: inherit;
  background: #E6CF35;
  transition: all 0.475s;
}

.button a:visited{
  color: #FCFCF6;
}
.button a:link{
  color: #DDC22B;
}
.button a:hover{
  color: #fff;
}

.first-part{
  padding-top: 10vw;
  padding-bottom: 15vw;
}

.first-part p{
 text-align: center; 
 font-size: 1.48vw;
}

.first-part img{
  padding: 1.2vw;
}

.img1{
width: 28%
}
.img2{
  width: 35%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.img3{
width: 28%
}

.sketches{
  padding-top: 8vw;
}

/*second part style*/
.second-part{
  background-color: #173021;
  padding: 13vw 5vw;
  margin-bottom: 0;
}


.second-part img{
 width: 34vw;
 float: left;
 padding-right: 6vw;
}

.second-part q {
font-size: 1.5vw;
color: #FCFCF6;
padding: 4vw;
line-height: 2vw;
}

.second-part h3{
  font-size: 2vw;
  color: #FCFCF6;
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
                   <a href="signup.php" class="nav-link">Sign Up | </a>
                   <a href="login.php" class="nav-link">Log In </a>
                   <br> 
            </div>      
                  <br>

                   <div id="pic1"> <img src="images/pic3.png" alt=""/></div>
                  <br> 
                  <br> 
                  <br> 
               
           </div> 
            
            <div class="hamburger">
                 <span class="bar"></span>
                 <span class="bar"></span>
                 <span class="bar"></span>
            </div> 
        </header>     
            
        <main class="content">
          <div class="first-part">

            <div class="button">
              <span class="button-content"><a href="login.php" class="button-element">Log-in</a></span>
            </div>
            <p>New user? <a href="signup.php"> Sign-up</a></p><br><br>

            <div class="sketches">
            <img src="images/sketch1.jpeg" alt="" class="img1"> 
            <img src="images/sketch2.jpeg" alt="" class="img2">
            <img src="images/sketch3.jpeg" alt="" class="img3" >
            </div>
          </div>
          <div class="second-part">
            <img src="images/library2.jpeg" alt="" >
            <h3>About us</h3>
            <br>
            <q>Welcome to Elysian Interiors, where exceptional interior design meets your unique vision. Discover a world of creativity and expertise as we connect you with top-notch interior designers who will transform your space into a stunning reflection of your style and personality. From concept to completion, our platform is designed to make your interior design journey effortless and unforgettable. Get ready to unlock the full potential of your home and create a space that truly inspires. Join us at Elysian Interiors and let's bring your dream space to life together.</q>
          </div>

        </main>
         
         <footer style="margin-bottom: 0; padding-top: 3vw;"">
             <hr style="color: #BFB7B1;">
             <br> 
             <em>Contact Us </em>
     <p style="margin: 0.75vw; font-size: small;">(Contact@ElysianInteriors.sa)</p>
     <small class="rights">
         © Elysian Interiors 2024. All rights reserved.
     </small> 
 </footer> 
        
        
        <script>
    const hamburger = document.querySelector(".hamburger");
    const navigation = document.querySelector(".navigation");

    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        navigation.classList.toggle("active");
    });

    document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
        hamburger.classList.remove("active");
        navigation.classList.remove("active");

    }));
    </script> 
    </body>
</html>
