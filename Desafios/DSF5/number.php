<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        header {
            color: gray;
        }
        header > h1 {
            color: rgb(0, 0, 0);
            text-shadow: 0px 0px 0px black;
        }
    </style>
</head>
<body>
    <main>
        <header>
            <h1>Analisador de Número Real</h1>
        </header>

        <?php 
           
            $number = ($_GET["number"]);
            echo "<p>Analisando o número <strong>". number_format($number, 3, ",", ".")."</strong> informado pelo usuário:</p></br>";
            
            $n2 = intval($number) ;

            echo "<ul><li>A parte inteira do Número é <strong>". number_format($n2, 0,",", ".")."</strong></li>";

            $n3 = $number - $n2;

            echo "<li> A parte Fracionada no numero é <strong>". number_format($n3, 3, ",", "."). "</strong> </ul></li>";
            


        ?>
         
    </main>
</body>
</html>