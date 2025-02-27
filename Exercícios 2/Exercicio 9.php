<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <div id="container-main">
        <h1>Formulário</h1>
        <form action="" method="get" name="calcular_delta" id="calcular_delta" target="_self">
            <label for="a">Valor de a:</label>
            <input type="number" id="a" name="a" step="0.01" required /> <br />
            <label for="b">Valor de b:</label>
            <input type="number" id="b" name="b" step="0.01" required /> <br />
            <label for="c">Valor de c:</label>
            <input type="number" id="c" name="c" step="0.01" required /> <br />
            <div id="container-button">
                <input type="submit" id="Enviar" value="Enviar">
                <input type="reset" id="Resetar" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['a'], $_GET['b'], $_GET['c'])) {
            $a = (float)$_GET['a'];
            $b = (float)$_GET['b'];
            $c = (float)$_GET['c'];

            $delta = $b ** 2 - 4 * $a * $c;
            echo "<p>Delta (Δ) da fórmula de Bháscara: " . $delta . "</p>";
        }
        ?>
    </div>
</body>

</html>