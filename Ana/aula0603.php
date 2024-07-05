<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     //comentário em uma linha
     /*comentário em múltiplas linhas
      Aqui podemos digitar o quanto for necessário.
      */
      /*$n1= 7;
      $n2= 5;
      $soma = $n1 + $n2;
      //echo "<br/>a soma entre $n1 e $n2 é igual a $soma";
      echo "A soma entre $n1 e $n2, é igual a ". ($n1+$n2);
      echo "<br/>A subtração entre $n1 e $n2, é igual a ". ($n1-$n2);
      echo "<br/>A divisão entre $n1 e $n2, é igual a ". ($n1/$n2);
      echo "<br/>A multiplicação entre $n1 e $n2, é igual a ". ($n1*$n2);
      echo "<br/>O  modúlo entre $n1 e $n2, é igual a ". ($n1%$n2);
       
      */
      $peso = $_GET["p"]; 
      $altura = $_GET["a"]; 
      $imc = $peso/($altura*$altura);
      echo "o imc entre $peso, $altura e $altura é igual a $imc";
      ?>
</body>
</html>