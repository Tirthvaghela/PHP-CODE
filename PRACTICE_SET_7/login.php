<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['LAST_ACTIVITY'] = time(); 
    echo "Login successful!<br>";
    echo '<a href="4.php">Go to Secure Page</a>';
}
?>

<form method="POST" action="">
    Enter Username: <input type="text" name="username" required><br>
    <input type="submit" value="Log In">
</form>
