<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação</title>
</head>
<body>
<?php
       $nascimento = isset($_GET["nascimento"])?$_GET["nascimento"]:0;
       $nome = isset($_GET["nome"])?$_GET["nome"]:0;
       switch($nascimento) {
          case 1:
              $nascimento =18;
              $mensagem = ("Você está no padrão para seu alistamento. Se aliste agora!");
              break;

          case 2:
              $nascimento <=18;
              $mensagem= ("Falta tempo para seu alistamento. Fique tranquilo!");
             break;

       }
        echo "<br> $nome $mensagem.";
         ?>
       <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>

</body>
</html>