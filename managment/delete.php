<?php

session_start();

$data = mysqli_connect("localhost", "root", "", "schoolproject");

if($_GET['student_id'])
{
    $user_id=$_GET['student_id'];

    $sql="DELETE FROM users WHERE id='$user_id' ";

    $result=mysqli_query($data,$sql);

    if($result)
    {
        $_SESSION['messege']='Delete Student is Successful';
        header("location:view_student.php");
    }
}






?>