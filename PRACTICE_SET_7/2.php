<?php
// Check if the cookie is set
if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
    echo "Welcome, $username!";
} else {
    echo "Please log in.";
}
?>
