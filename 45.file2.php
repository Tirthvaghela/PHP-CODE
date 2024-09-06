<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form method="POST">
        Enter number : <input type="number" name="num"><br><br>
        <input type="submit" name="submit"><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];

        $fact = 1;
        for ($i = $num; $i > 1; $i--) {
            $fact = $fact * $i;
        }
        echo "Fcatorial : ", $fact;
    }

    ?>
</body>

</html>