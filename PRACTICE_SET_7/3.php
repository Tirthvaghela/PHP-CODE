<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
    echo "Session started successfully!";
}
?>

<form method="POST" action="3_3.php">
    Enter Username: <input type="text" name="username"><br>
    Enter Email: <input type="email" name="email"><br>
    <input type="submit" value="Log In">
</form>
