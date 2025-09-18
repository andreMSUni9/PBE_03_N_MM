<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<pre>";print_r($_REQUEST);echo "</pre>";
    $Nome=$_POST["Nome"];
    $Data_de_aniversario=$_POST["Idade_do_ALUNO"];
    $AV1=$_POST["AV1"];
    $AV2=$_POST["AV2"];
    $Media=($AV1+$AV2)/2;

    echo "Nome: $Nome<br>";
    echo "Data de aniversario: $Data_de_aniversario<br>";
    echo "AV1: $AV1 <br>";
    echo "AV2: $AV2 <br>";
    echo "<h2>A sua media é: $Media</h2>";
    ?>
</body>
</html>