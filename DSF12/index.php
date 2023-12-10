<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de Tempo </title>
    <style>
        header>h1 {
            text-shadow: none;
        }
    </style>
</head>

<body>
    <main>
        <?php
        $second = $_GET['seconds'];
        $semana = 604.800;
        $dia =   86.400;
        $conta = ([1=> intval($second / $semana ) , 2=> ( $second - $semana / $dia)]);
        ?>


        <header>
            <h1>
                Calculadora de Tempo
            </h1>
        </header>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="seconds">Qual é o total de Segundos?</label>
            <input type="number" name="seconds" id="seconds">

            <input type="submit" value="Calcular">
        </form>

        <section>
            <header>
                <h1>
                    Totalizando Tudo
                </h1>
            </header>
            <?php 
            echo"<p>Analisando o valor que você digito, <strong>$second segundos </strong>equivalem a um total de:</p>";
            // echo $conta[1]number_format;
            echo "".intval(number_format($conta[1], 2, ","))." Semanas</br>";
            echo"";
            echo "".intval(number_format($conta[2], 2, "."))." Dias";
            ?>

            
        </section>
    </main>
</body>

</html>