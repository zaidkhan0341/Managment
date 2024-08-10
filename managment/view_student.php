<?php

error_reporting(0);
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

$sql="SELECT * FROM users WHERE usertype='student' ";

$result=mysqli_query($data,$sql);




?>


<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    include 'admin_css.php';

    ?>

    <style>
        .table_th{
            padding: 20px;
            font-size: 20px;
        }
        .table_td{
            padding: 20px;
            background-color: skyblue;
        }
    </style>

</head>
<body>


<?php

include 'admin_sidebar.php';

?>

    <div class="content">
        <center>

        <h1>Student Data</h1>

        <?php

            if( $_SESSION['messege'])
            {
                echo  $_SESSION['messege'];
            }

            unset($_SESSION['messege']);


        ?>
        <br><br>

        <table border="1px">
        <tr>
            <td class="table_th">Username</td>
            <td class="table_th">Email</td>
            <td class="table_th">Phone</td>
            <td class="table_th">Password</td>
            <td class="table_th">Delete</td>
            <td class="table_th">Update</td>
        </tr>

        <?php

        while($info=$result->fetch_assoc())
        {

        ?>

        <tr>
            <td class="table_td">
                <?php echo "{$info['username']}"; ?>
            </td>
            <td class="table_td">
            <?php echo "{$info['email']}"; ?>
            </td>
            <td class="table_td">
            <?php echo "{$info['phone']}"; ?>
            </td>
            <td class="table_td">
            <?php echo "{$info['password']}"; ?>
            </td>
            <td class="table_td">
            <?php echo "<a onClick=\" javascript:return confirm('Are You Sure to Delete This');
            \" class='btn btn-danger' href='delete.php?student_id={$info['id']}
            '>Delete</a>"; ?>
            </td>

            <td class="table_td">
            <?php echo "<a class='btn btn-primary' 
            href='update_student.php?student_id={$info['id']}'>Update</a>"; ?>
            </td>
        </tr>
        <?php
        }
        ?>
        </table>
    </center>
    </div>

</body>
</html>