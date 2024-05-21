<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "news_website";
    
    $conn =mysqli_connect($host,$user,$pass,$db); 

    function formatDate1($date1){
        return date('Y-m-d', strtotime($date1));
    }

    function formatDate2($date2){
        return date('g:i a', strtotime($date2));
    }

    function formatDate3($date3){
        return date('l', strtotime($date3));
    }
?>