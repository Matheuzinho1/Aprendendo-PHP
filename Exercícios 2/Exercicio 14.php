<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 14</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <div id="container-main">
        <h1>Formulário</h1>
        <form action="" method="get" name="calcular_emprestimo" id="calcular_emprestimo" target="_self">
            <label for="valor">Valor do Empréstimo (R$):</label>
            <input type="number" id="valor" name="valor" step="0.01" required /> <br />
            <label for="meses">Número de Meses:</label>
            <input type="number" id="meses" name="meses" required /> <br />
            <div id="container-button">
                <input type="submit" id="Enviar" value="Enviar">
                <input type="reset" id="Resetar" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['valor'], $_GET['meses'])) {
            $valor = (float)$_GET['valor'];
            $meses = (int)$_GET['meses'];
            $taxa_juros = 0.02; 

            $valor_final = $valor * (1 + $taxa_juros) ** $meses;

            echo "<p>Valor Emprestado: R$ " . number_format($valor, 2, ',', '.') . "</p>";
            echo "<p>Número de Meses: " . $meses . "</p>";
            echo "<p>Valor Final com Juros: R$ " . number_format($valor_final, 2, ',', '.') . "</p>";
        }
        ?>
    </div>
</body>

</html>