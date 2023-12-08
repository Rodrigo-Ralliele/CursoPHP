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
    <title>Informe um número</title>
</head>

<body>
    <?php
    $number = $_GET['number'];
    $raiz = sqrt($number);
    $cubica = $number**(1/3);

    ?>
    <main>
        <header>
            <h1>
                Informe um número
            </h1>
        </header>
        <form action="<?php $_SERVER = ['PHP_SELF'] ?>" method="get">
            <label for="number">Número:</label>
            <input type="number" name="number" id="number" step="0.001">

            <input type="submit" value="Calcular Raízes">
        </form>

    </main>
    <section>
        <header>
            <h1>
                Resultado final
            </h1>
        </header>
        <?php
        echo "<p>Analisando o <strong>Número " . number_format($number, 2,  ",") . "</strong>, temos:</p>";
        echo "<p>A sua raiz quadrada é <strong>" . number_format($raiz, 3, ",") . "</strong></p>";
        echo "<p>A sua raiz cúbica é <strong>".number_format($cubica, 3, ",")."</strong></p>";



        ?>
    </section>
</body>

</html>