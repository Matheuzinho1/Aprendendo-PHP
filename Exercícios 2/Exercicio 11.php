<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 11</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <div id="container-main">
        <h1>Formulário</h1>
        <form action="" method="get" name="calcular_tv" id="calcular_tv" target="_self">
            <label for="altura">Altura (cm):</label>
            <input type="number" id="altura" name="altura" step="0.01" required /> <br />
            <label for="largura">Largura (cm):</label>
            <input type="number" id="largura" name="largura" step="0.01" required /> <br />
            <div id="container-button">
                <input type="submit" id="Enviar" value="Enviar">
                <input type="reset" id="Resetar" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['altura'], $_GET['largura'])) {
            $altura_cm = (float)$_GET['altura'];
            $largura_cm = (float)$_GET['largura'];
            
            $altura_in = $altura_cm / 2.54;
            $largura_in = $largura_cm / 2.54;
            
            $diagonal_in = sqrt($altura_in ** 2 + $largura_in ** 2);
            echo "<p>Tamanho da TV: " . $diagonal_in . " polegadas</p>";
        }
        ?>
    </div>
</body>

</html>