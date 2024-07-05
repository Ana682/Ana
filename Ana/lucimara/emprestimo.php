<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $valor = $_GET["valor"];
    $salario = $_GET["salario"];
    $anos = $_GET["anos"];
    $anos = $anos * 12;
    $prestacao = $valor / $anos;
    if(($salario * 30 / 100) < $prestacao){
        echo "Empréstimo negado";
    }
    else{
        echo "Empréstimo aceito, irá pagar $prestacao por mês";
    }
    ?>
</body>
</html>