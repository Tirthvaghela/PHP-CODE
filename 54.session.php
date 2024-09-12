<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SESSION</title>
</head>
<body>
        <?php
            $_SESSION['favcolor']='red';
            $_SESSION['favcolor']='red';
            echo"Session are set";
        ?>
</body>
</html>