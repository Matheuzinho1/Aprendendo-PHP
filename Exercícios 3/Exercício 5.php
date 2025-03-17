<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <div id="container-main">
        <h1>Verificar e Classificar Triângulo</h1>
        <form action="" method="get" name="verificar_triangulo" id="verificar_triangulo" target="_self">
            <label for="lado1">Lado 1:</label>
            <input type="number" id="lado1" name="lado1" step="0.01" required /> <br />
            <label for="lado2">Lado 2:</label>
            <input type="number" id="lado2" name="lado2" step="0.01" required /> <br />
            <label for="lado3">Lado 3:</label>
            <input type="number" id="lado3" name="lado3" step="0.01" required /> <br />
            <div id="container-button">
                <input type="submit" id="Enviar" value="Verificar">
                <input type="reset" id="Resetar" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['lado1'], $_GET['lado2'], $_GET['lado3'])) {
            $lado1 = (float)$_GET['lado1'];
            $lado2 = (float)$_GET['lado2'];
            $lado3 = (float)$_GET['lado3'];
            
            if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
                if ($lado1 == $lado2 && $lado2 == $lado3) {
                    $tipo = "Equilátero";
                } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
                    $tipo = "Isósceles";
                } else {
                    $tipo = "Escaleno";
                }
                echo "<p>Os valores formam um triângulo do tipo: " . $tipo . "</p>";
            } else {
                echo "<p>Os valores inseridos não formam um triângulo.</p>";
            }
        }
        ?>
    </div>
</body>

</html>