<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="Female">Female<br>
        <input type="submit" name="submit">
    </form>

    <?php
        if (isset($_POST['submit'])) {
            echo "You have selected : ",$_POST['gender'];
        }
    ?>
</body>
</html>