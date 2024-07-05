<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
</head>
<body>
    <header>
        <h1>Calcular a média</h1>
    </header>
    <main>
        <?php
        $nome = $_GET["nome"] ;
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"]; 
        $media = ($nota1+$nota2)/2;
        if($media <= 49){  
           echo "infelizmente, você não foi aprovado";
        }
        else{
            if ($media >=50 && $media < 59) {
                echo "você está em recuperação";
            }else{
                echo "parabéns, você foi aprovado";
            }

            }
      
        echo "A média do aluno $nome, foi $media";
        ?>
         <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>
</body>
</html>