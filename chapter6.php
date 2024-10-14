<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            $result = $num1 / $num2; 
            break;
    }
    echo "Result: $result";
}
/*
6.
if ($x >= $y) {
    echo "x is greater than or equal to y";
} else {
    echo "y is greater than x";
}
*/
?>
<!DOCTYPE html>
<html>
<body>
    <form method="POST">
        Number 1: <input type="number" name="num1" required><br>
        Number 2: <input type="number" name="num2" required><br>
        Operation:
        <select name="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <input type="submit" value="Calculate">

    </form>
</body>
</html>
