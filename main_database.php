<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Insert</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="text"] {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px;
            margin: 5px 0;
            border: none;
            border-radius: 4px;
            background-color: #5cb85c;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST">
            <label for="id">Id:</label>
            <input type="text" name="id">

            <label for="name">Name:</label>
            <input type="text" name="name">

            <input type="submit" name="submit" value="Insert">
            <input type="submit" name="update" value="Update">
            <input type="submit" name="search" value="Search">
            <input type="submit" name="delete" value="Delete">
        </form>

        <?php
        $con = mysqli_connect('localhost', 'root', '', 'mydatabase');
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];

            $ins = "INSERT INTO STUDENT2 (id, name) VALUES ('$id', '$name')";
            $insert_qu = mysqli_query($con, $ins);

            if (!$insert_qu) {
                echo "<p style='color: red;'>Data not inserted: " . mysqli_error($con) . "</p>";
            } else {
                echo "<p style='color: green;'>Data inserted successfully!</p>";
            }
        }

        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];

            $upd = "UPDATE STUDENT2 SET name='$name' WHERE id='$id'";
            $update = mysqli_query($con, $upd);

            if (!$update) {
                echo "<p style='color: red;'>Data not updated: " . mysqli_error($con) . "</p>";
            } else {
                echo "<p style='color: green;'>Data updated successfully!</p>";
            }
        }

        if (isset($_POST['search'])) {
            $id = $_POST['id'];

            $sel = "SELECT * FROM STUDENT2 WHERE id='$id'";
            $result = mysqli_query($con, $sel);

            if (mysqli_num_rows($result) > 0) {
                echo "<table>
                        <tr><th>ID</th><th>Name</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<p style='color: red;'>No record found</p>";
            }
        }

        if (isset($_POST['delete'])) {
            $id = $_POST['id'];

            $del = "DELETE FROM STUDENT2 WHERE id='$id'";
            $delete = mysqli_query($con, $del);

            if (!$delete) {
                echo "<p style='color: red;'>Data not deleted: " . mysqli_error($con) . "</p>";
            } else {
                echo "<p style='color: green;'>Data deleted successfully!</p>";
            }
        }

        mysqli_close($con);
        ?>
    </div>
</body>
</html>