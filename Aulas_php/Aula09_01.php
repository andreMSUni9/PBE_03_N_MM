<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula09_01 - 02/10</title>
</head>
<body>
    <h1>Condicionais em php</h1>
    <h2>IF e ELSE</h2>
<?php
$idade = 15;
if ($idade > 18) {
    echo "Você é maior de idade.";
}elseif($idade >= 18){
    echo "Você é igual a idade.";
}else{
    echo "Você é menor de idade.";
}
?>
<hr>
<h2>IF, ELSE e ELSEIF</h2>
<?php
$hora = -18;

if ($hora >= 0 and $hora <=12){
    echo "Bom dia!";
} elseif ($hora >= 13 and $hora <=17) {
    echo "Boa tarde!";
}elseif($hora >= 18 and $hora <=23){
    echo "Boa noite!";
}else {
    echo "Esse horario é negativo!";
}
?>    
<hr>
<h2>Operador ternario em idade</h2>
<?php
$idade = 20;
$mensagem = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo $mensagem;
?>
<hr>
<h2>Switch case</h2>
<?php
echo md5("uninove"). "<br>";

date_default_timezone_set("America/Sao_Paulo"); // Aqui estamos pegando o fuso horario de São paulo
echo date("d/m/y H:i:s")."<hr>"; // Aqui estamos colocando a data e horario (obs:Se não colocar o date_default, vai aparecer o horario do servidor alocado o codespace)
$diaSemana = date('w');  // Retorna o dia da semana em número (0-6)

switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
?>
</body>
</html>