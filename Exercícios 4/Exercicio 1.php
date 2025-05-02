<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação de Produto</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container-main">
        <h1>Informe o Código do Produto</h1>
        <form method="get">
            <label for="codigo">Código do Produto:</label>
            <input type="number" name="codigo" id="codigo" required>
            <input type="submit" value="Classificar">
            <input type="reset" value="Limpar">
        </form>
        <hr>
        <div>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['codigo'])) {
                $codigo = (int)$_GET['codigo']; 
                switch ($codigo) {
                    case 1:
                        echo "Produto Classificado: Alimento não-perecível";
                        break;
                    case 2:
                        echo "Produto Classificado: Alimento perecível";
                        break;
                    case 3:
                        echo "Produto Classificado: Vestuário";
                        break;
                    case 4:
                        echo "Produto Classificado: Limpeza";
                        break;
                    default:
                        echo "Código inválido! Por favor, insira um código válido de 1 a 4.";
                        break;
                }
            } else {
                echo "Por favor, informe o código do produto.";
            }
            ?>
        </div>
    </div>
</body>

</html>