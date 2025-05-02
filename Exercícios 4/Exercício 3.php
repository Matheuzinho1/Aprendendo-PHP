<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Dias do Mês</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container-main">
        <h1>Verificar Dias do Mês</h1>
        <form method="get">
            <input type="number" name="variavel" min="1" max="12" required>
            <div id="container-button">
                <input type="submit" value="Verificar">
                <input type="reset" value="Limpar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['variavel'])) {
            $mes = (int)$_GET['variavel'];
            echo "<div class='resultado'>";
            switch ($mes) {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    echo "O mês $mes tem 31 dias.";
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                    echo "O mês $mes tem 30 dias.";
                    break;
                case 2:
                    echo "O mês 2 pode ter 28 ou 29 dias.";
                    break;
                default:
                    echo "Mês inválido. Informe um número de 1 a 12.";
                    break;
            }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>