<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Resultado Do Processamento </h1>
</header>

    <main> 
        <?php 
        $n = $_GET ["nome"];
        $s = $_GET ["sobrenome"];
        echo "<p> É um Prazer te conhecer $n $s, Este é o Meu Site!";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar </a></p>
        
    </main>

</body>
</html>