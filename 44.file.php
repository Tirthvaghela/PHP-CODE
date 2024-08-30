<!DOCTYPE html>
<html lang="en">
<head>
    <title>File Upload</title>
</head>
<body>
    <p>Upload file</p>
    <form enctype="multipart/form-data" method="POST">
        <input type="file" name="upload"><br><br>
        <input type="submit" name="check">
    </form>
    <?php
        if (!empty($_FILES['upload'])) {
            echo "File Name: " . $_FILES['upload']['name'] . "<br>";
            echo "File Type: " . $_FILES['upload']['type'] . "<br>";
            echo "File Size: " . $_FILES['upload']['size'] . " bytes<br>";
            echo "Temporary File Location: " . $_FILES['upload']['tmp_name'] . "<br>";
            echo "Error Code: " . $_FILES['upload']['error'] . "<br>";

            $path = "upload/";

            $path = $path . basename($_FILES['upload']['name']);

            if (move_uploaded_file($_FILES['upload']['tmp_name'],$path)) {
                echo" The file  ".basename($_FILES['upload']['name'])."  has been uploaded";
            }
            else{
               echo"Error ullu";
            }

        }
    ?>
</body>
</html>
