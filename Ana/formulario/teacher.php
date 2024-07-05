<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = $_GET["nome"];
    $nascimento = $_GET["nasc"];
    $idade = date("Y") - $nascimento;

    if($idade < 18){
        echo "$nome, você tem $idade anos e ainda faltam ", 18 - $idade, " anos (s) para o alistamento.";
    } elseif ($idade == 18){
        echo "$nome, você tem $idade anos e já está na hora de se alistar!";
    } elseif ($idade > 18){
        echo "$nome, você tem $idade anos e já passou ", $idade - 18, " ano(s) do alistamento. ";
    }
    ?>
</body>
</html>


echo "Sua pontuação é maior na série  A, tu és VISUAL. 
A pessoa com predominancia visual é ligada na beleza e estética, em formas de detalhes. Tem uma postura corporal rigida e sua respiração é torácica. Ela fala muito rapidamente, porque as imagens se sucedem em sua mente, como um filho. Entre o prático e o bonito, a pessoa visual sempre escolherá o bonito. Normalmente é obcecada por arrumação e ordem e para atender o que lhe dizem, a pessoa visual precisa que mostrem o que é. O visual não dá valor as palavras e não reage bem ao toque ao contrário da pessoa cinestésico";


echo "Sua $pont pontuação é maior na série $sb B, tu és AUDITIVO.
A pessoa com predominancia auditiva, não dá grande valor ás aparencias, mas sim ao bom papo, bom senso e inteliência. São equilibradas e estão sempre prontas a discutir os problemas, pois acreditam na lógica dos argumentos. O tom de voz é médio, a respiração é torácia e abdominal. A memória para os sons é fantástica. São capazes de lembrar-se de coisas que foram ditas há muitos anos. O barulho, vozes, estridentes  ou ásperas ferem as pessoas auditivas. Apreciam músicas com letras bem elaboradas que passam uma mensagem consistente. Para ter certeza de alguma coisa, o auditivo precisa ouvir, do contrário, não acreditará.";


echo "Sua $pont pontuação é maior na série $sc C, tu és CINESTÉSICO.
A pessoa com predominancia do canal cinestésico é, dos 3 tipos, o mais sujeito ao sofrimento. Para esta pessoa, todas as experiências são físicas. Esta pessoa prefere conforto á beleza e busca sempre o bem-estar, o prazer e o aconchego. Este tipo de pessoa ser abraçado, tocada, beijada, para que sinta amada. Ela prefere roupas velhas e confortáveis, sapatos que não apertem, nadar, pisar na areia, estar junto a natureza. As pessoas cinestésicas possui o tom de voz baixo, ritmo lento e respiração abdominal. Gostam de músicas lentas e baladas e se sentem agredidas quando não são correspondidas em sua necessidade de contato corporal.";