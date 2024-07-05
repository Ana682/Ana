<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
    <header>
        <h1>Calcular o IMC</h1>
    </header>
    <main> 
        <?php
        $nome = $_GET["nome"];
        $altura = $_GET["altura"];
        $peso = $_GET["peso"];
        $imc = ($altura*$altura)/$peso;
        echo "$nome, seu IMC é $imc";
        ?>
         <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>
</body>
</html>