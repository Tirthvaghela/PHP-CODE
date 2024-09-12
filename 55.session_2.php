<?php
    session_start();
    print_r($_SESSION);
    $_SESSION['favcolor']=$_POST['favcolor'];
    $_SESSION['animal']=$_POST['animal'];
    echo"fav colour are set".$_SESSION['favcolor'];
    echo"fav animal".$_SESSION['animal'];
    echo"Session are set";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SESSION</title>
</head>
<body>
        <?php
           
        ?>
</body>
</html>
