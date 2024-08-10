<?php

error_reporting(0);
session_start();
session_destroy();


if($_SESSION['message'])
{
    $message=$_SESSION['messege'];

    echo "<script type='text/javascript'>
    
    alert('$message');
    
    </script>";
}

$data = mysqli_connect("localhost", "root", "", "schoolproject");


$sql="SELECT * FROM teacher";

$result=mysqli_query($data,$sql);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ec, initial-scale=1.0">
    <title>STUDENT MANAGMENT SYSTEM</title>
    <link rel="stylesheet" href="style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<nav>

<label class="logo">W-School</label>

    <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Admission</a></li>
        <li><a href="login.php" class="btn btn-success">Login</a></li>
    </ul>
</nav>

<div class="section1">
    <label class="img_text" for="">We Teach Student With Care</label>
    <img class="main_img" src="image folder/house1.jpg">
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="welcome_img" src="image folder/school.jpg" alt="">
        </div>

        <div class="col-md-8">
            <h1>Welcome to W-School</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas fugiat maiores a facere 
                explicabo? Deleniti eligendi quia odio mollitia laborum ex, ullam aliquam dicta. Eos
                 eius voluptas perspiciatis esse
                 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas fugiat maiores a facere 
                explicabo? Deleniti eligendi quia odio mollitia laborum ex, ullam aliquam dicta. Eos
                 eius voluptas perspiciatis esse
                 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas fugiat maiores a facere 
                explicabo? Deleniti eligendi quia odio mollitia laborum ex, ullam aliquam dicta. Eos
                 eius voluptas perspiciatis esse
                 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas fugiat maiores a facere 
                explicabo? Deleniti eligendi quia odio mollitia laborum ex, ullam aliquam dicta. Eos
                 eius voluptas perspiciatis esse </p>

        </div>
    </div>
</div>


    <center>
        <h1>Our Teachers</h1>
    </center>

    <div class="container">
        <div class="row">

        <?php
        while($info=$result->fetch_assoc())

        {

        ?>
            <div class="col-md-4">
                <img class="teacher" src="<?php echo "{$info['image']}" ?>">

                <h3><?php echo "{$info['name']}" ?></h3>

                <h5><?php echo "{$info['description']}" ?></h5>

              
            </div>

            <?php } ?>

            <!-- <div class="col-md-4">
            <img class="teacher" src="image folder/teacher2.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, perspiciatis quidem.
                     Veritatis exercitationem laudantium.</p>
            </div>

            <div class="col-md-4">
            <img class="teacher" src="image folder/teacher3.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, perspiciatis quidem.
                     Veritatis exercitationem laudantium.</p>
            </div> -->
        </div>
    </div>



    <center>
        <h1>Our Course</h1>
    </center>


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="image folder/web.jpg" alt="">
                <h3>Web Development</h3>
            </div>

            <div class="col-md-4">
                <img class="teacher" src="image folder/design.jpg" alt="">
                <h3>Graphics Design</h3>

            </div>
            <div class="col-md-4">
                <img class="teacher" src="image folder/mark.jpg" alt="">
                <h3>Marketing</h3>
            </div>
        </div>
    </div>


    <center>
        <h1 class="adm">Admission Form</h1>
    </center>


    <div align="center" class="admission_form">
        <form action="data_check.php" method="POST">
            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_deg" type="text" name="name">
            </div>

            <div class="adm_int">
                <label for="" class="label_text">Email</label>
                <input class="input_deg" type="text" name="email">
            </div>

            <div class="adm_int">
                <label for="" class="label_text">Phone</label>
                <input class="input_deg" type="text" name="phone">
            </div>

            <div class="adm_int">
                <label for="" class="label_text">Message</label>
                    <textarea class="input-txt" name="messege"></textarea>
            </div>

            <div class="adm_int">
                <input type="submit" class="btn btn-primary" id="submit" value="Apply" name="apply">
            </div>


        </form>

    </div>

    <footer>
        <h3 class="footer_txt">All @copyright reserved by web tech knowledge</h3>
    </footer>


</body>
</html>