<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <div id="container-main">
        <h1>Calcular Conta de Luz</h1>
        <form action="" method="get" name="calcular_conta_luz" id="calcular_conta_luz" target="_self">
            <label for="consumo">Consumo de energia (KWH):</label>
            <input type="number" id="consumo" name="consumo" step="0.01" required /> <br />
            <div id="container-button">
                <input type="submit" id="Enviar" value="Calcular">
                <input type="reset" id="Resetar" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['consumo'])) {
            $consumo = (float)$_GET['consumo'];
            
            if ($consumo <= 100) {
                $valor_pagar = $consumo * 0.75;
            } else {
                $valor_pagar = $consumo * 1.05;
            }
            
            echo "<p>O valor a pagar pela conta de luz é: R$ " . number_format($valor_pagar, 2, ',', '.') . "</p>";
        }
        ?>
    </div>
</body>

</html>