<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simple Registration Form</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    // Initialize variables
    $name = $email = $mobile = $website = $gender = "";
    $nameError = $emailError = $mobileError = $websiteError = $genderError = "";
    $isFormValid = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate name
        if (empty($_POST['name'])) {
            $nameError = "Name is required";
        } else {
            $name = $_POST['name'];
            if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
                $nameError = "Only letters and spaces are allowed";
            }
        }

        // Validate email
        if (empty($_POST['email'])) {
            $emailError = "Email is required";
        } else {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailError = "Invalid email format";
            }
        }

        // Validate mobile number
        if (empty($_POST['mobile'])) {
            $mobileError = "Mobile number is required";
        } else {
            $mobile = $_POST['mobile'];
            if (!preg_match("/^\d{10}$/", $mobile)) {
                $mobileError = "Mobile number must be exactly 10 digits";
            }
        }

        // Validate website (optional)
        if (!empty($_POST['website'])) {
            $website = $_POST['website'];
            if (!filter_var($website, FILTER_VALIDATE_URL)) {
                $websiteError = "Invalid URL";
            }
        }

        // Validate gender
        if (empty($_POST['gender'])) {
            $genderError = "Gender is required";
        } else {
            $gender = $_POST['gender'];
        }

        // Check if all fields are valid
        $isFormValid = empty($nameError) && empty($emailError) && empty($mobileError) && empty($websiteError) && empty($genderError);
    }
    ?>

    <h2>Registration Form</h2>
    <p class="error">* Required field</p>

    <form method="POST">
        Name: <input type="text" name="name" value="<?php echo ($name); ?>">
        <span class="error">* <?php echo $nameError; ?></span>
        <br><br>

        Email: <input type="text" name="email" value="<?php echo ($email); ?>">
        <span class="error">* <?php echo $emailError; ?></span>
        <br><br>

        Mobile No.: <input type="text" name="mobile" value="<?php echo ($mobile); ?>">
        <span class="error">* <?php echo $mobileError; ?></span>
        <br><br>

        Website: <input type="text" name="website" value="<?php echo ($website); ?>">
        <span class="error"><?php echo $websiteError; ?></span>
        <br><br>

        Gender:
        <input type="radio" name="gender" value="male" <?php if ($gender == "male") echo "checked"; ?>> Male
        <input type="radio" name="gender" value="female" <?php if ($gender == "female") echo "checked"; ?>> Female
        <input type="radio" name="gender" value="other" <?php if ($gender == "other") echo "checked"; ?>> Other
        <span class="error">* <?php echo $genderError; ?></span>
        <br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($isFormValid) {
        echo "<h3>Your Submitted Data:</h3>";
        echo "<p>Name: " . ($name) . "</p>";
        echo "<p>Email: " . ($email) . "</p>";
        echo "<p>Mobile No.: " . ($mobile) . "</p>";
        echo "<p>Website: ";
        if (!empty($website)) {
            echo "<a href='" . ($website) . "' target='_blank'>" . ($website) . "</a>";
        } else {
            echo "Not provided";
        }
        echo "</p>";
        echo "<p>Gender: " . ucfirst(($gender)) . "</p>";
    }
    ?>
</body>

</html>
