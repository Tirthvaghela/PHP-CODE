<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <select name="num[]">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="">9</option>
            <option value="10">10</option>
        </select>
        <input type="submit" name="submit">
    </form>

    <?php
if (isset($_POST['submit'])) {
    $nums = $_POST['num'];
    echo "You have selected : "."<br>";
    foreach ($nums as $num) {
        for ($i = 1; $i <= 10; $i++) {
            echo $num . " * " . $i . " = " . $num * $i . "<br>";
        }
    }
}
?>

</body>
</html>