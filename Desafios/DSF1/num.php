<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
    <style>
        header > h1 {
            color: lightblue;
            box-shadow: 0%;
            text-shadow: 0%;
        }
    </style>
</head>
<body>
    <main>
        <header>
            <h1>Resultado Final</h1>
            <section>
                <?php
                $num = $_GET["number"];
                $numore = $num +(1);
                $numunder = $num -(1);
        
                echo "<p>O Número escolhido foi <strong>$num</strong><br/>\n</p>";
                echo "<p>O Número antecessor é <strong>$numunder</strong> </p>";
        
                echo "<p>O numero sucessor é <strong>$numore</strong></p>";
        

                ?>

                <a href="javascript:history.go (-1)">VOLTAR</a>
            </section>
    </main>
    </header>
</body>
</html>