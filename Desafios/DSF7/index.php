<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Informação Salarial</title>
    <style>
        header>h1 {
            text-shadow: none;
        }
    </style>
</head>

<body>
    <?php
    $minimo = 1320;
    $v1 = $_GET['salario'] ?? 0;
    ?>

    <main>
        <header>
            <h1>
                Informe seu Salário
            </h1>
        </header>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" step="0.001">

            <?php 
            echo "<p>Considerando o Salário minimo <strong>R$".number_format($minimo, 2, ",",".")."</strong></p>"
            ?>
            <input type="submit" value="Calcular">
        </form>

        
    </main>
    
    <section>
        <h1>Resultado Final</h1>

        <?php 
        $minimo = 1320;
        $calc = intval($v1 / $minimo); 
        $calc2 = $minimo * $calc;
        $sobra = $v1 - $calc2;

        echo "<p> Quem recebe um Salário de <strong>R$".number_format($v1, 0, ",", ".")."</strong> ganha $calc salários minimos +<strong> R$" .number_format($sobra, 2, ",", ".")."</strong> </p>";
        ?>
    </section>


</body>

</html>