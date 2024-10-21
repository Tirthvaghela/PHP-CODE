<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
    echo "Welcome, " . $_SESSION['username'] . "<br>";
    echo "Your email: " . $_SESSION['email'];
} else {
    echo "Please log in to access this page.";
}
?>
