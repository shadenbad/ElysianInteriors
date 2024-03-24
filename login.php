<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> Log In </title>
    <script src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous"></script>

    <style>
        @import url('http://fonts.googleapis.com/css?family=Montserrat:wght@300;400;500;600;700&display=swap');

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #FCFCF6;
        }

        html, body {
            margin: 0;
            padding: 0;
        }

        .hero {
            background-color: #FCFCF6;
            min-height: 100vh;
            width: 100%;
            color: #fff;
            position: relative;
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

        button {
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

            button span {
                display: block;
                background: #999;
                height: 26px;
                top: -25px;
                width: 26px;
                border-radius: 50%;
                margin-left: 2px;
                transition: backdroungd 0.5s, margin-left 0.5s;
            }

        #btn {
            height: 30px;
            width: 60px;
            border-radius: 20px;
            border: 0;
            outline: 0;
            cursor: pointer;
            float: right;
            margin-right: 65%;
            margin-top: 2.5%;
            transition: backdroungd 0.5s;
        }


        .lamp-container {
            position: absolute;
            left: 14%;
            width: 100px;
            top: 195px;
        }

        .lamp {
            width: 100%;
        }

        .light {
            position: absolute;
            top: 97%;
            left: 50%;
            transform: translateX(-50%);
            width: 300px;
            margin-left: -4px;
            opacity: 0;
            transition: opacity 0.5s;
        }

        .sign-in-form input {
            background-color: #eee;
            border: none;
            margin: 8px 0;
            padding: 13px 20px;
            font-size: 14px;
            border-radius: 15px;
            width: 150%;
        }

        .sign-in-form {
            width: 18%;
            margin-left: 40%;
            margin-top: 11%;
        }


        .title {
            font-size: 30px;
            color: #6f670c;
            margin-bottom: 20px;
        }

        .social-text {
            size: 20;
            width: 300px;
            color: #444e13;
            margin-top: 25px;
            margin-left: 120px;
        }


        .control {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-top: 0px;
        }

        .btn-solid {
            background-color: #9c911a;
            border: none;
            margin: 8px 0 50px ;
            padding: 0px 10px;
            font-size: 14px;
            border-radius: 15px;
            width: 165%;
            height: 40px;
            color: #fff;
        }

        .active {
            background: green;
        }

            .active span {
                background: #eee;
                margin-left: 31px;
            }

        .on {
            opacity: 1;
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

        .radio-container {
            display: flex;
            justify-content: center;
            font-size: 20px;
            color: #0b140f;
            margin-bottom: 20%;
        }


        h4 {
            font-size: 20px;
            color: #0b361e;
        }

        .container{
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <?php
    
    
    ?>
    <div class="hero">
        <div class="navigation">

            <br>
            <div class="navigationP1">

                <img class="logo" src="images/logo.png" alt="logo image">
                <a href="Homepage.php" class="nav-link">Home | </a>
                <a href="Signup.php" class="nav-link">Sign Up | </a>
                <a href="LogIn.php" class="nav-link">Log In </a>
                <button type="button" onclick="toggleBtn()" id="btn"><span></span></button>

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



        <div class="lamp-container">
            <img src="images/lamp.png" class="lamp" width="100px">
            <img src="images/light.png" class="light" id="light" width="100px" height="300px">


        </div>



        <div class="container">
            <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid_credentials'): ?>
               <div style="color: red; text-align: center; margin-top: 20px;">
                   Invalid email or password. Please try again.
                      </div>
                <?php endif; ?>

            <form action="login_handler.php" method="post" class="sign-in-form" >

                <h2 class="title">Log in</h2>
                <hr>
                <br>

                <div class="input-field">
                    <input id="Email" required type="email" placeholder="Email Address" name="email"/>
                </div>


                <div class="input-field">
                    <input id="pass" required type="password" placeholder="Password" name="password" />
                </div>


                <h4>User Type:</h4>
                <div class="radio-container">
                    <input type="radio" id="designer" name="user-type" value="designer">
                    <label for="designer"> Designer </label>

                    <input type="radio" id="client" name="user-type" value="client">
                    <label for="client"> Client</label>
                </div>

                <button type="submit" class="btn-solid" value="submit"> Sign in</button>



            </form>
        </div>


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
        var btn = document.getElementById("btn");
        var light = document.getElementById("light");
        function toggleBtn() {
            btn.classList.toggle("active");
            light.classList.toggle("on");
        }

        var btn = document.getElementById("btn");
        var light = document.getElementById("light"); 




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

    

          
            function ToPage(event) {
                var email = document.getElementById("Email").value;
                var pass = document.getElementById("pass").value;

                var userType = document.querySelector('input[name="user-type"]:checked').value;
                var gopage;

                if(email.length >=2 && pass.length>=2){
                    if (userType === "client") {
                        window.location.href = "Clientpage.html";
                        return false;
                }
                else if (userType === "designer") {
                    window.location.href = "Designerpage.html";
                    return false;


                }

                }else {
            alert('You must fill in all the required fields.');
        }


              

            }
    </script>

</body>
</html>
