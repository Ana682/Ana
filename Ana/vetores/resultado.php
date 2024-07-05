<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO E PHP</title>
</head>
<body>
    <div>
        <?php
        $opcao = isset($_GET["mes"])?$_GET["mes"]:0;
        $mes = array ("Janeiro", "Fevereiro", "Março");
        $totdias = array(31, 28, 31, 30);
        echo "O mês escolhido foi $mes[$opcao] com $totdias[$opcao] dias."
        ?>
    </div>
</body>
</html>