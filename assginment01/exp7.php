<!-- 7. Write a PHP script that prints the multiplication table for a given number. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exp7</title>
</head>
<body>
        <form action="" method="post">
            <label >Enter a number:</label>
            <input type="text" name="s1"> <br>
            <input type="submit" value="Make a table">
        </form>

        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $x = $_POST['s1'];
                echo "Table of $x <br><br>"; 
                for ($i = 1; $i < 11 ;$i++)
                {
                    echo "$x * $i = ".($x * $i)."<br>";
                }
                
                
            }
        ?>
</body>
</html>