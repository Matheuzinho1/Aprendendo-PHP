<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <div id="container-main">
        <h1>Formulário</h1>
        <form action="" method="get" name="somar" id="somar" target="_self">
            <label for="n1">Número 1:</label>
            <input type="number" id="n1" name="n1" required /> <br />
            <label for="n2">Número 2:</label>
            <input type="number" id="n2" name="n2" required /> <br />
            <div id="container-button">
                <input type="submit" id="Enviar" value="Enviar">
                <input type="reset" id="Resetar" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['n1'], $_GET['n2'])) {
            $n1 = (int)$_GET['n1'];
            $n2 = (int)$_GET['n2'];

            if ($n2 == 0) {
                echo "<p>Erro: Divisão por zero não é permitida.</p>";
            } else {
                $resultado = $n1 / $n2;
                echo "<p>Resultado: " . $resultado . "</p>";
            }
        }
        ?>
    </div>
</body>

</html>