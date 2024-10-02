<!DOCTYPE html>
<html lang="en">

<head>
    <title>delete</title>
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

        th,
        td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        /* New CSS class for the insert link */
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
        <h3>Delete by Email</h3>
        <form method="POST">
            <input type="email" name="email" placeholder="Enter email"><br>
            <input type="submit" name="delete" class="submit" value="Delete"><br><br>
            Go to Insert Page !!  <a class="insert-link" href="new_db.php">Insert</a> 
        </form>

        <?php
        if (isset($_POST['delete'])) {
            $email = $_POST['email'];

            $con = mysqli_connect('localhost', 'root', '', 'mydatabase');

            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $delete = "DELETE FROM emp WHERE email='$email'";
            $result = mysqli_query($con, $delete);

            if (!$result) {
                echo "Data Not Deleted: " . mysqli_error($con);
            } else {
                echo "Data Deleted successfully!";
                echo "<h4 class='error'>record Deleted for the email: $email</h4>";
                
                header("refresh:5;url=new_db.php");
                exit();
            }

            mysqli_close($con);
        }
        ?>
    </div>
</body>

</html>
