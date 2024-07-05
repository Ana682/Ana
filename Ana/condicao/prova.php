<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pré-Prova</title>
</head>
<body>
   
        <?php
       $genero = isset($_GET["genero"])?$_GET["genero"]:0;
       $nome = isset($_GET["nome"])?$_GET["nome"]:0;
       switch($genero) {
          case 1:

              $mensagem = ("Você é do gênero feminino, tenho uma mensagem para você: Quando as raízes são profundas, não há razão para temer ao vento");
              break;

          case 2:
              $mensagem= ("Você é do gênero masculino, tenho uma mensagem para você: Seja você quem for ou que faça quando quer com vontade de alguma coisa é porque esse é o desejo da alma de seu universo");
             break;

       }
        echo "<br> $nome $mensagem.";
         ?>
       <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>

</body>
</html>