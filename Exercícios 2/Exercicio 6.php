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
        <h1>Formulário</h1>
        <form action="" method="get" name="somar" id="somar" target="_self">
            <label for="n1">Lado 1:</label>
            <input type="number" id="n1" name="n1" required /> <br />
            <label for="n2">Lado 2:</label>
            <input type="number" id="n2" name="n2" required /> <br />
            <label for="n3">Lado 3:</label>
            <input type="number" id="n3" name="n3" required /> <br />
            <label for="n4">Lado 4:</label>
            <input type="number" id="n4" name="n4" required /> <br />
            <div id="container-button">
                <input type="submit" id="Enviar" value="Enviar">
                <input type="reset" id="Resetar" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['n1'], $_GET['n2'], $_GET['n3'], $_GET['n4'])) {
            $n1 = (int)$_GET['n1'];
            $n2 = (int)$_GET['n2'];
            $n3 = (int)$_GET['n3'];
            $n4 = (int)$_GET['n4'];

            $result = $n1 + $n2 + $n3 + $n4;
            echo "<p>Resultado: " . $result . "</p>";
        }
        ?>
    </div>
</body>

</html>