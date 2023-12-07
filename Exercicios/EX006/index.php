<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio php</title>
</head>
<body>

    <?php
    //CAPTURANDO OS DADOS DO FORM RETROALIMENTADO

    $valor1 = $_GET ['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
    ?>

    <main>
        <h1>Digite 2 Números para Somar </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        

        <label for="v1">VALOR 1</label>
        <input type="number" name="v1" id="v1" value="<?=$valor1?>">

        <label for="v2">VALOR2</label>
        <input type="number" name="v2" id="v2" value="<?= $valor2?>">

        <input type="submit" value="Somar">
        </form>
        
    </main>

    <section id="resultado">
        <h1>Somador de Valores</h1>
            <?php 
            $soma = $valor1 + $valor2;
            echo "<p>A soma dos valores é igual a <strong>$soma</strong></p>"
            ?>
    </section>
</body>
</html>