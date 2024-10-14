<?php
$number = $_POST['numbers'];
$result = ($number % 2 == 0) ? "Even" : "Odd";
echo "$number is $result";
?>
<!DOCTYPE html>
<html>
<body>
    <form method="POST">
        Enter a number: <input type="number" name="numbers" required><br>
        <input type="submit" value="Check">
    </form>
</body>
</html>
