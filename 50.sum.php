<!DOCTYPE html>
<html lang="en">
<head>
    <title>Digit Sum Calculator</title>
</head>
<body>
    <form method="POST">
       Enter a number: <input type="text" name="num">
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
        if (isset($_POST['submit'])) {
            $num = $_POST['num'];
            $sum = 0;

            while ($num != 0) {
                $res = $num % 10; 
                $sum = $sum + $res; 
                $num = $num / 10; 
                }
            

            echo "Sum of digits is: $sum";
        }
    ?>
</body>
</html>