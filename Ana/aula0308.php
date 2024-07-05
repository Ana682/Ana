<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      /*
      Pow- potencialização
      sqrt- raiz quadrada
      round- arredondamento
      intval- parte inteira
      number_format- para formatar o resultado */

      /* $n1= $_GET["a"];
      $n2= $_GET["b"];
      echo "O valor absoluto de $n2 é" .abs($n2);
      echo "<br/>O valor de $n1<sup>$n2</sup> é ".pow($n1, $n2);
      echo "<br/>A raiz de $n1 é ". sqrt($n1);
      echo "<br/>O valor de $n2 arrendondado é ".round($n2);
      echo "<br/>A parte inteira de $n2 é ".intval($n2);
      echo "<br/>O valor de $n1 em moeda é R$".number_format($n1,2,",",",");
      
      Operadores Relacionais:
      
      */
      
      /*
      $n1= $_GET["a"];
      $n2= $_GET["b"];
      echo "A raiz quadrada de $n1 é ". sqrt($n1);
      echo"<br/> o valor arredondado da raiz quadrada de $n1 é ".round($n2); 
      */

      $n1=20;
      $n2=80;
      $totalsd= $n1 + $n2;
      $desconto= ($totalsd*10)/100;
      $total= $totalsd-$desconto;
      echo "O total da sua compras com desconto é de R$".number_format($total,2,",");
     ?>

</body>
</html>