<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="alistamento.css">
    <title>Alistamento Militar:</title>
</head>
<body>
    <main>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ano_atual = $_POST["ano"];
        $data_nascimento = $_POST["data_nascimento"];
        $data_nascimento = new DateTime($data_nascimento);
        $data_atual = new DateTime("$ano_atual-01-01"); 
        $idade = $data_nascimento->diff($data_atual)->y;
        $nome = $_POST["nome"]?? 0;
    
        if ($idade < 18) {
            $anos_faltantes = 18 - $idade;
            echo "Seu nome:<br> $nome<br><br>";
            echo "Você tem $idade anos.<br> Faltam $anos_faltantes anos para o alistamento.";
        } elseif ($idade == 18) {
            echo "Seu nome:<br> $nome<br><br>";
            echo "Você tem 18 anos.<br> Você já pode se alistar.";
        } else {
            $anos_passados = $idade - 18;
            echo "Seu nome:<br> $nome<br><br>";
            echo "Você tem $idade anos.<br> Já se passaram $anos_passados anos desde o alistamento.";
        }
    }
?>
<br>
<br>
<button onclick="javascript:history.go(-1)">voltar</button>
    </main>
</body>
</html>