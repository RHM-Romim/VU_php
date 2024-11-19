<!-- 4. Create a form with the following fields: Name, Email, and Age. When the form is submitted, use php to validate the inputs. Ensure that the Name should not be empty, the Email should contain the "@" symbol, and the Age should be a number between 18 and 30. If any input is invalid, show an error message. Otherwise, display a success message. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exp04</title>
</head>
<body>
<form method="POST">
    <label >Name:</label>
    <input type="text" name="n"  required><br>
    <label >Email:</label>
    <input type="email" name="e"  required><br>
    <label >Age:</label>
    <input type="number" name="a" min="18" max="30" required><br>
    <input type="submit" value="Send">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = trim($_POST['n']);
        $e = trim($_POST['e']);
        $a = intval($_POST['a']);
    
        if (empty($n)) {
            echo "Name cannot be empty.";
        } elseif (!filter_var($e, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email address.";
        } elseif ($a < 18 || $a > 30) {
            echo "Age must be between 18 and 30.";
        } else {
            echo "Success!";
        }
    }
?>

    
</body>
</html>