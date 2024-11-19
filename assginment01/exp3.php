<!-- 3. Write a PHP script to reverse a string. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exp3</title>
</head>
<body>
        <form action="" method="post">
            <label >Enter a string</label>
            <input type="text" name="s"> <br>
            <input type="submit" value="Enter">
        </form>

        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $x = $_POST['s'];
                $y = strrev($x);
                echo "The reverse of $x is $y";
            }
        ?>
</body>
</html>