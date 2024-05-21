<?php 

// $myemail = 'tusharG@example.com'; // Replace with your valid email
// $mypass= 'mypassword'; // Replace with your valid password;

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        include 'db.php';
        $myemail = $_POST["email"];
        $mypass = $_POST["password"];  
    }

    if(isset($_POST['button'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($email==$myemail && $password== $mypass){
            if(isset($_POST['remember'])){
                setcookie('email', $email,time()+60*60*70);
                setcookie('pass', $password,time()+60*60*70);
            }
            session_start();
            $_SESSION['email']=  $email;
            header("location: news.php");

        }else{
            echo "Email or Password is Invalid. <br> click here to <a href='signin.php'>try again</a>";
        }
} else{
    header("location: news.php");
}
?>