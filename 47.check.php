<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="checkbox" name="course[]" value="MBA">MBA
        <input type="checkbox" name="course[]" value="MCA">MCA
        <input type="checkbox" name="course[]" value="MSCIT">MSCIT
        <input type="submit" name="submit">
    </form>

    <?php
        if (isset($_POST['submit'])) {
            echo "You have selected : ";
            foreach($_POST['course'] as $value){
                echo"&nbsp".$value;
            }
        }
    ?>
</body>
</html>