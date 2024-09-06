<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>

    <?php
    $name = $Email = $Mobile_no = $Web_Site = $gender = "";
    $nameError = $emailError = $mobileError = $websiteError = $genderError = "";
    $validData = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Name validation
        if (empty($_POST['name'])) {
            $nameError = "Name is required";
        } else {
            $name = htmlspecialchars($_POST['name']);
        }

        // Email validation
        if (empty($_POST['Email'])) {
            $emailError = "Email is required";
        } else {
            $Email = htmlspecialchars($_POST['Email']);
            if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                $emailError = "Invalid email format";
            }
        }

        // Mobile number validation
        if (empty($_POST['Mobile_no'])) {
            $mobileError = "Mobile number is required";
        } else {
            $Mobile_no = htmlspecialchars($_POST['Mobile_no']);
            if (!preg_match("/^[0-9]*$/", $Mobile_no)) {
                $mobileError = "Mobile number must be digits only";
            }
            if (strlen($Mobile_no) != 10) {
                $mobileError = "Mobile number must be exactly 10 digits";
            }
        }

        if (empty($_POST['Web_Site'])) {
            $Web_Site = " ";
        }
        else{
            $Web_Site = $_POST['Web_Site'];

            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $Web_Site)) {
                $websiteError = "Invalid URL";
            } else {
                header("Location: " . $Web_Site);
                exit();
            }
        }
            
        

        // Gender validation
        if (empty($_POST['gender'])) {
            $genderError = "Gender is required";
        } else {
            $gender = $_POST['gender'];
        }

        // If all validations pass
        if (empty($nameError) && empty($emailError) && empty($mobileError) && empty($websiteError) && empty($genderError)) {
            $validData = true;
        }
    }
    ?>

    <h2>Registration Form</h2>

    <span class="error">* Required field</span>
    <br>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="Tirth"<?php echo $name; ?>">
        <span class="error">* <?php echo $nameError; ?></span>
        <br><br>

        Email: <input type="text" name="Email" value="abc@gmail.com"<?php echo $Email; ?>">
        <span class="error">* <?php echo $emailError; ?></span>
        <br><br>

        Mobile No.: <input type="text" name="Mobile_no" value="1234567890"<?php echo $Mobile_no; ?>">
        <span class="error">* <?php echo $mobileError; ?></span>
        <br><br>

        Website: <input type="text" name="Web_Site" <?php echo $Web_Site; ?>">
        <span class="error"><?php echo $websiteError; ?></span>
        <br><br>

        Gender:
        <input type="radio" name="gender" value="male" checked <?php if ($gender == "male") echo "checked"; ?>> Male
        <input type="radio" name="gender" value="female" <?php if ($gender == "female") echo "checked"; ?>> Female
        <input type="radio" name="gender" value="other" <?php if ($gender == "other") echo "checked"; ?>> Other
        <span class="error">* <?php echo $genderError; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($validData) {
        echo "<h3>Your Submitted Data:</h3>";
        echo "<p>Name: " . $name . "</p>";
        echo "<p>Email: " . $Email . "</p>";
        echo "<p>Mobile No.: " . $Mobile_no . "</p>";
        echo "<p>Website: " . $Web_Site . "</p>";
        echo "<p>Gender: " . ucfirst($gender) . "</p>";
    }
    ?>
</body>

</html>