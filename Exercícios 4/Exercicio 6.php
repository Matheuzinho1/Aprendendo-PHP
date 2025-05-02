<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Aumento de Salário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container-main">
        <h1>Aumento</h1>
        <form method="get">
            <label for="salario">Insira seu salário:</label>
            <input type="number" id="salario" name="salario" placeholder="Insira o seu salario" required>
            <label for="aumento">Escolha o aumento:</label>
            <select name="aumento" id="aumento">
                <option value="A">A = 10%</option>
                <option value="B">B = 15%</option>
                <option value="C">C = 20%</option>
            </select>
            <div id="container-button">
                <input type="submit" value="Verificar">
                <input type="reset" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['salario'], $_GET['aumento'])) {
            $salario = (float)$_GET['salario'];
            $aumento = strtoupper((string)$_GET['aumento']);
            $res = $salario;

            echo "<div class='resultado'>";
                switch($aumento) {
                    case "A":
                        $salario *= 0.10;
                        $res += $salario;
                        echo 'Seu salário aumentou para: '.$res;
                        break;

                    case "B":
                        $salario *= 0.15;
                        $res += $salario;
                        echo "Seu salário aumentou para: ".$res;
                        break;

                    case "C":
                        $salario *= 0.20;
                        $res += $salario;
                        echo "Seu salário aumentou para: ".$res;
                        break;

                    default:
                        echo "Opção inválida";
                }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>