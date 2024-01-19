<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio PHP</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
            <main>
        <h1>Resultado Lotofácil 100% CONFIÁVEL</h1>
        <?php

            $min = 01;
            $max = 25;
            $num = mt_rand($min, $max);
            $num1 = mt_rand($min, $max);
            $num2 = mt_rand($min, $max);
            $num3 = mt_rand($min, $max);
            $num4 = mt_rand($min, $max);
            $num5 = mt_rand($min, $max);


            echo "<p>Gerando seis números aleatórios entre $min e $max... <br>Os valores gerados foram <strong>$num, $num1, $num2, $num3, $num4, $num5</strong><p>";
        ?>

            <button onclick="javascript:document.location.reload()">&#x1F504; Gerar Outros</button>
</main>
    </body>
</html>