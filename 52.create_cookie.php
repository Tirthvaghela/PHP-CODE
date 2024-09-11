<?php
// Set the cookie with the name 'emp' and value 'RAM', valid for 1 hour
$cookie_name = 'emp';
$cookie_value = 'RAM';
setcookie($cookie_name, $cookie_value, time() + 3600, "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cookie</title>
</head>
<body>
<?php
// Check if the cookie 'emp' is set
if (!isset($_COOKIE[$cookie_name])) {
    echo "COOKIE NOT SET";
} else {
    echo "Cookie Name: " . $cookie_name . "<br>";
    echo "Cookie Value: " . $_COOKIE[$cookie_name];
}
?>
</body>
</html>
