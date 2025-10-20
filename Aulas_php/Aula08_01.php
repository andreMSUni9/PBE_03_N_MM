<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1>Aula 08_01 - 25/09</h1>
 <h2>Relacionais</h2>

 <?php
 $a = 10;
 $b = "10";

 echo "igualdade = ".($a==$b). "<br>";// 1 - true / Vai comparar o mesmo valor
 echo "identico = ".($a===$b). "<br>";//  - false / Vai comparar valores e tipos das variaveis
 echo "Diferente ou Não igual = ".($a!=$b). "<br>";//  -false
 echo "Não identico = ".($a!==$b). "<br>";// 1 -true 

 $a = 10;
 $b = 10;
 $c = 11;

 echo "menor =" . ($a<$b)."<br>";
 echo "menor ou igual =" . ($a<=$b)."<br>";
 echo "maior =" . ($c>$b)."<br>";
 echo "maior ou igual =" . ($c>=$b)."<br>";
 ?>   
 <hr>
 <h2>Operadores logicos</h2>
 
<?php
// O not vai inverter o valor booleano (true inverte false)
$a=50;
$b=120;
$c= ($a<=$b); //true
$d= !($a<=$b);//false
var_dump($c);
echo "<br>";
var_dump($d);


// Retorna verdadeiro (true) somente se ambos os operandos forem verdadeiros - AND
$a=50;
$b=120;
$c=($a<=$b);
$d=!($a<=$b);
var_dump($c);
echo "<br>";
var_dump($d);
$e =(($a<=$b) && ($a>=200));//
echo "<br>";
var_dump($e);

//Retorna verdadeiro se pelo menos um dos operandos for verdadeiro.- OR
$a=50;
$b=120;
$c=200;
$d=(($a>=$b) or ($a>=$c));
$e=(($a>=$b) || ($a<=$c));
var_dump($d);
echo "<br>";
var_dump($e);

//Retorna verdadeiro se exatamente um dos operandos for verdadeiro, mas não ambos.
$a=50;
$b=120;
$c=200;
$d=(($a<=$b) xor ($c<=$a));
$e=(($a>=$b) xor ($a>=$c));
var_dump($d);
echo "<br>";
var_dump($e);
?>
<hr>
<h2>Operador ternario</h2>
<?php
/*É uma maneira rápida e compacta de fazer uma decisão simples — algo que normalmente seria 
feito com um if...else.
*/
$a=50;
$b=120;
$c=200;
$d=($a<=$b) ? "Verdadeiro" : "Falso";
$e=($a>=$c) ? "Verdadeiro" : "Falso";
echo "d = $d<br>e = $e";
?>
</body>
</html>