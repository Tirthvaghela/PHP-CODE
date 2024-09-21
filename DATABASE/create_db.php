<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $con = new mysqli($dbhost,$dbuser,$dbpass);


    if ($con->connect_error) {
        die("Connect failed: " . $con->connect_error);
    }
    else{
    echo"Connected successfully....";
    }

    $sql = "CREATE DATABASE IF NOT EXISTS demo";

    $retval = mysqli_query($con,$sql);


    if (!$retval) {
        echo"<br> could not create database".mysqli_select_db($con,"demo");
    }
    else{
        echo"<br> create database successfully ...".mysqli_select_db($con,"demo");

    }
    mysqli_close($con);
?>