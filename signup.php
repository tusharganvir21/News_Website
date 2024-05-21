<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SignUp Page</title>
        <link rel="stylesheet" href="signup.css">
        
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
                background-image: url("bg_blur.png");
                background-size: cover;
            }
            .sign-up-card {
                display: flex;
                border-radius: 10px;
                box-shadow: 0 0 20px 20px rgba(0, 0, 0, 0.3);
                width: 800px;
                height: 450px;
                background-color: #ffffff;
                padding: 10px 30px;
            }
            img{
                width: 100%;
                padding-top:30% ;
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
                background-color: #898989;
                color: #ffffff;
                font-size: 16px;
                outline: none;
                border-radius: 5px;
                border: none;
                padding: 8px 15px;
                width: 100%;
            }
            .button:hover{
                background-color: #2f2f2f;
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
                <form name="myform" method="post" action="#" onsubmit="return validateform()">
                    
                    <div class="card_title">
                        <h1 style="padding-bottom: 10px">Create Account</h1>
                        <span>Already have an account? <a href="signIn.php">Sign In</a></span>
                    </div>

                    <div class="form">
                        <input type="text" name="username" placeholder="User Name">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <input type="password" name="cnfpassword" placeholder="Confirm Password">
                    </div>
                    
                    <div class="card_terms">
                        <input type="checkbox" name="checkbox" id="terms" required> <span>I have read and agree to the <a class="link" href="">Terms of Service</a></span>
                    </div>
                    
                    <button class="button" name="signup">Sign Up</button>
                </form>
                
                <?php 
                    include 'db.php';

                    if(isset($_POST['signup'])){
                        $username = $_POST['username'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $cnfpassword = $_POST['cnfpassword'];
                        $duplicate = mysqli_query($conn, "SELECT * FROM signup where username='$username' or email='$email'");
                        if(mysqli_num_rows($duplicate) > 0){
                            echo "<script> alert('Username or Email has already taken');</script>";
                        }
                        else{
                            if($password == $cnfpassword){
                                $sql = "INSERT INTO signup(username, email, password, cnfpassword) values ('$username','$email','$password','$cnfpassword')";
                                $query=mysqli_query($conn,$sql);
                                echo "<script>alert('Registration Successful');</script>" ;
                            }
                            else{
                                echo "<script>alert('Password does not match.');</script>";
                            }
                        }
                    } 
                ?>


            </div>
        </div>
        <script>
            function validateform() {
            var name = document.myform.username.value;
            var password = document.myform.password.value;
            var cnfpassword=document.myform.cnfpassword.value;  
            var email = document.myform.email.value;

            if (name == null || name == "") {
                alert("Name can't be blank");
                return false;
            }
            else if (email==null || email==""){
                alert("Please enter email.");
                return false;
            }
            else if (password==null || password==""){
                alert("Please enter Password.");
                return false;
            } else if (password.length < 6) {
                alert("Password must be at least 8 characters long.");
                return false;
            }
            else if(password==cnfpassword){  
                return true;  
            }  
            else if(password!=cnfpassword){  
                alert("password must be same!");  
                return false;  
            }  
        }   
        </script>
    </body>
</html>