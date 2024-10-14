<?php
$age = 20;
$days = $age * 365;
echo $days."<br>";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $subject3 = $_POST['subject3'];
    $subject4 = $_POST['subject4'];
    
    $total_marks = 400;
    $obtained_marks = $subject1 + $subject2 + $subject3 + $subject4;
    $percentage = ($obtained_marks * 100) / $total_marks;

    echo "Your percentage is: " . $percentage. "%";
}



/*
4.
a) true. Both conditions are true.
b) true. The first condition is true hence the entire is true.
c) true. The first condition is true hence the rest is true.
d) false. $A==34
e) true. Both conditions are true.
f) true. Both conditions are true.

5.
$a = 33;
$b = 55;
$a += $b;   // $a = $a + $b => 33 + 55 = 88
$c = $a;    // $c = $a => $c = 88
$c -= $b;   // $c = $c - $b => 88 - 55 = 33
$c *= $a;   // $c = $c * $a => 33 * 88 = 2904
$c -= $a;   // $c = $c - $a => 2904 - 88 = 2816
$a++;       // Increment $a => $a = 89

6.
$a = 8;
$b = ++$a + 5;   // $a is incremented to 9, so $b = 9 + 5 = 14
$c = $b-- + 10;  // $b is used as 14, so $c = 14 + 10 = 24, then $b is decremented to 13
echo "a= $a, b= $b, c= $c ";  // Output: a=9, b=13, c=24

7.
a) -30. 6-36=30
b) -26. 4 + (-10)*3=-26
c)-18. (6-12)*3=-18

8.
a)false
b) 23
c) false
d) true
e) false
f) true


*/

?>
<!DOCTYPE html>
<html>
<body>
    <form method="POST">
        Subject 1: <input type="number" name="subject1" required><br>
        Subject 2: <input type="number" name="subject2" required><br>
        Subject 3: <input type="number" name="subject3" required><br>
        Subject 4: <input type="number" name="subject4" required><br>
        <input type="submit" value="Calculate Percentage">
    </form>
</body>
</html>

