<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas </title>
    <link rel="stylesheet" href="style.css">
    <style>
        header > h1 {
            color: lightblue;
        }
    </style>

</head>
<body>
   <main>
    <header>
        <h1>Conversor de Moedas v1.0</h1>

       <?php 
       $reais = $_GET["reais"];
       $convert = $reais / intval(4.92);
       $realc = "4,92";
        echo "<p>Seus R$ $reais equivalem a <strong>US$ $convert</strong></b>\n</p>";
       echo "<p><strong>A Conversão fixa de R$$realc</strong> informada diretamente no código</p>";
       ?>

        <a href="javascript:history.go(-1)">Voltar</a>
    </header>
   </main>
</body>
</html>