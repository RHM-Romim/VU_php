<!-- 1. Create a simple web page  that allows  the user to guess  a number between 1 and 10.  PHP script will randomly selects the number. Include a form with an input field for the user to enter their guess. When the user submits the form, use php to check if the guessed number matches a predefined number. If the guess is correct then display a success message in green text. If the guess is incorrect then display a failure 
message in red text. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Number</title>
</head>
<body>
    <form action="" method="post">
        <label>ENTER YOUR GUESS (1 TO 10):</label>
        <input type="number" name="g" min="1" max="10" required> <br><br>
        <input type="submit" value="Guess">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            if (isset($_POST['g'])) 
            {
                $random = rand(1, 10); 
                $g = intval($_POST['g']);
                if ($random == $g) 
                {
                    echo "<p style='color: green;'>Congratulations! You guessed the number correctly.</p>";
                } 
                else 
                {
                    echo "<p style='color: red;'>Incorrect! The correct number was $random.</p>";
                }
            } else {
                echo "<p style='color: black;'>Please enter a number to guess.</p>";
            }
        }
    ?>
</body>
</html>


