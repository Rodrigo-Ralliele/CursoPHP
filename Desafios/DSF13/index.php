<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CAIXA ELETRONICO</title>

    <style>
        header > h1 {text-shadow: none;}
        header > #text {color: #372991;}

        .nota {height: 70px;
        padding: 5px;}
    </style>
</head>
<body>
    <?php 
    $valor = $_REQUEST['valor'] ?? 0; 
    $sobra = $valor;
        // Calculo 
    $cem = (int)($sobra / 100);
    $sobra = $sobra % 100;

    $cinquenta = (int)($sobra / 50);
    $sobra = $sobra % 50;

    $vinte = (int)($sobra / 20);
    $sobra = $sobra % 20;

    $dez = (int)($sobra / 10);
    $sobra = $sobra % 10;

    $cinco = (int)($sobra / 5);
    $sobra = $sobra % 5;

    $dois = (int)($sobra / 2);
    $sobra = $sobra % 2;



   

    ?>

    <main>
        <header>
            <h1>CAIXA ELETRÔNICO</h1>
        </header>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    
        <label for="valor">Qual valor você deseja sacar? (R$)</label>
        <input type="number" name="valor" id="valor">

        <p>
            *<strong>Notas Disponiveis: R$5, R$10, R$20, R$50, R$100</strong>
        </p>

        <input type="submit" value="Sacar">
    </form>
    </main>

    <section>
        <header ><h1 id="text">
            Saque de <?= number_format($valor, 2, ",", ".")?>R$ realizado
        </h1>
    <p>
        o caixa eletrônico vai te entregar as senguintes notas:
    </p>
    </header>
    <ul>
        <li><img = src="img/100-reais.jpg" alt="nota de 100" class="nota">x<?=$cem?> </li>

        <li><img = src="img/50-reais.jpg" alt="nota de 50" class="nota" > x <?=$cinquenta?></li>
        <li><img = src="img/20-reais.jpg" alt="nota de 20" class="nota" > x <?=$vinte?></li>
        <li><img = src="img/10-reais.jpg" alt="nota de 10" class="nota" > x <?=$dez?></li>
        <li><img = src="img/5-reais.jpg" alt="nota de 5" class="nota" > x <?=$cinco?></li>
        <li><img = src="img/2-reais.jpg" alt="nota de 2" class="nota" > x <?=$dois?></li>
    </ul>


    </section>
</body>
</html>