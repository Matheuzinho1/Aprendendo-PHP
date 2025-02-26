<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial;
        }

        h1 {
            text-align: center;
        }

        form {
            text-transform: uppercase;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            flex-direction: column;
            background: blue;
            padding: 10px;
            width: 300px;
            border-radius: 8px;
            color: white;
        }

        label {
            text-align: center;
        }

        input[type="submit"] {
            background: white;
            border-radius: 8px;
            border: none;
        }
    </style>
</head>
<body>
    <h1>Formulário</h1>
    <form action="" method="get" name="somar" id="somar" target="_self">
        <label for="n1">Insira o primeiro número:</label>
        <input type="text" id="n1" name="n1" required /> <br />
        <label for="n2">Insira o segundo número:</label>
        <input type="text" id="n2" name="n2" required /> <br />
        <input type="submit" id="Enviar" value="Enviar">
        <p>
        <?php
            $num1 = 0;
            $num2 = 0;

            if (isset($_GET['n1'])) $num1 = $_GET['n1'];
            if (isset($_GET['n2'])) $num2 = $_GET['n2'];
            
            $num1 += $num2;
            echo "Resultado: " . $num1;
        ?>
        </p>
    </form>
</body>
</html>
