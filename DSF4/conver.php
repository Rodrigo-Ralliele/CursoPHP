<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        header>h1 {
            color: black;
            text-shadow: 0px 0px 0px black;
            ;
        }
    </style>
</head>

<body>
    <main>
        <header>
            <h1>Aalisador de Número Real 2.0</h1>
        </header>
        <?php

        $inicio = date("m-d-Y", strtotime("-7y days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotação = $dados["value"][0]["cotacaoCompra"];

        $real = $_REQUEST["din"] ?? 0; 

        $dolar = $real / $cotação;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p> Seus R\$<strong>". number_format( $real, 2, ",", "."). "</strong></br>equivalem a US\$<strong>". number_format($dolar, 2, ",", ".")."</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>