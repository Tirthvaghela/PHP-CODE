<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
</head>

<body>
    <form method="POST">
        Enter Username : <input type="text" name="name">
        <input type="submit" name="submit">
    </form>
    <?php
        if (isset($_POST['submit'])) {
            $user='username';
            $u_value=$_POST['name'];
            setcookie($user,$u_value, time() + 3600 , '/');

            if (!isset($_COOKIE[$user])) {
                echo"Cookie is not set";
            }
            else{
                echo"Cookie name : ".$user;
                echo"<br>";
                echo"Cookie value : ".$_COOKIE[$user];
            }
        }
    ?>
</body>

</html>