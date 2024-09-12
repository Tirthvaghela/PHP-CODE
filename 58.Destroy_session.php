<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
        <?php
        session_unset();//will not destroy session 

        session_destroy();// will destroy both session and variable

        print_r($_SESSION);
        
        ?>
</body>
</html>