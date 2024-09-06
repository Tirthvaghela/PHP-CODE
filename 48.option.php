<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <select name="course[]" multiple>
            <option value="MBA">MBA</option>
            <option value="McA">McA</option>
            <option value="MSciT">MSciT</option>
        </select>
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