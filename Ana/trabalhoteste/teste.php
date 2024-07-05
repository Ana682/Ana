<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: rgba(165, 101, 173, 0.869);
            font-style: italic;
        }
        </style>
</head>
<body>
    <head>
    <h1> Contabilize os SIM de cada série. Verifique em qual série houve maior pontuação</h1>
    </head>
    <main>
        <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:0;
        $a1 = isset($_GET["a1"])?$_GET["1"]:0;
        $a2 = isset($_GET["a2"])?$_GET["2"]:0;
        $a3 = isset($_GET["a3"])?$_GET["3"]:0;
        $a4 = isset($_GET["a4"])?$_GET["4"]:0;
        $a5 = isset($_GET["a5"])?$_GET["5"]:0;
        $a6 = isset($_GET["a6"])?$_GET["6"]:0;
        $a7 = isset($_GET["a7"])?$_GET["7"]:0;
        $a8 = isset($_GET["a8"])?$_GET["8"]:0;
        $a9 = isset($_GET["a9"])?$_GET["9"]:0;
        $a10 = isset($_GET["a10"])?$_GET["10"]:0;
        $sa = 1;

        
        if($a1 == "1"){
           $sa = $sa + 1;
         } if($a2 == "2"){
           $sa = $sa + 1;
         } if($a3 == "3"){
            $sa = $sa + 1;
         } if($a4 == "4"){
            $sa = $sa +1;
         }  if($a5 == "5"){
            $sa = $sa + 1;
         }  if($a6 == "6"){
            $sa = $sa + 1;
         }  if($a7 == "7"){
            $sa = $sa + 1;
         }  if($a8 == "8"){
            $sa = $sa + 1;
         }  if($a9 == "9"){
            $sa = $sa ;
         }  if($a10 == "10"){
            $sa = 1;
         }
         
         
         if ($sa > $sb && $sa > $sc) {
            echo "$nome, Sua pontuação é maior na série  A, tu és VISUAL. 
            A pessoa com predominancia visual é ligada na beleza e estética, em formas de detalhes. Tem uma postura corporal rigida e sua respiração é torácica. Ela fala muito rapidamente, porque as imagens se sucedem em sua mente, como um filho. Entre o prático e o bonito, a pessoa visual sempre escolherá o bonito. Normalmente é obcecada por arrumação e ordem e para atender o que lhe dizem, a pessoa visual precisa que mostrem o que é. O visual não dá valor as palavras e não reage bem ao toque ao contrário da pessoa cinestésico";
         }
         
         $b1 = isset($_GET["b1"])?$_GET["11"]:0;
         $b2 = isset($_GET["b2"])?$_GET["12"]:0;
         $b3 = isset($_GET["b3"])?$_GET["13"]:0;
         $b4 = isset($_GET["b4"])?$_GET["14"]:0;
         $b5 = isset($_GET["b5"])?$_GET["15"]:0;
         $b6 = isset($_GET["b6"])?$_GET["16"]:0;
         $b7 = isset($_GET["b7"])?$_GET["17"]:0;
         $b8 = isset($_GET["b8"])?$_GET["18"]:0;
        $b9 = isset($_GET["b9"])?$_GET["19"]:0;
        $b10 = isset($_GET["b10"])?$_GET["20"]:0;
        $sb = 1;
        
        if($b1 == "11"){
           $sb = $sb +1;
         } if($b2 == "12"){
            $sb = $sb +1;
         } if($b3 == "13"){
            $sb = $sb + 1;
         } if($b4 == "14"){
            $sb = $sb +1;
         }  if($b5 == "15"){
            $sb = $sb +1;
         }  if($b6 == "16"){
            $sb = $sb +1;
         }  if($b7 == "17"){
            $sb + $sb + 1;
         }  if($b8 == "18"){
            $sb = $sb + 1;
         }  if($b9 == "9"){
            $sb = $sb + 1;
         }  if($b10 == "10"){
            $sb = $sb + 1;
         }
         
         
         $c1 = isset($_GET["c1"])?$_GET["21"]:0;
         $c2 = isset($_GET["c2"])?$_GET["22"]:0;
         $c3 = isset($_GET["c3"])?$_GET["23"]:0;
         $c4 = isset($_GET["c4"])?$_GET["24"]:0;
         $c5 = isset($_GET["c5"])?$_GET["25"]:0;
         $c6 = isset($_GET["c6"])?$_GET["26"]:0;
         $c7 = isset($_GET["c7"])?$_GET["27"]:0;
         $c8 = isset($_GET["c8"])?$_GET["28"]:0;
         $c9 = isset($_GET["c9"])?$_GET["29"]:0;
         $c10 = isset($_GET["c10"])?$_GET["30"]:0;
         $sc = 1;
         
         if($c1 == "21"){
         $sc = $sc + 1;
      } if($c2 == "22"){
         $sc = $sc + 1;
      } if($c3 == "23"){
         $sc = $sc + 1;
      } if($c4 == "24"){
         $sc = $sc +1;
      }  if($c5 == "25"){
         $sc = $sc +1;
      }  if($c6 == "26"){
         $sc = $sc +1;
      }  if($c7 == "27"){
         $sc = $sc +1;
      }  if($c8 == "28"){
         $sc = $sc +1;
      }  if($c9 == "29"){
         $sc = $sc +1;
      }  if($c10 == "30"){
         $sc = 1;
      }  

      if ($sa > $sb && $sa > $sc) {
         echo "$nome, Sua pontuação é maior na série  A, tu és VISUAL. 
         A pessoa com predominancia visual é ligada na beleza e estética, em formas de detalhes. Tem uma postura corporal rigida e sua respiração é torácica. Ela fala muito rapidamente, porque as imagens se sucedem em sua mente, como um filho. Entre o prático e o bonito, a pessoa visual sempre escolherá o bonito. Normalmente é obcecada por arrumação e ordem e para atender o que lhe dizem, a pessoa visual precisa que mostrem o que é. O visual não dá valor as palavras e não reage bem ao toque ao contrário da pessoa cinestésico";
      }
         if ($sb > $sa && $sb > $sc){
            echo "$nome, Sua pontuação é maior na série B, tu és AUDITIVO.
            A pessoa com predominancia auditiva, não dá grande valor ás aparencias, mas sim ao bom papo, bom senso e inteliência. São equilibradas e estão sempre prontas a discutir os problemas, pois acreditam na lógica dos argumentos. O tom de voz é médio, a respiração é torácia e abdominal. A memória para os sons é fantástica. São capazes de lembrar-se de coisas que foram ditas há muitos anos. O barulho, vozes, estridentes  ou ásperas ferem as pessoas auditivas. Apreciam músicas com letras bem elaboradas que passam uma mensagem consistente. Para ter certeza de alguma coisa, o auditivo precisa ouvir, do contrário, não acreditará.";
         }
    
      
      if($sc > $sb || $sc > $sa){
         echo "$nome, Sua pontuação é maior na série  C, tu és CINESTÉSICO.
         A pessoa com predominancia do canal cinestésico é, dos 3 tipos, o mais sujeito ao sofrimento. Para esta pessoa, todas as experiências são físicas. Esta pessoa prefere conforto á beleza e busca sempre o bem-estar, o prazer e o aconchego. Este tipo de pessoa ser abraçado, tocada, beijada, para que sinta amada. Ela prefere roupas velhas e confortáveis, sapatos que não apertem, nadar, pisar na areia, estar junto a natureza. As pessoas cinestésicas possui o tom de voz baixo, ritmo lento e respiração abdominal. Gostam de músicas lentas e baladas e se sentem agredidas quando não são correspondidas em sua necessidade de contato corporal.";
         
         
      } 
      
        ?>
    </main>
    
  
   
</body>
</html>