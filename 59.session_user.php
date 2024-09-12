<?php
    session_start();
   
    $_SESSION['favcolor']=$_POST['favcolor'];
    $_SESSION['animal']=$_POST['animal'];

    echo"fav colour are set ".$_SESSION['favcolor'] . "<br>";
    echo"fav animal ".$_SESSION['animal']  . "<br>";
    print_r($_SESSION);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="post">
    Enter color : <input type="text" name="favcolor">
    Enter animal : <input type="text" name="animal">
    <input type="submit" name="submit" value="check">
    </form>
</body>
</html>