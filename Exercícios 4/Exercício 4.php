<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calculadora com Switch</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container-main">
        <h1>Calculadora</h1>
        <form method="get">
            <input type="number" step="0.01" name="num1" placeholder="Primeiro número" required>
            <input type="number" step="0.01" name="num2" placeholder="Segundo número" required>

            <select name="operador" required>
                <option value="">Selecione a operação</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>

            <div id="container-button">
                <input type="submit" value="Calcular">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' &&
            isset($_GET['num1'], $_GET['num2'], $_GET['operador'])) {

            $num1 = (float)$_GET['num1'];
            $num2 = (float)$_GET['num2'];
            $operador = $_GET['operador'];
            $resultado = 0;

            echo "<div class='resultado'>";
            switch ($operador) {
                case '+':
                    $resultado = $num1 + $num2;
                    printf("Resultado: %.2f + %.2f = %.2f", $num1, $num2, $resultado);
                    break;
                case '-':
                    $resultado = $num1 - $num2;
                    printf("Resultado: %.2f - %.2f = %.2f", $num1, $num2, $resultado);
                    break;
                case '*':
                    $resultado = $num1 * $num2;
                    printf("Resultado: %.2f * %.2f = %.2f", $num1, $num2, $resultado);
                    break;
                case '/':
                    if ($num2 == 0) {
                        echo "Erro: divisão por zero não é permitida.";
                    } else {
                        $resultado = $num1 / $num2;
                        printf("Resultado: %.2f / %.2f = %.2f", $num1, $num2, $resultado);
                    }
                    break;
                default:
                    echo "Operador inválido.";
                    break;
            }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>