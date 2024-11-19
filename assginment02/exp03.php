<!-- 3. Create a web page for basic voting machine. Create a form with three radio buttons representing three candidates.  When  the  user  selects  a  candidate  and  submits  the  form,  use  php  to  determine  which candidate was selected and display a message indicating their vote choice.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exp03</title>
</head>
<body>
<form method="POST">
    <label>Select your candidate: </label> <br>
    <input type="radio" name="c" value="Donald John Trump" required> Candidate A<br>
    <input type="radio" name="c" value="Vladimir Vladimirovich Putin" required> Candidate B<br>
    <input type="radio" name="c" value="Narendra Damodardas Modi" required> Candidate C<br>
    <input type="submit" value="Vote!">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (isset($_POST['c'])) 
    {
    $c = $_POST['c'];
    echo "You voted for: " . $c;
    }
}
?>
    
</body>
</html>



