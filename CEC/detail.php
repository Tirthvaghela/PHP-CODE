<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
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
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 15px;
            font-size: 20px;
            color: #00b5a1;
        }

        .detail {
            margin: 10px 0;
            font-size: 16px;
        }

        .back {
            margin-top: 20px;
        }

        .back a {
            color: #00b5a1;
            text-decoration: none;
        }

        .back a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <section>
        <div class="container">
            <h2>Registration Details</h2>
            <div class="detail"><strong>Enrollment No:</strong> <?php echo ($_POST['enroll']); ?></div>
            <div class="detail"><strong>Name:</strong> <?php echo ($_POST['name']); ?></div>
            <div class="detail"><strong>Date of Birth:</strong> <?php echo ($_POST['dob']); ?></div>
            <div class="detail"><strong>Course:</strong> <?php echo ($_POST['Degree']); ?></div>
            <div class="detail"><strong>Hobbies:</strong> <?php echo ($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : 'None'; ?></div>
            <div class="detail"><strong>Time:</strong> <?php echo ($_POST['time']); ?></div>
            
            <div class="back">
                <a href="sign-up.php">Go to Registration</a>
            </div>
        </div>
    </section>
</body>

</html>
