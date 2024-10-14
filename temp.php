<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $centigrade = $_POST['centigrade'];
    $fahrenheit = ($centigrade * 9/5) + 32;

    echo "Temperature in Fahrenheit: " . number_format($fahrenheit, 2) . "°F";
}
?>
<!DOCTYPE html>
<html>
<body>
    <form method="POST">
        Enter temperature in Centigrade: <input type="number" name="centigrade" required><br>
        <input type="submit" value="Convert">
    </form>
</body>
</html>
