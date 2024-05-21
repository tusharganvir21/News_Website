<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert News</title>
    <style>
        body{
            min-height: 100vh;
            width: 100vw;
            overflow-x: hidden;
            /* background-color: rgb(255 210 210); */
            /* background-color: whitesmoke; */
            background-image: url("bg_blur.png");
        }
        textarea{
            border-radius: 10px;
            width: 550px;
            height: 300px;
            font-size: 20px;
            /* background-color: rgb(176 197 211); */
        }
        div{
            border: 2px solid black;
            border-radius: 20px;
            width: 600px;
            margin-left: 350px;
            margin-top: 40px;
            padding: 30px;
        }
        .file-button{
            font-size: 20px;

        }
        .submit-button{
            font-size: 20px;
            font-weight: bold;
            margin-left:250px ;
        }
        #title{
            width: 550px;
            height: 50px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <!-- <?php include 'navbar.php' ?>  -->
    <div class="">
        <form class="" action="insert.php" method="post" enctype="multipart/form-data">
            <textarea name="title" id="title" cols="30" rows="10" placeholder="Enter Title" required></textarea><br><br>
            <textarea name="news" id="" cols="80" rows="20" placeholder="Enter News" required></textarea><br><br>
            <input class="file-button" type="file" name="image" value="" required><br><br>
            <input class="submit-button" type="submit" name="submit" value="Submit">
        </form>

         <!-- PHP Code to save the news data inserted by user -->
        <?php
             include 'db.php';
             if (isset($_POST['submit'])){
                $title=$_POST['title'];
                $news=$_POST['news'];
                $image=$_FILES['image']['name'];
                $image_type=$_FILES['image']['type'];
                $image_size=$_FILES['image']['size'];
                $image_temp_loc=$_FILES['image']['tmp_name'];
                $image_store="image/".$image;

                move_uploaded_file($image_temp_loc, $image_store); 
                 
                $sql="INSERT INTO news(title, news, image) values('$title','$news','$image')";
                $query=mysqli_query($conn,$sql);
            }
        ?>
    </div>
</body>
</html>