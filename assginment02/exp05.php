<!-- 5. Create a simple web page with three buttons labeled "Red", "Green", and "Blue". When the user clicks any of the buttons, the background color of the webpage should change according to the button selected. Use php to detect which button was clicked and apply appropriate background color. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exp5</title>
</head>
<body style = "background-color: 
<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $c = $_POST['c'];
} 
echo $c;?>;">
<form method="POST">
    <label> Click any given button to change the web page background color</label> <br> <br>
        <button type="submit" name="c" value="red" style="background-color: red; color: white;">Red</button> <br><br>
        <button type="submit" name="c" value="green" style="background-color: green; color: white;">Green</button> <br><br>
        <button type="submit" name="c" value="blue" style="background-color: blue; color: white;">Blue</button>
    </form>
</body>
</html>