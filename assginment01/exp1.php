<!-- 1. Write a PHP script that compares two numbers and prints the larger number. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exp01</title>
</head>
<body>
    <form action="" method="post">
        <label >Enter the first number:</label>
        <input type="text" name="n1"> <br>
        <label >Enter the second number:</label>
        <input type="text" name="n2"> <br>
        <input type="submit" value="compare them">
    </form>
    
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') /*if(isset($_POST['s']))*/
{
    $pn1 = $_POST['n1'];
    $pn2 = $_POST['n2'];
    $large = $pn1>$pn2? $pn1 : $pn2;
    echo 'The large number is '.$large;
}
?>
</body>
</html>
