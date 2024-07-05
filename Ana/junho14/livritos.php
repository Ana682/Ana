<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Classes</title>
</head>
<body>
    <?php 
        require_once "Livros.php";
        $l1 = new Livros();
        /*$l1->titulo = "A rainha vermelha";
        $l1->cor = "Rosa";
        $l1->nfolhas = 200;
        $l1->aberto = true;*/

        $l2 = new Livros;
        $l2->setTitulo("Terror");
        $l2->setCor("Verde");
        $l2->nfolhas = 625;
        $l2->aberto = false;

        $l1->fechar();
        $l2->abrir();
        $l1->folhear();
        $l2->folhear();
    
        print_r($l1);
        echo "<br>";
        print_r($l2);
   

        
    
    ?>
    
</body>
</html>