<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Dia da semana</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container-main">
        <h1>Identificador do Número</h1>
        <form method="get">
            <input type="number" name="dia" placeholder="Insira um número de 0 a 20" required>
            <div id="container-button">
                <input type="submit" value="Verificar">
                <input type="reset" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['dia'])) {
            $dia = (int)$_GET['dia'];

            echo "<div class='resultado'>";
            switch ($dia) {
                case 0:
                    echo "O número por extenso é: Zero";
                    break;
                case 1:
                    echo "O número por extenso é: Um";
                    break;
                case 2:
                    echo "O número por extenso é: Dois";
                    break;
                case 3:
                    echo "O número por extenso é: Três";
                    break;
                case 4:
                    echo "O número por extenso é: Quatro";
                    break;
                case 5:
                    echo "O número por extenso é: Cinco";
                    break;
                case 6:
                    echo "O número por extenso é: Seis";
                    break;
                case 7:
                    echo "O número por extenso é: Sete";
                    break;
                case 8:
                    echo "O número por extenso é: Oito";
                    break;
                case 9:
                    echo "O número por extenso é: Nove";
                    break;
                case 10:
                    echo "O número por extenso é: Dez";
                    break;
                case 11:
                    echo "O número por extenso é: Onze";
                    break;
                case 12:
                    echo "O número por extenso é: Doze";
                    break;
                case 13:
                    echo "O número por extenso é: Treze";
                    break;
                case 14:
                    echo "O número por extenso é: Quatorze";
                    break;
                case 15:
                    echo "O número por extenso é: Quinze";
                    break;
                case 16:
                    echo "O número por extenso é: Dezesseis";
                    break;
                case 17:
                    echo "O número por extenso é: Dezessete";
                    break;
                case 18:
                    echo "O número por extenso é: Dezoito";
                    break;
                case 19:
                    echo "O número por extenso é: Dezenove";
                    break;
                case 20:
                    echo "O número por extenso é: Vinte";
                    break;
                default:
                    echo "Número inválido. Por favor, insira um número entre 0 e 20.";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>
