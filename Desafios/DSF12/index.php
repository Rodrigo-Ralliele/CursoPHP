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
        $second = $_GET['seconds'] ?? 0;
        $sobra = $second;

        $semana = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;

        $dia =  (int)($sobra / 86_400);
        $sobra = $sobra %   86_400;

        $hora = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;

        $minuto = (int)($sobra / 60);
        $sobra = $sobra % 60;

        $segundos = $sobra;
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
                    Totalizando Tudoz
                </h1>
            </header>
            <p>Analisando o valor que você digito, <strong><?= $second ?> segundos </strong>equivalem a um total de:</p>

            <ul>
                <li>
                    <p>
                        <?=
                          number_format($semana, 0, ",", ".") ?> Semanas
                    </p>
                </li>
                <li>
                    <p><?= $dia ?> Dias </p>
                </li>
                <li>
                    <p><?= $hora ?> Horas </p>
                </li>
                <li>
                    <p><?= $minuto ?> Minutos </p>
                </li>
                <li>
                    <p><?= $segundos ?> Segundos</p>
                </li>
            </ul>

        </section>
    </main>
</body>

</html>