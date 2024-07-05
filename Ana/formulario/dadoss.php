<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <header>
        <h1>Dados enviado</h1>
    </header>
    <main>
        <?php 
        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];
        $idade = $_GET["idade"];
        $telefone = $_GET["telefone"];
        echo "<br>Bom te conhecer $nome $sobrenome $idade $telefone";
        ?>
       <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
    </main>
</body>
</html>