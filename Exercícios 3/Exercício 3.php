<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <div id="container-main">
        <h1>Verificar Menor Preço</h1>
        <form action="" method="get" name="verificar_preco" id="verificar_preco" target="_self">
            <label for="preco1">Preço 1 (R$):</label>
            <input type="number" id="preco1" name="preco1" step="0.01" required /> <br />
            <label for="preco2">Preço 2 (R$):</label>
            <input type="number" id="preco2" name="preco2" step="0.01" required /> <br />
            <label for="preco3">Preço 3 (R$):</label>
            <input type="number" id="preco3" name="preco3" step="0.01" required /> <br />
            <div id="container-button">
                <input type="submit" id="Enviar" value="Verificar">
                <input type="reset" id="Resetar" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['preco1'], $_GET['preco2'], $_GET['preco3'])) {
            $preco1 = (float)$_GET['preco1'];
            $preco2 = (float)$_GET['preco2'];
            $preco3 = (float)$_GET['preco3'];
            
            $menor_preco = min($preco1, $preco2, $preco3);
            
            echo "<p>O menor preço inserido é: R$ " . number_format($menor_preco, 2, ',', '.') . "</p>";
        }
        ?>
    </div>
</body>

</html>