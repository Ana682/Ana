<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Classes</title>
</head>
<body>
    <?php 
        require_once "Caderno.php";
        $c1 = new Caderno;
        /*$c1->tipo = "Espiral";
        $c1->cor = "Azul";
        $c1->nfolhas = 200;
        $c1->aberto = true;*/

        $c2 = new Caderno;
        $c2->setTipo("Espiral");
        $c2->setCor("Amarelo");
        $c2->nfolhas = 196;
        $c2->aberto = false;

        $c1->fechar();
        $c1->folhear();
    
        print_r($c1);
        echo "<br>";
        print_R($c2);
        
    
    ?>
    
</body>
</html>