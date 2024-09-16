<?php
    // Check if the form has been submitted
    if (isset($_POST['submit'])) {
        // Retrieve form data
        $username = $_POST["username"];
        $password = $_POST['password'];
        $user_type = $_POST['user_type'];
        $display_name = $_POST['display_name'];
        $address = $_POST["address"];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $terms = $_POST['terms'];

        echo "<h2>Registration Form Results</h2>";
        echo "<table border=2>";
        echo "<tr><th>Field</th><th>Value</th></tr>";
        echo "<tr><td>Username :</td><td>" . $username . "</td></tr>";
        echo "<tr><td>Password :</td><td>" . $password . "</td></tr>";
        echo "<tr><td>User_type :</td><td>" . $user_type . "</td></tr>";
        echo "<tr><td>Display_name :</td><td>" . $display_name . "</td></tr>";
        echo "<tr><td>Address :</td><td>" . $address . "</td></tr>";
        echo "<tr><td>Email :</td><td>" . $email     . "</td></tr>";
        echo "<tr><td>Gender :</td><td>" . $gender     . "</td></tr>";
        echo "<tr><td>Terms :</td><td>" . $terms     . "</td></tr>";
        
        


        echo "</table>";
    } else {
        echo "<h2>Please fill out the registration form.</h2>";
    }
    ?>