<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete das titias</title>
</head>
<body>
<style>
         body{
           background-color: rgb(255, 213, 161);
        }
        h1{
        color: rgb(97, 58, 58);
        }
    </style>
<?php
   $idade = isset($_GET["idade"])?$_GET["idade"]:1;
   $nome = isset($_GET["nome"])?$_GET["nome"]:0;
   $turnos = isset($_GET["turnos"])?$_GET["turnos"]:0;
?>
<main>
     <h1>Conhecimento</h1>
     <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
     <fieldset><legend>Nome</legend>
         <input type="radio" name="nome" id="nome" value="1" checked>
         <label for="carne">Idade</label>
         <input type="radio" name="idade" id="idade" value="2">
         <label for="turnos">Manhã</label>
         <input type="radio" name="manha" id="manha" value="3">
         <label for="turnos">Tarde</label>
         <input type="radio" name="tarde" id="tarde" value="4">
         <label for="turnos">Noite</label>
         <input type="radio" name="noite" id="noite" value="5">
         </fieldset>
        <label for="idade">Calculando:</label>
        <input type="number" name="idade" id="idade">
        <input type="submit" value="enviar">

</form>
</main>
<section>
    <?php
         switch($nome){
            case 1:
            $idade == 12;
            $turnos = "turnos";
            break;
            echo "Sua $idade é igual a 12 é voce selecionou o $turnos. Logo, voccê é como os passáros que cantam pelas manhãs";

        
            case 2:
            $idade >= 13 & 25;
            $turnos = "turnos";
            break;
            echo "Sua $idade é igual a  é voce selecionou o $turnos. Logo, voccê é como os passáros que cantam pelas manhãs";

            case 3:
            $pedido = $qtde * 5;
            $escolha = "queijo";
         }

         echo "Você pediu $qtde salgado(s) de $escolha, irá pagar $pedido reais.";
    ?>
</section>
</body>
</html>