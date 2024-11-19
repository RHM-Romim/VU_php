<!-- 2.  Create  a  web  page  with  two  input  fields  for  numbers  and  five  buttons  for  performing  arithmetic operations: addition, subtraction ,multiplication, division, and modulus. Use  php to validate  the inputs, ensuring  both  are  numeric  value. When  the  user clicks  a  button,  perform the  corresponding  operation and display the result.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exp02</title>
</head>
<body>
<form method="POST">
    <input type="number" name="n1" placeholder="First number" required>
    <input type="number" name="n2" placeholder="Second number" required> 
    <select name="op">
        <option value="a">Addition</option>
        <option value="s">Subtraction</option>
        <option value="m">Multiplication</option>
        <option value="d">Division</option>
        <option value="mo">Modulus</option>
    </select> <br>
    <input type="submit" value="Calculate">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $op = $_POST['op'];
    
        if (is_numeric($n1) && is_numeric($n2)) 
        {
            switch ($op) 
            {
                case "a":
                    echo $n1 + $n2;
                    break;
                case "s":
                    echo $n1 - $n2;
                    break;
                case "m":
                    echo $n1 * $n2;
                    break;
                case "d":
                    echo ($n2 != 0) ? $n1 / $n2 : "Can not divided by zero";
                    break;
                case "mo":
                    echo $n1 % $n2;
                    break;
            }
        } 
        
        else 
        {
            echo "Please enter valid numeric values.";
        }
    }
?>
    
</body>
</html>