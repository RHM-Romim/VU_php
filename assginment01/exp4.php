<!-- 4. Write a PHP script that counts how many times a particular character appears in a string. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exp4</title>
</head>
<body>
        <form action="" method="post">
            <label >Enter a string:</label>
            <input type="text" name="s1"> <br>
            <label >Enter character:</label>
            <input type="text" name="s2"> <br>
            <input type="submit" value="Enter">
        </form>

        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $x = $_POST['s1'];
                $y = $_POST['s2'];
                $count = substr_count($x,$y);
                echo "The character '$x' appears $count times in the string.";
            }
        ?>
</body>
</html>