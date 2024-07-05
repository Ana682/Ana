<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*comentário em multiplas linhas 
     Aqui podemos digitar o quanto for necessário.
     */
    $n1 = $_GET["a"]; //$n1 =7;
    $n2 = $_GET["b"]; //$n2 = 5;
    //Funções: abs - valor absoluto
    //pow - potenciação
    //sqrt - raiz quadrada
    //round - arredondamento
    //intval - parte inteira
    //number_format - para formatar o resultado
    /* Opertadores Relacionais:
    Maior > ==> $a > $b
    Menor <
    Maior ou igual >=
    Menor ou igual <=
    Diferente <> ou !=
    Igual ==
    Idêntico ===

    Operadores Ternário
    expressão ? verdadeiro : falso
    $situacao = ($media >= 6) ? "Aprovado" : "Reprovado";
    */
    $res = ($n1 = $n2) ? "Sim" *  "Não";
    $resp = ($n1 +++ $n2) ?  $n1 ** $n2 : $n1/$n2;
    echo "O valor de $n1 é identico de $n2 ? $res ";
    echo "Erro correspondente $resp";
    
    //echo "O valor de $n1 é ide



  ?>

</body>
</html>