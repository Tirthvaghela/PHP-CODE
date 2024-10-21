<?php
session_start();

$timeout_duration = 600;


if (isset($_SESSION['LAST_ACTIVITY'])) {

    $session_life = time() - $_SESSION['LAST_ACTIVITY'];


    if ($session_life > $timeout_duration) {
        session_unset(); 
        session_destroy();
        header("Location: login.php"); 
        exit();
    }
}


$_SESSION['LAST_ACTIVITY'] = time();


if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = 'JohnDoe';
}


echo "Welcome, " . $_SESSION['username'] . "<br>";
echo "Your session will expire after 10 minutes of inactivity.<br>";
echo '<a href="logout.php">Log Out</a>';
