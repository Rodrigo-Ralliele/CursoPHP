<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados HTML</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php 
    $n =  $_GET ["nome"] ?? "[ERRO] ESCREVA SEU NOME ";
    $s = $_GET ["sobrenome"] ?? "[[ERRO] ESCREVA SEU SOBRENOME]";
    echo "<p> E um prazer te conhercer <strong>$n $s</strong>! Este é o meu Site!";
    ?>
<a href="javascript:history.go(-1)"><p>Voltar para página anterior</p></a>

</body>
</html>