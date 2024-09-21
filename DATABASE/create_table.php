<?php
$con = mysqli_connect('localhost', 'root', '', 'mydatabase');

if(!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS student (id int(5) PRIMARY KEY,name varchar(20),email varchar(20))";

if (mysqli_query($con, $sql)) {
    echo "Table created successfully!";
} else {
    echo "Error creating table: " . mysqli_connect_error($con);
}

mysqli_close($con);
?>