<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajustador de Preços</title>
    <style>
        header>h1 {
            text-shadow: none;
        }
    </style>
</head>

<body>
    <main>

        <?php
        $progress = $_GET['progresso'];
        ?>
        <header>
            <h1>
                Reajustador de Preços
            </h1>
        </header>

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco">

            <label for="progresso">Qual será o percentual de reajuste? ()</label>
            <input type="range" name="progresso" id="progresso" step="1.0">
        </form>

    </main>
</body>

</html>