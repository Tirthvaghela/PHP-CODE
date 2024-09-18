<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #00c497, #00b5a1);
            color: #333;
            overflow: hidden;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            padding: 10px;
            animation: fadeIn 1s ease-in-out;
        }




        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
            animation: slideIn 0.5s ease-in-out;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-top: 20px;
        }




        .container:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        h2 {
            margin-bottom: 15px;
            font-size: 20px;
            color: #00b5a1;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s, transform 0.2s;
        }

        input:focus,
        select:focus {
            border-color: #00b5a1;
            outline: none;
            transform: scale(1.02);
        }

        button {
            background-color: #14b8a6;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button:hover {
            background-color: #11a391;
        }

        .error,
        .success {
            padding: 10px;
            border-radius: 5px;
            margin: 20px 0;
            font-size: 14px;
        }

        .error {
            background-color: #f44336;
            color: white;
            display: block;
        }

        .success {
            background-color: #4caf50;
            color: white;
            display: block;
        }

        .login {
            margin-top: 15px;
        }

        .login a {
            color: #00b5a1;
            text-decoration: none;
        }

        .login a:hover {
            text-decoration: underline;
            color: #008f82;
        }

        .hobbies-title {
            margin: 15px 0 10px;
            font-size: 16px;
            color: #00b5a1;
            text-align: left;
        }

        .hobbies {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .hobbies label {
            flex: 1;
            margin: 5px;
            display: flex;
            align-items: center;
        }

        .gender-title {
            margin: 15px 0 10px;
            font-size: 16px;
            color: #00b5a1;
            text-align: left;
        }

        .gender {
            display: flex;
            justify-content: space-around;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <section>
        <?php
        // Initialize error and success message variables
        $enrollErr = $nameErr = $dobErr = $timeErr = $genderErr = $successMsg = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $enroll = $_POST['enroll'];
            $name = $_POST['name'];
            $dob = $_POST['dob'];
            $time = $_POST['time'];
            $gender = $_POST['gender'];

            // Validation Patterns
            $enrollPattern = '/^[0-9]{1,10}$/';
            $namePattern = '/^[a-zA-Z\s]+$/';
            $dobPattern = '/^\d{4}-\d{2}-\d{2}$/'; // YYYY-MM-DD format
            $timePattern = '/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/'; // HH:MM format

            // Validation Logic
            if (!preg_match($enrollPattern, $enroll)) {
                $enrollErr = "Invalid enrollment number.";
            }
            if (!preg_match($namePattern, $name)) {
                $nameErr = "Name can only contain letters and spaces.";
            }
            if (!preg_match($dobPattern, $dob)) {
                $dobErr = "Invalid date format. Use YYYY-MM-DD.";
            }
            if (!preg_match($timePattern, $time)) {
                $timeErr = "Invalid time format. Use HH:MM (24-hour format).";
            }
            if (empty($gender)) {
                $genderErr = "Please select your gender.";
            }

            if (empty($enrollErr) && empty($nameErr) && empty($dobErr) && empty($timeErr) && empty($genderErr)) {

                header("refresh:3;url=detail.php"); 
                exit();
            }
        }
        ?>

        <div class="container">
            <h2>Registration</h2>
            <form method="POST" action="detail.php">
                <input type="number" name="enroll" placeholder="Enter your Enrollment No." required>
                <?php if ($enrollErr) echo "<div class='error'>$enrollErr</div>"; ?>

                <input type="text" name="name" placeholder="Enter your Full Name" required>
                <?php if ($nameErr) echo "<div class='error'>$nameErr</div>"; ?>

                <select name="Degree" required>
                    <option value="">--Select Course--</option>
                    <option value="IMSCIT">IMSCIT</option>
                    <option value="MBA">MBA</option>
                    <option value="M.TECH">M.TECH</option>
                </select>

                <div class="gender-title">Gender:</div>
                <div class="gender">
                    <label><input type="radio" name="gender" value="Male" required> Male</label>
                    <label><input type="radio" name="gender" value="Female" required> Female</label>
                    <label><input type="radio" name="gender" value="Other" required> Other</label>
                </div>
                <?php if ($genderErr) echo "<div class='error'>$genderErr</div>"; ?>

                <div class="hobbies-title">Hobbies:</div>
                <div class="hobbies">
                    <label><input type="checkbox" name="hobbies[]" value="Reading"> Reading</label>
                    <label><input type="checkbox" name="hobbies[]" value="Singing"> Singing</label>
                    <label><input type="checkbox" name="hobbies[]" value="Playing"> Playing</label>
                    <label><input type="checkbox" name="hobbies[]" value="Writing"> Writing</label>
                </div>

                <input type="date" name="dob" required>
                <?php if ($dobErr) echo "<div class='error'>$dobErr</div>"; ?>

                <input type="time" name="time" required>
                <?php if ($timeErr) echo "<div class='error'>$timeErr</div>"; ?>

                <button type="submit">Signup</button>
            </form>
        </div>

    </section>
</body>

</html>