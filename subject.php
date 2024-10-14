<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $math = $_POST['math'];
    $english = $_POST['english'];
    $physics = $_POST['physics'];
    $total_marks = 300;
    $obtained_marks = $math + $english + $physics;
    $percentage = ($obtained_marks * 100) / $total_marks;

    if ($percentage >= 70) {
        $grade = "A";
    } elseif ($percentage >= 60) {
        $grade = "B";
    } elseif ($percentage >= 50) {
        $grade = "C";
    } elseif ($percentage >= 40) {
        $grade = "D";
    } else {
        $grade = "F";
    }

    echo "Obtained Marks: $obtained_marks<br>";
    echo "Percentage: $percentage%<br>";
    echo "Grade: $grade<br>";
}
?>
<!DOCTYPE html>
<html>
<body>
    <form method="POST">
        Math: <input type="number" name="math" required><br>
        English: <input type="number" name="english" required><br>
        Physics: <input type="number" name="physics" required><br>
        <input type="submit" value="Generate Marksheet">
    </form>
</body>
</html>
