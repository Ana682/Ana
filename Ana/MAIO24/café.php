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
   $qtde = isset($_GET["qtde"])?$_GET["qtde"]:0;
   $salgado = isset($_GET["salgado"])?$_GET["salgado"]:1;
?>
<main>
     <h1>Salgado</h1>
     <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
     <fieldset><legend>Escolha o sabor</legend>
         <input type="radio" name="salgado" id="carne" value="1" checked>
         <label for="carne">Recheio de carne</label>
         <input type="radio" name="salgado" id="frango" value="2">
         <label for="frango">Recheio de frango</label>
         <input type="radio" name="salgado" id="queijo" value="3">
         <label for="queijo">Recheio de queijo</label>
         </fieldset>
        <label for="qtde">Quantidade de salgados:</label>
        <input type="number" name="qtde" id="qtde">
        <input type="submit" value="Pedir">

</form>
</main>
<section>
    <?php
         switch($salgado){
            case 1:
            $pedido = $qtde * 8;
            $escolha = "carne";
            break;
            case 2:
            $pedido = $qtde * 6;
            $escolha = "frango";
            break;
            case 3:
            $pedido = $qtde * 5;
            $escolha = "queijo";
         }

         echo "Você pediu $qtde salgado(s) de $escolha, irá pagar $pedido reais.";
    ?>
</section>
</body>
</html>