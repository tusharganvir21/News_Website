<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Website</title>
    
    <style media="screen">
        body{
            padding: 0;
            margin: 0;
        }
        ul{
            list-style-type: none;
            background-color: #494949;
            width: 100%;
            height: 50px;
            margin-top: 0%;
        }
        li{
            float: left;
            margin-left: 10px;
            margin-right: 20px;
            margin-top: 15px;
        }
        li:hover{
            opacity: 0.8;
            text-decoration: underline white;
        }
        .a{
            text-decoration: none;
            color: white;
            font-size: 20px;
            font-weight: bold;
        }
        #moon{
            width: 30px;
            height: 30px;
            cursor: pointer;
            border: none;
        }


    </style>
</head>
<body>
    <ul>
        <div class="lo">
            <a href="http://localhost/News_Website/news.php"></a>
            <li style="margin-left:15px;" id="logo"><a class="a" href="http://localhost/News_Website/news.php" target="_blank" rel="noopener noreferrer">News Site</a></li>
        </div>
        <div class="options">
            <li style="margin-left: 600px;"><a class="a" href="http://localhost/News_Website/news.php" target="_blank" rel="noopener noreferrer">Home</a></li>
            <li><a class="a" href="http://localhost/News_Website/insert.php" target="_blank" rel="noopener noreferrer">Submit News</a></li>
            <li><a class="a" href="#">About</a></li>
            <li><a class="a" href="http://localhost/News_Website/signin.php" target="_blank" rel="noopener noreferrer">Login</a></li>
            <li><a class="a" href="logout.php">LogOut</a></li>
            <li><img src="dark_theme/moon.png" id="moon" style="margin-top:-3px"></li>
        </div>
    </ul>

    <script>
    var moon = document.getElementById("moon");
    moon.onclick = function(){
        document.body.classList.toggle("dark-theme");
        if(document.body.classList.contains("dark-theme")){
            moon.src = "dark_theme/sun.png";
        }else{
            moon.src = "dark_theme/moon.png";
        }   
    }
    </script>

</body>
</html>