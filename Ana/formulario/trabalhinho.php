<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbie</title>
</head>
<body>
    <?php
    $nome = isset($_GET["nome"])?$_GET["nome"]:0;
    $idade = isset($_GET["idade"])?$_GET["idade"]:0;

    switch($idade) {
         case 1:
            echo "$nome, você é menor! Infelizmente, a unica Barbie que você irá ver é o desenho.";
            break;
        

        case 2:
            echo "$nome, você pode entar! No entanto, como ainda é menor, torna-se necessário um acompanhante.";
            break;

        case 3:
            echo "Seja bem-vindo(a) a DREAMHOUSE!!";
            break;

    }
    ?>
    
</body>
</html>