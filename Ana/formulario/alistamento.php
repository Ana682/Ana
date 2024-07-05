<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de alistamento</title>
</head>
<body>
<header>
        <h1>Calcular alistamento</h1>
    </header>
    <main>
        <?php
        $nome = $_GET["nome"] ;
        $nascimento = $_GET["nascimento"];
        if($nascimento == 2006){  
           echo  "se aliste!";
        }
        else{
            if ($nascimento >= 2006) {
                echo " Nao se aliste!";

            }
            }
        echo "Seu alistamento é em $nascimento, $nome.";
        ?>
         <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>
</body>
</html>