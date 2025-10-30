<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula11 - 30/10/25</title>
</head>
<body>
    <h1>Aula 11 - 30/10/25</h1>
    <h2>ARRAYS Indexados</h2>
    <?php
    $x = 10;
    $x = 7.5;
    $x = "teste";
    
    echo "x=$x<br>";
    echo "<hr>";
    $y = [10,7.5,"teste"];
    echo  "y = $y[2]";
    echo "<pre>";
    print_r($y);
    echo "</pre>";
    echo "<br>y[0]= ".$y[0];
    echo "<br>y[1]= ".$y[1];
    echo "<br>y[2]= ".$y[2];
    echo "<hr>";
    $y[0]%= 2; //0
    $y[1]+=0.5;
    $y[2].=" , 123";
    echo "<br>y[0]=".$y[0];
    echo "<br>y[1]=".$y[1];
    echo "<br>y[2]=".$y[2];
    
    echo "<h2>ARRAYS Associativo</h2>";

    $estudante=[
        "ra"=>1234,
        "nome"=>"bete",
        "av1"=>8,
        "av2"=>7.5
    ];
    echo "<br>Estudante = ".$estudante['nome'];

    ?>
</body>
</html>