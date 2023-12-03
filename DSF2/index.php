<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GENERATOR RANDOM NUMBER</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <section>
            <h1><strong>TRABALHANDO COM NÚMEROPS ALEATÓRIOS
                </strong></h1>
        </section>
        <?php
        $random = rand(0, 100);
        echo "Gerando um número aleatório entre <strong>0 e 100</strong>... ";
        echo "<p>O valor gerado foi <strong>$random</strong> <b>\n</p>";
        
        ?>
        <button id="refresh">Gerar outro</button>
       <script>
        const rf = document.getElementById("refresh")

        rf.addEventListener("click", () => {
location.reload()
        })
       </script>
    </main>
</body>

</html>