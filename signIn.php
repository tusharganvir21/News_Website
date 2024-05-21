
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SignIn Page</title>

        <style>
            @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap");
            
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: "Poppins", sans-serif;
            }
            .container {
                height: 100vh;
                width: 100%;
                align-items: center;
                display: flex;
                justify-content: center;
                /* background-image: radial-gradient(
                    circle farthest-corner at 10% 20%,
                    rgba(253, 101, 133, 1) 0%,
                    rgba(255, 211, 165, 1) 90%
                ); */
                background-image: url("bg1.png");
                background-size: cover;
            }
            .sign-up-card {
                display: flex;
                border-radius: 10px;
                box-shadow: 0 0 20px 20px rgba(0, 0, 0, 0.3);
                width: 650px;
                height: 350px;
                background-color: #ffffff;
                padding: 10px 30px;
            }
            img{
                width: 100%;
            }
            .image{
                position: absolute;
                width: 70px;
                height: 7px;
                background: #fff0;
                left: 50%;
                bottom: 70px;
                transform: translate(-50%, 0%);
            }
            .card_title {
                text-align: center;
                padding: 10px;
            }
            .card_title h1 {
                font-size: 26px;
                font-weight: bold;
            }  
            .form input {
                margin: 10px 0;
                width: 100%;
                background-color: #e2e2e2;
                border: none;
                outline: none;
                padding: 12px 20px;
                border-radius: 4px;
            }  
            .button {
                background-color: #2f2f2f;
                color: #ffffff;
                font-size: 16px;
                outline: none;
                border-radius: 5px;
                border: none;
                padding: 8px 15px;
                width: 100%;
            }
            .button:hover{
                background-color: #898989;
            }
            .card_terms {
                display: flex;
                align-items: center;
                padding: 10px;
            }
            .card_terms input[type="checkbox"] {
                background-color: #e2e2e2;
            }
            .card_terms span {
                margin: 5px;
                font-size: 13px;
            }
            .sign-up-card a {
                color: #4796ff;
                text-decoration: none;
            }

        </style>

    </head>

    <body>
    <?php include 'navbar.php' ?> 

        <div class="container" id="container">
            <div class="form-container sign-up-card">
                <div class="iamge">
                    <img src="DailyBuzz.png" alt="Image Loading">
                </div>
                <form name="myform" method="post" action="validate.php" onsubmit="return validateform()">
                    
                    <div class="card_title">
                        <h1 style="padding-bottom: 10px">Login</h1>
                        <span>Don't have an account? <a href="signup.php">Sign Up</a></span>
                    </div>

                    <div class="form">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    
                    <div class="card_terms">
                        <input type="checkbox" name="remember" id="terms" > <span>Remember me</span>
                        <input type="checkbox" name="tac" id="terms" > <span>I have read and agree to the <a href="">Terms of Service</a></span>
                    </div>
                    
                    <button class="button" name="button" >Sign In</button>
                    
                </form>
            </div>
        </div>

        <script>
            function validateform() {
                var email= document.myform.email.value;
            var password = document.myform.password.value; 
           
            if ( email== null || email == "") {
                alert("Email can't be blank.");
                return false;
            }  
           else if ( password== null || password == "") {
                alert("Password can't be blank.");
                return false;
            }
    } 
        </script>

    </body>

<?php 
    if(isset($_COOKIE['email']) and isset($_COOKIE['password'])){
        $email = $_COOKIE['email'];
        $password = $_COOKIE['password'];
        echo "<script>
                document.getElementById('email').value = '$email';
                document.getElementById('password').value = '$password';
            </script>";
    }
?>
</html>