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
        $preco = $_GET['preco']?? '0';
        $progress = $_GET['progresso']??'0';
        ?>
        <header>
            <h1>
                Reajustador de Preços
            </h1>
        </header>

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" value="<?=$preco?>">

            <label for="progresso">Qual será o percentual de reajuste? (<strong>
                    <span id="p">?</span>
                    %</strong>)</label>
            <input type="range" name="progresso" id="progresso" step="1.0" oninput="mudavalor()" value="<?=$progress?>">

            <input type="submit" value="Reajuste">
        </form>

    </main>

    <?php 
    $aumento = $preco * $progress / 100; 
    $resultado = $aumento + $preco;
    ?>
<section>
    <header>
        <h1>RESULTADO</h1>
    </header>
    <?php 
    echo "O produto que custava R$".number_format($preco, "2",",", ".").", com <strong>$progress% de aumento</strong> vai passar a custar <strong>R$".number_format($resultado, "2",",", ".")."</strong> a partir de agora.";
    ?>
</section>
    <script>
        mudavalor()
        function mudavalor() {
            p.innerText = progresso.value
        }
    </script>
</body>

</html>