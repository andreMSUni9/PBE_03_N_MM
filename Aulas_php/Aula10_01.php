<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Aula 10 - 23/10</title>
</head>
<body>
    <h1 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Estrutura de Repetição</h1>
    <?php
echo "<h2>While</h2>";
$i = 0;
while($i<5){
    echo "$i ";
    $i++;
}
echo "<hr>";
$i = 13;
while($i<17){
    echo "$i ";
    $i++;
}
echo "<hr>";
$i = 0;
while($i<=10){
    echo "$i ";
    $i+=2;
}
echo "<hr>";

echo "<h2>DO while</h2>";
$i=7;
do{
    echo "$i ";
    $i++;
}while($i<5);
echo "<hr>";
echo "<h2>For</h2>";
for($i=5;$i<25;$i+=5){echo "$i ";} // As chaves precisam em pithon para funcionar.

echo "<hr>";

for ($i=1; $i<=2; $i++) { //externo
  for ($j=5; $j<=6; $j++) { //interno
    echo "$i $j<br>";
  }
}
    ?>
</body>
</html>