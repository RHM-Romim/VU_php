<!-- 8. Write a PHP script that creates an associative array with keys as fruit names and values as their colors. Then print all key-value pairs.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exp7</title>
</head>
<body>
        <form method="post">
            Enter fruit names and their colors (apple:red, banana:yellow):<br>
            <input type="text" name="fru"><br>
            <input type="submit" value="show">
        </form>

        <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $a = $_POST['fru'];   
                    $pairs = explode(',', $a);  
                    foreach ($pairs as $pair) {
                        list($fruit, $color) = explode(':', $pair); 
                        echo "$fruit => $color<br>";
                    }
                }
        ?>
</body>
</html>


