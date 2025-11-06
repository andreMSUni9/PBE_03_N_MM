<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - 6/11</title>
</head>
<body>
    <h2>Laços de repetição</h2>
    <?php
    $cores=["blue","red","green","yellow","gray","orange","pink"];
    

    echo "Quantidade: ". count($cores); //Count conta quantos valores foram colocados na variavel cores.
    sort($cores);
    echo "<hr>";
    print_r($cores);
    echo "<p>$cores[0]</p>";
    echo "<hr>";
    for($i=0;$i<count($cores);$i++){
        echo "<p style='background:$cores[$i]'>$cores[$i]</p>";
    }
    echo "<hr>";
    echo "<h2>Repetição com foreach</h2>";
    $produto=["id"=>1,"nome"=>"caderno","valor"=>30.55];
    foreach($produto as $pos=>$valor){
        echo "$pos: $valor<br>";
    }
    echo "<hr>";
    $produtos=[
        ["id"=>1,"nome"=>"caderno","valor"=>30.55],
        ["id"=>2,"nome"=>"lapis","valor"=>2.35],
        ["id"=>3,"nome"=>"borracha","valor"=>0.55]
    ];
    foreach($produtos as $linha){

        echo $linha["id"]."<br>";
        echo $linha["nome"]."<br>";
        echo $linha["valor"]."<br>";
    }
     
    ?>
</body>
</html>