<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculando a sua idade</title>
    <style>
        header>h1 {
            text-shadow: none;
        }
    </style>
</head>

<body>
    <main>

        <?php 
        $datanm = $_GET['datan'] ?? 0;
        $anoescolha = $_GET['anoescolha'] ?? 0;
        $calc = $anoescolha - $datanm ;
        ?>

        <header>
            <h1>
                Calculando a sua Idade
            </h1>
        </header>

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="datan">Em que ano você nasceu?</label>
                <input type="number" name="datan" id="datan">

                <label for="data" id="anoescolha">Quer saber sua idade em que ano? </label>
                <input type="number" name="anoescolha" id="anoescolha">

                <input type="submit" value="Qual será minha idade?">
        </form>

        <section>
            <header><h1>Resultado</h1></header>
        <?php echo "Quem nasceu em $datanm vai ter <strong>$calc anos</strong> em $anoescolha! ";?></section>
        
    </main>
</body>

</html>