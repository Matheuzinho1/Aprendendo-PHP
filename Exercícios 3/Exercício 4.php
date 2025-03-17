<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <div id="container-main">
        <h1>Encontrar o Segundo Maior Valor</h1>
        <form action="" method="get" name="verificar_nota" id="verificar_nota" target="_self">
            <label for="nota1">Nota 1:</label>
            <input type="number" id="nota1" name="nota1" step="0.01" required /> <br />
            <label for="nota2">Nota 2:</label>
            <input type="number" id="nota2" name="nota2" step="0.01" required /> <br />
            <label for="nota3">Nota 3:</label>
            <input type="number" id="nota3" name="nota3" step="0.01" required /> <br />
            <label for="nota4">Nota 4:</label>
            <input type="number" id="nota4" name="nota4" step="0.01" required /> <br />
            <label for="nota5">Nota 5:</label>
            <input type="number" id="nota5" name="nota5" step="0.01" required /> <br />
            <div id="container-button">
                <input type="submit" id="Enviar" value="Verificar">
                <input type="reset" id="Resetar" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['nota1'], $_GET['nota2'], $_GET['nota3'], $_GET['nota4'], $_GET['nota5'])) {
            $notas = [
                (float)$_GET['nota1'],
                (float)$_GET['nota2'],
                (float)$_GET['nota3'],
                (float)$_GET['nota4'],
                (float)$_GET['nota5']
            ];
            
            rsort($notas);
            $segundo_maior = $notas[1];
            
            echo "<p>O segundo maior valor inserido é: " . number_format($segundo_maior, 2, ',', '.') . "</p>";
        }
        ?>
    </div>
</body>

</html>