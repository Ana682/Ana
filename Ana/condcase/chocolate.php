<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salada-Bebidas</title>
</head>
<body>
<div>
        <?php
         $qtde = isset($_GET["qtde"])?$_GET["qtde"]:0;
         $salad = isset($_GET["salad"])?$_GET["salad"]:1;
         switch($salad) {
            case 1:
                $pedido = $qtde * 2;
                $escolha = "tomate";
                break;
            case 2:
                $pedido = $qtde * 3;
                $escolha = "alface";
                break;
            case 3:
                $pedido = $qtde * 5;
                $escolha = "refrigerante";
                break;
            case 4:
                $pedido = $qtde * 6;
                $escolha = "suco";
         }
         echo "Você pediu $qtde $escolha, irá pagar $pedido.";
        ?>
    </div>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</body>
</html>