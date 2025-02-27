<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <div id="container-main">
        <h1>Formulário</h1>
        <form action="" method="get" name="calcular_lajotas" id="calcular_lajotas" target="_self">
            <label for="largura">Largura da sala (m):</label>
            <input type="number" id="largura" name="largura" step="0.01" required /> <br />
            <label for="comprimento">Comprimento da sala (m):</label>
            <input type="number" id="comprimento" name="comprimento" step="0.01" required /> <br />
            <div id="container-button">
                <input type="submit" id="Enviar" value="Enviar">
                <input type="reset" id="Resetar" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['largura'], $_GET['comprimento'])) {
            $largura = (float)$_GET['largura'];
            $comprimento = (float)$_GET['comprimento'];
            
            $area_sala = $largura * $comprimento;

            $area_lajota = 0.30 * 0.30;

            $quantidade_lajotas = ceil($area_sala / $area_lajota);
            echo "<p>Quantidade de lajotas necessárias: " . $quantidade_lajotas . "</p>";
        }
        ?>
    </div>
</body>

</html>