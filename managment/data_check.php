<?php

session_start();

$data = mysqli_connect("localhost", "root", "", "schoolproject");

if($data===false)
{
    die("connection fail");
}


if(isset($_POST['apply']))
{
    $data_name=$_POST['name'];
    $data_email=$_POST['email'];
    $data_phone=$_POST['phone'];
    $data_messege=$_POST['messege'];


    $sql="insert into admission(name,email,phone,messege)
     values ('$data_name','$data_email','$data_phone','$data_messege')";


     $result=mysqli_query($data,$sql);


     if($result)
     {
        $_SESSION['message']="your application sent successfully";
        header("location:index.php");
     }
     else
     {
        echo "Apply Failed";
     }


}




?>