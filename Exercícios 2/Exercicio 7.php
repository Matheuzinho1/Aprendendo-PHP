<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <div id="container-main">
        <h1>Formulário</h1>
        <form action="" method="get" name="calcular" id="calcular" target="_self">
            <label for="opcao">Escolha a figura geométrica:</label>
            <select id="opcao" name="opcao" required>
                <option value="triangulo">Triângulo Equilátero</option>
                <option value="quadrado">Quadrado</option>
            </select> <br />
            <label for="lado">Lado:</label>
            <input type="number" id="lado" name="lado" required /> <br />
            <div id="container-button">
                <input type="submit" id="Enviar" value="Enviar">
                <input type="reset" id="Resetar" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['opcao'], $_GET['lado'])) {
            $opcao = $_GET['opcao'];
            $lado = (float)$_GET['lado'];
            
            switch ($opcao) {
                case 'triangulo':
                    $altura = ($lado * sqrt(3)) / 2;
                    echo "<p>Altura do triângulo equilátero: " . $altura . "</p>";
                    break;
                case 'quadrado':
                    $area = $lado * $lado;
                    echo "<p>Área do quadrado: " . $area . "</p>";
                    break;
                default:
                    echo "<p>Opção inválida!</p>";
                    break;
            }
        }
        ?>
    </div>
</body>

</html>