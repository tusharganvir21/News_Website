<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full News</title>

    <style>
        body{
            min-height: 100vh;
            width: 100vw;
            overflow-x: hidden;
            background-color: var(--primary-color);
        }
        img{
            width: 750px;
            height: 300px;
            border-radius: 10px;
            border: 2px solid var(--secondary-color);
        }
        p{
            font-size: 20px;
            font-weight: bold;
            margin-left: 300px;
        }
        .div1{
            margin-left: 300px;
            margin-top: 30px; 
            color: var(--secondary-color);
        }
        .div2{
            width: 750px;
            margin-top: 20px;
            font-size: 20px;
            text-align: justify;

        }
        .div3{
            width: 750px;
            margin-top: 20px;
            font-size: 35px;
            font-weight: bold;
            text-align: center;
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
        include 'db.php';
        
        $id=$_POST['id'];
        $sql="SELECT * FROM news where id='$id'";
        $query=mysqli_query($conn,$sql);

        while($info=mysqli_fetch_array($query)){
            ?>
            <div class="div1">
                <div class="div3">
                    <?php echo $info['title']; ?>
                </div>
                <p> <?php echo $info['date'] ; ?> </p>
                <img src="image/<?php echo $info['image'] ?>" alt="">
                <div class="div2">
                    <?php echo $info['news'] ; ?>
                </div>
            </div>
            <?php
        }
    ?>
    <br><br>
    
</body>
</html>