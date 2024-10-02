<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search</title>
    <style type="text/css">
        body {
            font-family: sans-serif;
            text-align: center;
        }

        input {
            height: 30px;
            width: 230px;
            margin: 10px 0;
            padding: 5px;
        }

        .submit {
            background-color: #08688c;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .form-container {
            padding: 50px;
            width: 100%;
            height: 600px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        h4 {
            color: green;
        }

        h4.error {
            color: red;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 50%;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .insert-link {
            background-color: #08688c;
            color: white;
            border: #ccc;
            padding: 5px 35px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h3>Search by Email</h3>
        <form method="POST">
            <input type="email" name="email" placeholder="Enter email" required><br>
            <input type="submit" name="search" class="submit" value="Search"><br><br>
            Go to Insert Page !!  <a class="insert-link" href="new_db.php">Insert</a>   
        </form>

        <?php
        if (isset($_POST['search'])) {
            $email = $_POST['email'];

            $con = mysqli_connect('localhost', 'root', '', 'mydatabase');

            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sel = "SELECT first_name, last_name, email, pass FROM emp WHERE email='$email'";
            $result = mysqli_query($con, $sel);

            if (mysqli_num_rows($result) > 0) {
                echo "<table>
                        <tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Password</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>{$row['first_name']}</td><td>{$row['last_name']}</td><td>{$row['email']}</td><td>{$row['pass']}</td></tr>";
                }
                echo "</table>";
                
                header("refresh:5;url=new_db.php");
                exit(); 
            } else {
                echo "<h4 class='error'>No record found for the email: $email</h4>";
                
                header("refresh:5;url=new_db.php");
                exit();
            }

            mysqli_close($con);
        }
        ?>
    </div>
</body>

</html>
