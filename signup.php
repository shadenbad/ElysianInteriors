<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
   <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<title>Sign-up Page</title>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>

  <style>
    @import url('http://fonts.googleapis.com/css?family=Montserrat:wght@300;400;500;600;700&display=swap');

html {
    scroll-behavior: smooth;
}
body { background-color: #FCFCF6  ;} 
html, body {
    margin: 0;
    padding: 0;
}

    .hero{
        min-height:100vh ;
        width: 100%;
        color: #093107;
        position: relative;
    }
    
    .navigation {
overflow: hidden;
background-color: #173021;
color: #BFB7B1;

}

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


.logo { 
width: 11%  ;
height: 9% ;
float: right; }

button{
    background-color: rgb(183, 183, 46);
    height: 30px;
    width: 60px;
    border-radius: 20px;
    border: 0;
    outline: 0;
    cursor: pointer;
    margin-right: 65%;
    transition: backdroungd 0.5s;
}

button span{
    display: block;
    background: #999;
    height: 26px;
    top: -25px;
    width: 26px;
    border-radius: 50%;
    margin-left: 2px;
    transition: backdroungd 0.5s , margin-left 0.5s ;

}


input{
    background-color: #eee;
    border:none;
    margin: 14px 0;
    padding: 13px 15px;
    font-size: 14px;
    border-radius: 15px;
    width:90%;
}

.sign-up-form{
width: 30%;
margin-left: 40%;
margin-top: 11%;
}



.social-text{
    size: 20;
    width: 300px;
color: #444e13;
margin-top: 25px;
margin-left:120px;
}




.btn-solid{
    background-color: #9c911a;
    border:none;
    margin: 30px 0;
    padding: 0px 10px;
    font-size: 14px;
    border-radius: 15px;
    width:100%;
    height: 40px;
    color: #fff;
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

section{
    position: absolute;
    background: radial-gradient(#bcbaba,#fbffe8);
}

.leaves{
position: absolute;
width: 100%;
height: 100%;
top:0;
height: 0;
}

.leaves div{
    position: absolute;
    display: block;
}

.leaf{
    position: absolute;
    display: block;
    top: 20px;
    margin-left: 200px;
}



.leaves div:nth-child(2){
left: -8px;
animation: fall 10s linear infinite;
animation-delay:-9s ;  
transform:translatey(300px) ;

}

.leaves div:nth-child(3){
left: -74px;

animation: fall 10s linear infinite;
animation-delay:-4s ;  
transform:translatey(300px) ;

}

.leaves div:nth-child(4){
    left: -10px;

    animation: fall 10s linear infinite;
animation-delay:-5s ;  
transform:translatey(300px) ;

}

.leaves div:nth-child(5){
    left: -70px;

animation: fall 10s linear infinite;
animation-delay:-2s ;  
transform:translatey(300px) ;

  
}

.leaves div:nth-child(6){
    left: -30px;

    animation: fall 10s linear infinite;
animation-delay:-4s ;  
transform:translatey(300px) ;

}


.leaves div:nth-child(7){
    left: -80px;

animation: fall 10s linear infinite;
animation-delay:-4s ;  
transform:translatey(300px) ;

}

.leaves div:nth-child(8){
    left: -30px;

animation: fall 10s linear infinite;
animation-delay:-5s ;  
transform:translatey(300px) ;

}

.leaves div:nth-child(9){
    left: -68px;

animation: fall 10s linear infinite;
animation-delay:-2s ; 
transform:translatey(300px) ;

  
}

.leaves div:nth-child(10){
    left: -100px;

    animation: fall 8s linear infinite;
animation-delay:-4s ;  
transform:translatey(300px) ;

}

.leaves div:nth-child(11){
    left: -55px;

animation: fall 10s linear infinite;
animation-delay:-7s ;  
transform:translatey(200px) ;

}

.leaves div:nth-child(12){
    left:-40px;
animation: fall 10s linear infinite;
animation-delay:-2s ;  
transform:translatey(200px) ;

}
.leaves div:nth-child(13){
    left: -80px;

    animation: fall 8s linear infinite;
animation-delay:-7s ;  
transform:translatey(200px) ;

}
.leaves div:nth-child(14){
    left: -20px;

animation: fall 10s linear infinite;
animation-delay:-5s ;  
transform:translatey(200px) ;

}

.leaves div:nth-child(15){
    left: -70px;

animation: fall 10s linear infinite;
animation-delay:-4s ;  
transform:translatey(200px) ;

}



.leaf{
    transform:translatey(20px) ;
}

@keyframes fall{
    0%{
    opacity:1;
    top:10%;
    transform: translateX(-20px);
    }
}

.radio-container{
     display: flex;
  justify-content: center;
  font-size: 20px;
}


h4{
    font-size: 20px;
    color: #0b361e;
}

#designer-form,
#client-form {
  display: none;
  background-color:#e6ce358a;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  padding: 30px 100px 30px 100px;
  height: 10%;
  border-radius: 0% 20%;
  margin-bottom: 10%;
  margin-top: 25px;
  text-align: center;
  width: 100%;
  line-height: 50%;
  color: black;
  font-size: 1.1rem;
background-color: #6f670c4d;
width: 30%;
margin-left: 40%;
margin-top: 2%;
}


.title{
    
    font-size: 30px;
    color: #6f670c;
  margin-bottom: 20px;
}

.hidden {
      display: none;
    }
  </style>
  <script>
    // JavaScript code to handle form visibility
    function showForm(userType) {
      var designerForm = document.getElementById("designer-form");
      var clientForm = document.getElementById("client-form");

      if (userType === "designer") {
        designerForm.style.display = "block";
        clientForm.style.display = "none";
      } else if (userType === "client") {
        designerForm.style.display = "none";
        clientForm.style.display = "block";
      }
    }
  </script>
</head>

<body>
     <div class="hero">
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
            

        <section>           
        <div class="leaves">
           <div> <img src="images/plant.png" class="leaf1" height="280px" width="280px" ></div>
           <div>  <img src="images/leaf-left.png" class="leaf" height="35px" width="35px" ></div>
            <div> <img src="images/leaf-right.png" class="leaf" height="35px" width="35px" ></div>
        <div> <img src="images/leaf-left.png" class="leaf" height="35px" width="35px" ></div>
         <div> <img src="images/leaf-right.png" class="leaf" height="35px" width="35px" ></div>
           <div> <img src="images/leaf-left.png" class="leaf" height="35px" width="35px" ></div>
          <div> <img src="images/leaf-right.png" class="leaf" height="35px" width="35px" ></div>
           <div>  <img src="images/leaf-left.png" class="leaf" height="35px" width="35px" ></div>
            <div>  <img src="images/leaf-right.png" class="leaf" height="35px" width="35px" ></div>
            <div>  <img src="images/leaf-left.png" class="leaf" height="35px" width="35px" ></div>
            <div>  <img src="images/leaf-right.png" class="leaf" height="35px" width="35px" ></div>
            <div>  <img src="images/leaf-left.png" class="leaf" height="35px" width="35px" ></div>
            <div>  <img src="images/leaf-right.png" class="leaf" height="35px" width="35px" ></div>
            <div>  <img src="images/leaf-left.png" class="leaf" height="35px" width="35px" ></div>
            <div>  <img src="images/leaf-right.png" class="leaf" height="35px" width="35px" ></div>


        </div>
        </section> 
         
        
         <?php if (isset($_GET['error']) && $_GET['error'] == 'email_exists'): ?>
        <div style="color: red; text-align: center; margin-bottom: 20px;">
            The email address is already registered. Please use a different email.
        </div>
        <?php endif; ?>
         

       

        <div class="container">

           

            <form action="#" class="sign-up-form">
                <h2 class="title">Sign up</h2>
    <hr>
                      
                          <form required class="info">
                            <h4>User Type:</h4>
                            <div class="radio-container">
                              <input type="radio" id="designer" name="user-type" value="designer" onclick="showForm('designer')">
                              <label for="designer">Designer</label>
                              
                              <input type="radio" id="client" name="user-type" value="client" onchange="showForm('client')">
                              <label for="client">Client</label>
                            </div>
                            <br>
                          </form>


                            <form action="signupD.php" method="post" id="designer-form" class="designer-form" enctype="multipart/form-data">
                                <input required type="text" id="first-name" name="first-name" placeholder="First name">

                                <input required type="text" id="last-name" name="last-name" placeholder="Last name">

                                <input required type="email" placeholder="Email" name="email"> 
                                <input required type="password" placeholder="Password" name="password">
                              <input required type="text" id="brand-name" name="brand-name" placeholder="Brand name">
                              <br>
                              <label for="logo">Logo:</label>
                              <input required type="file" id="logo" name="logo" >
                              <br>
                              <label for="specialities">Speciality in Interior Design Categories:</label>
                              <div class="checkbox1">
                                <div>
                                  <input type="checkbox" id="modern" name="specialities[]" value="1003">
                                  <label for="modern">Modern</label>
                                </div>
                                <div>
                                  <input type="checkbox" id="country" name="specialities[]" value="1001">
                                  <label for="country">Country</label>
                                </div>
                                <div>
                                  <input type="checkbox" id="coastal" name="specialities[]" value="1000">
                                  <label for="coastal">Coastal</label>
                                </div>
                                <div>
                                  <input type="checkbox" id="minimalist" name="specialities[]" value="1002">
                                  <label for="minimalist">Minimalist</label>
                                </div>
                                <button type="submit" class="btn-solid">Sing up</button>

                              </div>
                             
                            </form>
                            
                            <form action="signupC.php" method="post" id="client-form" class="hidden">


                                <input required type="text" id="first-name" name="first-name" placeholder="First name">

                                <input required type="text" id="last-name" name="last-name" placeholder="Last name">

                                <input required type="email" placeholder="Email" name="email"> 
                                <input required type="password" placeholder="Password"  name="password">



                              
                                  <button type="submit" class="btn-solid">Sing up</button>
                               
                            </form>
                
         
        </div> 


       

       
     </div>

     <footer style="margin-bottom: 0 ; margin-top:10%">
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
    })

    document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
        hamburger.classList.remove("active");
        navigation.classList.remove("active");

    })) 
    
     </script>
</body>
</html>
