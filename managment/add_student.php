<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");

}

$data = mysqli_connect("localhost", "root", "", "schoolproject");

if(isset($_POST['add_student']))
{
    $username=$_POST['name'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
    $user_password=$_POST['password'];
    $usertype="student";

    $check="SELECT * FROM users WHERE username ='$username'";

    $check_user=mysqli_query($data,$check);

    $row_count=mysqli_num_rows($check_user);


    if($row_count==1)
    {
        echo "<script type='text/javascript'>

        alert('Username Already Exist. Try Another One');
        
        </script>";
    }
    else
    {


    $sql="INSERT INTO users(username,email, phone,usertype,password) VALUES
     ('$username', '$user_email', '$user_phone', '$usertype', '$user_password')";

     $result=mysqli_query($data,$sql);

     if($result)
     {
        echo "<script type='text/javascript'>

        alert('Data Uploaded Success');
        
        
        </script>";
     }
     else
     {
        echo "Uploaded Failed";
     }
}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'admin_css.php';

    ?>

    <style type="text/css">

        label{
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .div_deg{
            background-color: skyblue;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }



    </style>

</head>
<body>


<?php

include 'admin_sidebar.php';

?>

    <div class="content">
        <center>

        <h1>Add Student</h1>


        <div class="div_deg">

            <form action="#" method="POST">
                <div>
                    <label for="">Username</label>
                    <input type="text" name="name">
                </div>

                <div>
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>

                <div>
                    <label for="">phone</label>
                    <input type="number" name="phone">
                </div>

                <div>
                    <label for="">Password</label>
                    <input type="text" name="password">
                </div>

                <div>
                    <input type="submit" class="btn btn-primary" name="add_student" value="Add Student">
                </div>


            </form>

        </div>
        </center>
    </div>




</body>
</html>