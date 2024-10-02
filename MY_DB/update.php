<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update</title>
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
            text-decoration: none; /* Remove underline */
            padding: 5px 15px;
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s; /* Smooth transition */
        }

        
    </style>
</head>

<body>
    <div class="form-container">
        <h3>Update values using email</h3>
        <form method="POST">
            <input type="text" name="fname" placeholder="First Name" required><br>
            <input type="text" name="lname" placeholder="Last Name" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="pass" placeholder="Password" required><br>
            <input type="submit" name="update" class="submit" value="Update"><br><br>
            Go to Insert Page !! <a class="insert-link" href="new_db.php">Insert</a>
        </form>

        <?php
        if (isset($_POST['update'])) {
            $f_name = isset($_POST['fname']) ? $_POST['fname'] : '';
            $l_name = isset($_POST['lname']) ? $_POST['lname'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $pass = isset($_POST['pass']) ? $_POST['pass'] : '';

            $con = mysqli_connect('localhost', 'root', '', 'mydatabase');

            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }

            $update = "UPDATE emp SET first_name='$f_name', last_name='$l_name', pass='$pass' WHERE email='$email'";
            $qry = mysqli_query($con, $update);

            if (!$qry) {
                echo "<h4 class='error'>Data Not Updated</h4>";
            } else {
                echo "<h4>Data Updated</h4>";
                header("refresh:5;url=new_db.php");
                exit();
            }

            mysqli_close($con);
        }
        ?>
    </div>
</body>

</html>