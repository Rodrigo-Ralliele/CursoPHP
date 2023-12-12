<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        header>h1 {
            text-shadow: none;
        }
    </style>
    <title>Médias Aritimeticas</title>
</head>

<body>

    <?php
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $peso1 = $_GET['peso1'];
    $peso2 = $_GET['peso2'];

    $calc = $n1 + $n2;
    $calcsim = $calc / 2;

    $calcp = $n1 * $peso1;
    $calcp2 = $n2 * $peso2;
    $calcp3 = $peso1 + $peso2;
    $calcp4 = $calcp + $calcp2;
    $calcp5 = $calcp3 / $calcp4;

    ?>

    <main>
        <header>
            <h1>
                Médias Aritimeticas
            </h1>
        </header>

<form action="<?php $_SERVER['PHP_SELF']?>" method="get">
            <label for="n1">1°Valor</label>
            <input type="number" name="n1" id="n1">

            <label for="peso1">1°Peso</label>
            <input type="number" name="peso1" id="peso1">

            <label for="n2">2°Valor</label>
            <input type="number" name="n2" id="n2">

            <label for="peso2">2°Peso</label>
            <input type="number" name="peso2" id="peso2">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>
        <section>
            <header>
                <h1>Cálculo das Médias </h1>
            </header>
            <?php
            echo "<p>Analisando os valores<strong> $n1</strong> e <strong>$n2:</strong></p>";
            
            echo "<p>A <strong>Média Aritmética simples </strong> entre os valores é igual a <strong>".number_format($calcsim, 2, ",")."</strong></p>";

            echo "<p>A <strong>Média Aritimética Ponderada</strong> com pesos $peso1 e $peso2 é igual a <strong>".number_format($calcp5, 2, ",")."</strong> </p>";

            ?>
        </section>
</body>

</html>