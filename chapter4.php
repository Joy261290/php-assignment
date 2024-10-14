<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_POST['sname'] ?? 'N/A';
$gr = $_POST['sgr'] ?? 'N/A';
$sclass = $_POST['class'] ?? 'N/A';
$section = $_POST['sect'] ?? 'N/A';

echo "My name is ".$name."<br>";
echo "Course Name: ".$gr."<br>";
echo "Class: ".$sclass."<br>";
echo "Section: ".$section."<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="chapter4.php">
        Enter Student Name: <input type="text" name="sname"><br>
        Enter Student G.R #: <input type="text" name="sgr"><br>
        Enter Class: <input type="text" name="class"><br>
        Enter Section: <input type="text" name="sect"><br>
        <input type="submit" value="Submit"><br>
        <input type="reset" value="Reset">
    </form>
</body>
</html>