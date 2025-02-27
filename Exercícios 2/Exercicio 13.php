<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <div id="container-main">
        <h1>Formulário</h1>
        <form action="" method="get" name="calcular_preco" id="calcular_preco" target="_self">
            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" required /> <br />
            <label for="preco_custo">Preço de Custo (R$):</label>
            <input type="number" id="preco_custo" name="preco_custo" step="0.01" required /> <br />
            <div id="container-button">
                <input type="submit" id="Enviar" value="Enviar">
                <input type="reset" id="Resetar" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['nome'], $_GET['preco_custo'])) {
            $nome = $_GET['nome'];
            $preco_custo = (float)$_GET['preco_custo'];
            
            $preco_venda = $preco_custo * 1.35;
            echo "<p>Produto: " . $nome . "</p>";
            echo "<p>Preço de Custo: R$ " . number_format($preco_custo, 2, ',', '.') . "</p>";
            echo "<p>Preço de Venda: R$ " . number_format($preco_venda, 2, ',', '.') . "</p>";
        }
        ?>
    </div>
</body>

</html>