<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="avaliação1.css">
    <title>Avaliação PHP</title>
</head>
<body>
<form method = "get" action="avaliação1.php">
   
    Nome:<br>
    <input type="text" placeholder="" name="nome">
    <br>
Ano de nascimento:<br>
    <input type="number" placeholder="" name="ano"/>
    <br>    
    <input type="submit" value="Verificar"/>

    <?php
    $nome = $_REQUEST["nome"];
    $ano = $_REQUEST["ano"];
    $idade = date("Y") - $ano ;
    $idadea = $idade - 18;
    $idadef = 18 - $idade;
    if ($idade >18){
    $alistamento = "<br>Você tem $idade anos e deverá se alistar, parabéns fazem $idadea anos que você está servindo. ";
     echo $alistamento;
    } else {
        $alistamento = "<br>Você tem $idade anos, então não poderá se alistar, no entanto faltam $idadef anos.";
        echo $alistamento;
    }
    ?>
</body>
</html>
