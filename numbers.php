<?php
$number = $_POST['number'];
if ($number >= 1 && $number <= 100) {
    echo "$number is within the range of 1 to 100.";
} else {
    echo "$number is above 100.";
}
?>
<!DOCTYPE html>
<html>
<body>
    <form method="POST">
        Enter a number: <input type="number" name="number" required><br>
        <input type="submit" value="Check Range">
    </form>
</body>
</html>
