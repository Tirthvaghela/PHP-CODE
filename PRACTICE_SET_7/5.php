<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="POST">
        UserName: <input type="text" name="uname" value="<?php if (isset($_COOKIE['USERNAME'])) { echo $_COOKIE['USERNAME']; } ?>"><br>
        Password: <input type="password" name="upass" value="<?php if (isset($_COOKIE['PASSWORD'])) { echo $_COOKIE['PASSWORD']; } ?>"><br>
        <input type="checkbox" name="remember"> Remember me:
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['remember'])) {
        setcookie("USERNAME", $_POST["uname"], time() + 3600); 
        setcookie("PASSWORD", $_POST["upass"], time() + 3600);
    } else {
        setcookie("USERNAME", "", time() - 3600); 
        setcookie("PASSWORD", "", time() - 3600);
    }
    
    echo "Username: " . $_POST['uname'] . "<br>";
    echo "Password: " . $_POST['upass'];
}
?>
