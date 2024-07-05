<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <div>
        <?php
        $produto = "Sorvete";
        $valor = 29.5;
        //echo "O $produto custo R$ $valor";.
       // echo "O $produto custa RS". number_format($valor,2);
        printf("O %s custa R$ %.2f", $produto, $valor);
        echo "<br>";
        // %u para valor decimal sem sinal - %d valor decimal tanto positivo qt negativo
        $vto = array (2, 5, 7, 1, 5);
        print_r($vto);
        echo "<br>";
        var_dump($vto);
        echo "<br>";
        var_export($vto);
        ?>
    </div>
</body>
</html>