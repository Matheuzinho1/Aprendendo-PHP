<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conceito do Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container-main">
        <h1>Informe o Conceito do Aluno</h1>
        <form method="get">
            <label for="conceito">Conceito (A, B, C, D, E, F):</label>
            <input type="text" name="conceito" id="conceito" required>
            <input type="submit" value="Ver Significado">
            <input type="reset" value="Limpar">
        </form>
        <hr>
        <div id="resultado">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['conceito'])) {
                $conceito = strtoupper(trim($_GET['conceito'])); 
                switch ($conceito) {
                    case 'A':
                        echo "Significado: Excelente";
                        break;
                    case 'B':
                        echo "Significado: Ótimo";
                        break;
                    case 'C':
                        echo "Significado: Bom";
                        break;
                    case 'D':
                        echo "Significado: Regular";
                        break;
                    case 'E':
                        echo "Significado: Ruim";
                        break;
                    case 'F':
                        echo "Significado: Iiiiiii... nos vemos de novo ano que vem...";
                        break;
                    default:
                        echo "Erro: Conceito inexistente. Por favor, insira um conceito válido (A, B, C, D, E, F).";
                        break;
                }
            } else {
                echo "Por favor, informe o conceito do aluno.";
            }
            ?>
        </div>
    </div>
</body>

</html>