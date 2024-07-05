<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = $_GET["nome"];
    $anos = isset($_GET["anos"])?$_GET["anos"]:8;
    $salario = $_GET["salario"];
    
    switch($anos){
        case 1:
            $sal = $salario * 0.03;
            $salario = $sal + $salario;
            $anos = "3 anos ou menos, ";
            $mnsg = "Você trabalha a $anos e vai receber um aumento de 3%,
            ficará com : ";
            break;
        case 2:
            $sal = $salario * 0.125;
            $salario = $sal + $salario;
            $anos = "entre  3 e 10 anos, ";
            $mnsg = "Você trabalha a $anos e vai receber um aumento de %12,5,
            ficará com :";
            break;
        case 3:
            $sal = $salario * 0.20;
            $salario = $sal + $salario;
            $anos = "10 anos ou mais, ";
            $mnsg = "Você trabalha a $anos e vai receber um aumento de %20,
            ficará com :";
     }
     echo "Olá $nome, $mnsg R$salario"
    ?>
</body>
</html>