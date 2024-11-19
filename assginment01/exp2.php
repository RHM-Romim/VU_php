<!-- 2. Write a PHP function to find the factorial of a given number.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exp2</title>
</head>
<body>
    <form action="" method="post">
        <label >Enter a number:</label>
        <input type="text" name="f1"> <br>
        <input type="submit" value="find factorial">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD']== 'POST')
        {
            $n = $_POST['f1'];
            $fac = 1;
            for($i= 1 ; $i<= $n ; $i++)
            {
                $fac = $fac * $i;
            }

            echo 'the factorial number of ' .$n. ' is: '. $fac;
        }
    ?>
    
</body>
</html>