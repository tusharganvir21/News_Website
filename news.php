<!-- -----------------------------------------Home Page----------------------------------------- -->
<?php 
    session_start();
    // Check if username is set in session
    if (isset($_SESSION['email'])) {
        echo "Welcome " . $_SESSION['email'];
    } else {
        echo "Welcome Guest"; // Default message if username is not set
    }
    echo '<script language="javascript">';
    echo 'alert("Welcome ' . $_SESSION['email'] . '")'; // Concatenating in a single echo statement
    echo '</script>';
?>


<!-- One can see all the news inserted on this page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Sharing Site</title>

    <!-- Styling news page -->
    <style>
        body{
            min-height: 100vh;
            width: 100vw;
            background-color: var(--primary-color);
            overflow-x: hidden;
            /* background-image: url("bg_blur.png"); */
        }
        .divmain{
            display: flex;
            flex-wrap: wrap;
            align-content: center;
            justify-content: space-evenly;
        }
        .div1{
            border: 2px solid var(--secondary-color);
            border-radius: 20px;
            width: 470px;
            float: left;
            margin-left: 10px;
            padding-bottom: 15px;
            margin-top: 10px;
            margin-bottom: 10px;
            /* box-shadow: 0 0 20px 20px rgba(0, 0, 0, 0.3); */
        }
        .div2{
            width: 200px;
            max-height: 150px;
            overflow: hidden;
            float: left;
            margin-top: 10px;
            margin-left: 10px;
            padding: 6px;
            font-size: 23px;
            font-weight: bold;
            color:var(--secondary-color);
        }
        .div3{
            float: left;
            margin-top: 10px;
            margin-right: 200px;
            text-align: center;
        }
        #lable1{
            font-size: 20px;
            font-weight: bold;
            margin-left: 60px;
            padding: 5px;
            color: var(--secondary-color);
            border-radius: 10px;
            border: 1px solid var(--secondary-color);
        }
        #lable2, #lable3{
            font-size: 20px;
            font-weight: bold;
            padding: 5px;
            margin-left: 18px;
            border-radius: 10px;
            color: var(--secondary-color);
            border: 1px solid var(--secondary-color);
        }
        #readfullnews{
            font-size: 20px;
            font-weight: bold;
            border-radius: 10px;
            border: 1px solid var(--secondary-color);
        }
        img{
            width: 220px;
            height: 160px;
            float: left;
            margin-left: 20px;
            margin-top: 14px;
            border-radius: 20px;
            border: 1px solid var(--secondary-color);
            box-shadow: 20px 20px 20px 3px rgba(0, 0, 0, 0.3);
        }
        form{
            margin-top: -60px;
            float: right;
            margin-right: 50px;
        }        
        :root{
            --primary-color: #edf2fc; 
            --secondary-color: #000;
        }
        .dark-theme{
            --primary-color: #000;
            --secondary-color: #fff;
        }

    </style>

</head>
<body>
    <?php 
        include 'navbar.php'; 
        
    ?>
    <br><br>

    <div class="divmain" id="root">
        <?php 
            include 'db.php';

            $sql="SELECT * from news order by id desc";
            $query=mysqli_query($conn,$sql);

            while ($info=mysqli_fetch_array($query)) {
                ?>
                <div class="div1">
                    <img src="image/<?php echo $info['image']; ?>" alt="">
                    <div class="div2">
                        <?php echo $info['title']; ?>
                    </div>
                    <div class="div3">
                        <label id="lable1"><?php echo formatDate3($info['date']); ?></label><br><br>
                        <lable id="lable2"><?php echo formatDate1($info['date']); ?></lable>
                        <lable id="lable3"><?php echo formatDate2($info['date']); ?></lable>
                    </div>

                    <form action="fullNews.php" method="post">
                        <input type="text" name="id" value="<?php echo $info['id'] ?>" hidden>
                        <input id="readfullnews" type="submit" name="fullnews" value="Read Full News">
                    </form>

                </div>
            
                <?php
            }
        ?>        
    </div>

</body>
</html>
