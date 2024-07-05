<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formrt</title>
</head>
<body>
<style>
         body{
            background-color: rgb(215, 100, 161);
            font-style: italic;
        }
    </style>
<?php
    $nome = $_GET['nome'];
    $id= $_GET['idade']??0;
    $fases= $_GET['fases']??0;
    
    ?>
   <main>
   <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <label for="nome">Qual seu nome? </label>
    <input type="text" name="nome" id="idnome">
    <br>
    <br>
    <fieldset>
        <legend>Qual sua idade?</legend>
        <input type="radio" name="idade" id="ididade" value="1">
        <label for="menor">Até 12 anos</label>
        <input type="radio" name="idade" id="ididade" value="2">
        <label for="meio">13 a 25 anos</label>
        <input type="radio" name="idade" id="ididade" value="3">
        <label for="maior">acima de 25 anos</label>
        <br><br>
</fieldset>
<fieldset>
        <legend>Qual sua parte do dia preferida?</legend>
        <input type="radio" name="fases" value="1">
        <label for="m">Manhã</label>
        <input type="radio" name="fases" value="2">
        <label for="t">Tarde</label>
        <input type="radio" name="fases" value="3">
        <label for="n">Noite</label>
    </fieldset>
    <input type="submit" value="Enviar">
   </form>
</main>
<section>
     <?php
     if($id== 1 && $fases==1){
        echo "$nome, você não é todos as suas imperfeições.";
    }
    else{
        if($id== 1 && $fases==2){
            echo "$nome, você veria que a minha alma é o reflexo de você.";
        }
        else{
            if($id== 1 && $fases==3){
            echo "$nome, você andaria até o fundo para encontrar o desejo que está em sua alma.";
        } 
        else{
            if($id== 2 && $fases==1){
                echo "$nome, você e? ";
            }
            else{
                if($id== 2 && $fases==2){
                    echo "$nome, talvez seja nesse ser e deixar de ser é que você se perde no seu proprio eixo";
                }
                else{
                    if($id== 2 && $fases==3){
                    echo "$nome, você ainda tem os mesmos olhos, mas eles não olham da mesma forma como antes, você ainda tem as mesmas maõs, mas ela nao escreve como antes.";
                }
                else{
                    if($id== 3 && $fases==1){
                    echo "$nome, você tenta procurar coisas no dicionario que encontra-se em seu coração.";
                }
                else{
                    if($id== 3 && $fases==2){
                    echo "$nome, quando você sentir que não consegue, lembre que ainda o seu coração bate, na batida do peito.";
                }
                else{
                    if($id== 3 && $fases==3){
                    echo "$nome, você é como a lua da meia noite, brilha mesmo na escuridão";
                }
            }
        }
        }
    }  
  }
 }
}
    }
    
     ?>
</section>
</body>
</html>