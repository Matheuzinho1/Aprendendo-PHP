<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Operações Aritméticas</title>
</head>

<body>
    <?php
    $nome = "Matheus";
    echo "<h1>Bem-vindo, $nome!</h1>";
    ?>

    <hr />

    <h4>Operadores Aritméticos</h4>
    <ol>
        <li>+ Adição</li>
        <li>- Subtração</li>
        <li>* Multiplicação</li>
        <li>/ Divisão</li>
        <li>% Módulo (Resto da divisão)</li>
        <li>** Exponenciação</li>
    </ol>

    <hr />

    <h4>Exemplo de soma de dois números</h4>
    <p>
        $num1 = 6;<br />
        $num2 = 3;<br />
        $res = $num1 + $num2;<br />
        echo "O resultado da soma é: $res";<br />
    </p>

    <hr />

    <?php
        $num1 = 6;
        $num2 = 3;
        $res = $num1 + $num2;
        echo "O resultado da soma é: $res";
    ?>

    <hr />

    <h4>Exemplo de operações aritméticas em PHP</h4>
    <?php
        $num1 = 6;
        $num2 = 3;

        $soma = $num1 + $num2;
        $subtracao = $num1 - $num2;
        $multiplicacao = $num1 * $num2;
        $divisao = $num1 / $num2;
        $modulo = $num1 % $num2;
        $exponenciacao = $num1 ** $num2;

        echo "<p>Soma: $soma</p>";
        echo "<p>Subtração: $subtracao</p>";
        echo "<p>Multiplicação: $multiplicacao</p>";
        echo "<p>Divisão: $divisao</p>";
        echo "<p>Módulo: $modulo</p>";
        echo "<p>Exponenciação: $exponenciacao</p>";
    ?>

    <hr />

    <h4>Exemplo de operações aritméticas em JavaScript</h4>
    <script>
    let a = 6;
    let b = 3;

    console.log("Soma: " + (a + b));
    console.log("Subtração: " + (a - b));
    console.log("Multiplicação: " + (a * b));
    console.log("Divisão: " + (a / b));
    console.log("Módulo: " + (a % b));
    console.log("Exponenciação: " + (a ** b));
    </script>
</body>

</html>