<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <div id="container-main">
        <h1>Formulário</h1>
        <form action="" method="get" name="calcular_cilindro" id="calcular_cilindro" target="_self">
            <label for="raio">Raio da base:</label>
            <input type="number" id="raio" name="raio" step="0.01" required /> <br />
            <label for="altura">Altura:</label>
            <input type="number" id="altura" name="altura" step="0.01" required /> <br />
            <div id="container-button">
                <input type="submit" id="Enviar" value="Enviar">
                <input type="reset" id="Resetar" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['raio'], $_GET['altura'])) {
            $raio = (float)$_GET['raio'];
            $altura = (float)$_GET['altura'];
            
            $volume = pi() ** 2 * $altura;
            echo "<p>Volume do cilindro: " . $volume . " unidades cúbicas</p>";
        }
        ?>
    </div>
</body>

</html>