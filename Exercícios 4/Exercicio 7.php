<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Dia da semana</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container-main">
        <h1>Identificador do Dia</h1>
        <form method="get">
            <input type="number" name="dia" placeholder="Insira o dia da semana" required>
            <div id="container-button">
                <input type="submit" value="Verificar">
                <input type="reset" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['dia'])) {
            $dia = (int)$_GET['dia'];
            
            echo "<div class='resultado'>";
            switch($dia) {
                case 1:
                    echo "O dia da semana é Domingo";
                    break;
                case 2:
                    echo "O dia da semana é Segunda";
                    break;
                case 3:
                    echo "O dia da semana é Terça";
                    break;
                case 4:
                    echo "O dia da semana é Quarta";
                    break;
                case 5:
                    echo "O dia da semana é Quinta";
                    break;
                case 6:
                    echo "O dia da semana é Sexta";
                    break;
                case 7:
                    echo "O dia da semana é Sábado";
                    break;
                default:
                    echo "Opção inválida";
           }
           echo "</div>";
        }
        ?>
    </div>
</body>

</html>