<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <div id="container-main">
        <h1>Comparação de Alturas</h1>
        <form action="" method="get" name="comparar_alturas" id="comparar_alturas" target="_self">
            <label for="altura1">Altura 1 (m):</label>
            <input type="number" id="altura1" name="altura1" step="0.01" required /> <br />
            <label for="altura2">Altura 2 (m):</label>
            <input type="number" id="altura2" name="altura2" step="0.01" required /> <br />
            <div id="container-button">
                <input type="submit" id="Enviar" value="Comparar">
                <input type="reset" id="Resetar" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['altura1'], $_GET['altura2'])) {
            $altura1 = (float)$_GET['altura1'];
            $altura2 = (float)$_GET['altura2'];
            
            if ($altura1 > $altura2) {
                echo "<p>A maior altura é: " . $altura1 . " m</p>";
            } elseif ($altura2 > $altura1) {
                echo "<p>A maior altura é: " . $altura2 . " m</p>";
            } else {
                echo "<p>As duas alturas são iguais: " . $altura1 . " m</p>";
            }
        }
        ?>
    </div>
</body>

</html>