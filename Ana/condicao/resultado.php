<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <main>
        <?php 
        $ano = $_GET["anomas"];
        $idade = date("Y") - $ano;

        echo"<br>Você nasceu em $ano e terá $idade";
        /* if($idade >=18) {
            $voto = "Deve voltar";
            $dirigir = "ja pode dirigir";

        } 
        else{
            $voto = "não pode votar";
            $dirigir = "não pode dirigir";
        }*/
        if($idade < 16){
            $voto = "não pode votar";
            $dirigir = "não pode dirigir";
        }
        else{
            if (($idade >= 16 && $idade < 18) || ($idade > 65)) {
                $voto = "voto opcional";
                $dirigir = "não pode dirigir";
            }
            else{
                $voto = "voto obrigatorio";
                $dirigir = "pode dirigir";
            }
        }
        echo"<br>Com esta idade você $voto e $dirigir";
         ?>
    </main>
</body>
</html>