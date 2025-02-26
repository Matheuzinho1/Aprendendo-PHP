<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
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
            <label for="n3">Número 3:</label>
            <input type="number" id="n3" name="n3" required /> <br />
            <div id="container-button">
                <input type="submit" id="Enviar" value="Enviar">
                <input type="reset" id="Resetar" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['n1'], $_GET['n2'], $_GET['n3'])) {
            $n1 = (int)$_GET['n1'];
            $n2 = (int)$_GET['n2'];
            $n3 = (int)$_GET['n3'];

            $soma = $n1 + $n2 + $n3;
            echo "<p>Resultado: " . $soma . "</p>";
        }
        ?>
    </div>
</body>

</html>