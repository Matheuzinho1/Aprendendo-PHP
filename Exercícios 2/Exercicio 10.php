<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <div id="container-main">
        <h1>Formulário</h1>
        <form action="" method="get" name="converter_moeda" id="converter_moeda" target="_self">
            <label for="valor">Valor em Real (BRL):</label>
            <input type="number" id="valor" name="valor" step="0.01" required /> <br />
            <label for="moeda">Escolha a moeda de destino:</label>
            <select id="moeda" name="moeda" required>
                <option value="euro">Euro (EUR)</option>
                <option value="libra">Libra Esterlina (GBP)</option>
                <option value="dolar">Dólar Americano (USD)</option>
                <option value="iene">Iene Japonês (JPY)</option>
                <option value="peso">Peso Argentino (ARS)</option>
                <option value="todas">Todas as Moedas</option>
            </select> <br />
            <div id="container-button">
                <input type="submit" id="Enviar" value="Enviar">
                <input type="reset" id="Resetar" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['valor'], $_GET['moeda'])) {
            $valor = (float)$_GET['valor'];
            $moeda = $_GET['moeda'];

            switch ($moeda) {
                case 'euro':
                    $taxa = 0.18;
                    $valor_convertido = $valor * $taxa;
                    echo "<p>Valor convertido: " . $valor_convertido . " EUR</p>";
                    break;
                case 'libra':
                    $taxa = 0.15;
                    $valor_convertido = $valor * $taxa;
                    echo "<p>Valor convertido: " . $valor_convertido . " GBP</p>";
                    break;
                case 'dolar':
                    $taxa = 0.20;
                    $valor_convertido = $valor * $taxa;
                    echo "<p>Valor convertido: " . $valor_convertido . " USD</p>";
                    break;
                case 'iene':
                    $taxa = 21.45;
                    $valor_convertido = $valor * $taxa;
                    echo "<p>Valor convertido: " . $valor_convertido . " JPY</p>";
                    break;
                case 'peso':
                    $taxa = 20.17;
                    $valor_convertido = $valor * $taxa;
                    echo "<p>Valor convertido: " . $valor_convertido . " ARS</p>";
                    break;
                case 'todas':
                    $taxa_euro = 0.18;
                    $taxa_libra = 0.15;
                    $taxa_dolar = 0.20;
                    $taxa_iene = 21.45;
                    $taxa_peso = 20.17;
                    echo "<p>Valor convertido para Euro: " . ($valor * $taxa_euro) . " EUR</p>";
                    echo "<p>Valor convertido para Libra Esterlina: " . ($valor * $taxa_libra) . " GBP</p>";
                    echo "<p>Valor convertido para Dólar Americano: " . ($valor * $taxa_dolar) . " USD</p>";
                    echo "<p>Valor convertido para Iene Japonês: " . ($valor * $taxa_iene) . " JPY</p>";
                    echo "<p>Valor convertido para Peso Argentino: " . ($valor * $taxa_peso) . " ARS</p>";
                    break;
                default:
                    echo "<p>Moeda inválida!</p>";
            }
        }
        ?>
    </div>
</body>

</html>