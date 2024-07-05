<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores</title>
</head>
<body>
    <div>
        <?php 
        $mes = isset($_GET["mes"])?$_GET["mes"]:1;
        $dias=array(31,28,31,30,31,30,31,31,30,31,30,31);
        switch($mes) {
            case 1:
                $mes = $dias[0];
                $dias = "janeiro";
            break;
            case 2:
                $mes = $dias[1];
                $dias = "fevereiro";
            break;
            case 3:
                $mes = $dias[2];
                $dias = "marco";
            break;
            case 4:
                $mes = $dias[3];
                $dias = "abril";
            break;
            case 5:
                $mes = $dias[4];
                $dias = "maio";
            break;
            case 6:
                $mes = $dias[5];
                $dias = "junho";
            break;
            case 7:
                $mes = $dias[6];
                $dias = "julho";
            break;
            case 8:
                $mes = $dias[7];
                $dias = "agosto";
            break;
            case 9:
                $mes = $dias[8];
                $dias = "setembro";
            break;
            case 10:
                $mes = $dias[9];
                $dias = "outubro";
            break;
            case 11:
                $mes = $dias[10];
                $dias = "novembro";
            break;
            case 12:
                $mes = $dias[11];
                $dias = "dezembro";
            break;
        }
          echo "O mês é $dias, possuí $mes dias </br>";
        ?>
        <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
    </div>
</body>
</html>