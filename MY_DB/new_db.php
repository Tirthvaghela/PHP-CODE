<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simple Registration Form</title>
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
        <h3>Insert Data</h3>
        <form method="POST">
            <input type="text" name="fname" placeholder="First Name"><br>
            <input type="text" name="lname" placeholder="Last Name"><br>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="password" name="pass" placeholder="Password"><br>
            <input type="submit" name="submit" class="submit" value="Insert"><br><br>
            Go to Update Page !!   <a class="insert-link" href="update.php">Update</a><br><br><br>
            Go to Search Page !!   <a class="insert-link" href="search.php">Search</a><br><br><br>
            Go to Delete Page !!   <a class="insert-link" href="delete.php">Delete</a><br><br><br>
            
        </form>

        <?php
        if (isset($_POST['submit'])) {
            // Collect form data
            $f_name = $_POST['fname'];
            $l_name = $_POST['lname'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            $con = mysqli_connect('localhost', 'root', '', 'mydatabase');

            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $qry = "INSERT INTO emp (first_name, last_name, email, pass) VALUES ('$f_name', '$l_name', '$email', '$pass')";

            if (mysqli_query($con, $qry)) {
                echo "<h4>Inserted Successfully</h4>";
            } else {
                echo "<h4 class='error'>Data Not Inserted: " . mysqli_error($con) . "</h4>";
            }

            mysqli_close($con);
        }
        ?>
    </div>
</body>

</html>