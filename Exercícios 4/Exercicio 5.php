<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Identificador de Vogal</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <div id="container-main">
        <h1>Identificador</h1>
        <form method="get">
            <label for="letra">Insira qualquer letra:</label>
            <input type="text" id="letra" name="letra" required>
            <div id="container-button">
                <input type="submit" value="Verificar">
                <input type="reset" value="Resetar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['letra'])) {
            $letra = (string)$_GET['letra'];

            echo "<div class='resultado'>";
            if(ctype_upper($letra)) {
                echo("O caracter é maiúsculo");
            } else {
                switch ($letra) {
                    case "a":
                    case "e":
                    case "i":
                    case "o":
                    case "u":
                        echo("É uma vogal");
                        break;
                    default:
                        echo("É uma consoante");
                        break;
                }
            }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>