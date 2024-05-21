<?php 
    session_start();
    session_destroy();
    if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
        $email = $_COOKIE['email'];
        $password = $_COOKIE['pass'];
        setcookie('email', $email,time()-1);
        setcookie('pass', $password,time()-1);
    }
    echo '<script language="javascript">';
    echo 'alert("You have been logged out. Please Login again.")'; // Concatenating in a single echo statement
    echo '</script>';

    echo "Go to <a href='news.php'>Home page</a>.<br>";
    echo "Or click here to <a href='signIn.php'>Login</a> again.";

?>