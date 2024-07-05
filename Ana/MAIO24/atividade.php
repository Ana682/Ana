<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="periodos.css">
    <title>Aula-Lucimara-Periodos</title>
</head>
<body>
<h1>Suas informações aqui</h1>
    <div class="php">
    <?php
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
        $periodo = $_GET["periodo"];

        switch ($periodo) {
            case 1:
                if ($idade <= 12) {
                    echo "Olá $nome!<br> você tem $idade anos, e escolheu o periodo da manhã, tenha um bom dia! pudim";
                } 
                elseif ($idade >= 13 && $idade <= 25) {
                    echo "Olá $nome!<br> você tem $idade anos, e escolheu o periodo da manhã, tenha um bom dia! pudim com calda";
                }
                elseif ($idade > 26) {
                    echo "Olá $nome!<br> você tem $idade anos, e escolheu o periodo da manhã, tenha um bom dia! pudim com calda e cereja";
                }
                break;
                case 2:
                    if ($idade <= 12) {
                        echo "Olá $nome!<br> você tem $idade anos, e escolheu o periodo da tarde, tenha uma ótima tarde! chocolate.";
                    }
                    elseif ($idade >= 13 && $idade <= 25) {
                        echo "Olá $nome!<br >você tem $idade anos, e escolheu o periodo da tarde, tenha uma ótima tarde! chocolate branco";
                    }
                    elseif ($idade > 26) {
                        echo "Olá $nome!<br> você tem $idade anos, e escolheu o periodo da tarde, tenha uma ótima tarde! chocolate branco e preto";
        }break;
        case 3:
            if ($idade <= 12) {
                echo "Olá $nome!<br>você tem $idade anos, e escolheu o periodo da noite, tenha uma ótima noite! pastel";
            } 
            elseif ($idade >= 13 && $idade <= 25) {
                echo "Olá $nome!<br> você tem $idade anos, e escolheu o periodo da noite, tenha uma ótima noite! pastel de palmito";
            }
            elseif ($idade > 26) {
                echo "Olá $nome!<br> você tem $idade anos, e escolheu o periodo da noite, tenha uma ótima noite! pastel de palmito e queijo";
            }break;
            }
        ?>
    </div>
    <div>
        <main>
            <section>
                <form action="<?$_SERVER['PHP_SELF'] ?>" method="get">
                    <label for="nome">Digite seu nome: </label><br>
                    <input type="text" name="nome" id="nome"><br>
                    <label for="idade">Digite sua idade: </label><br>
                    <input type="number" name="idade" id="idade"><br><br>
                    <label for="periodo">Manhã</label>
                    <input type="radio" name="periodo" id="periodo" value="1" checked>
                    <label for="periodo">Tarde</label>
                    <input type="radio" name="periodo" id="periodo" value="2">
                    <label for="periodo">Noite</label>
                    <input type="radio" name="periodo" id="periodo" value="3"><br><br>
                    <input type="submit" value="enviar" class="button">
                </form>
            </section>
        </main>
    </div>
</body>
</html>