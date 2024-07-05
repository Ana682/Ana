<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Classes</title>
</head>
<body>
    <?php 
        require_once "Compt.php";
        $c1 = new Compt();
        /*$c1->marca = "Dell";
        $c1->formato = "Retangulo";
        $c1->cor= "Preto";
        $c1->teclado = "Digital";
        $c1->aberto = true;*/
    

        $c2 = new Compt;
        $c2->setTipo("Apple");
        $c2->setFormato("Quadrado");
        $c2->cor = "Azul";
        $c2->teclado = "Auterno";
        $c2->teclado = true;

        $c1->fechar();
        $c2->abrir();
        $c1->folhear();
        $c2->folhear();
    
        print_r($c1);
        echo "<br>";
        print_r($c2);
   

        
    
    ?>
    
</body>
</html>