<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores string</title>
</head>
<body>
    <h2>Operadores string</h2>
    <?php
$a = "Maria ";
echo "$a <br>";
$b = "Leopoldina ";
echo "$b <br>";
echo $a . $b;
$b .= $a;
$b.= "Pedro";
echo "<br>$b"; 
?>
</body>
</html>