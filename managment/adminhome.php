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




?>


<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    include 'admin_css.php';

    ?>

</head>
<body>


<?php

include 'admin_sidebar.php';

?>

    <div class="content">

        <h1>Admin Dashboard</h1>

    </div>




</body>
</html>