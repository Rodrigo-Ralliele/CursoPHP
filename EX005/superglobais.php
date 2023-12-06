<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício PHP</title>
</head>
<body>
    <main>
        <pre>
            <?php 

            session_start();
            $_SESSION["teste"] = "FUNCIONOU!!";

            setcookie("Dia-da-Semana", "TERÇA", time()+ 3600);

            echo "<h1>Superglobal GET</h1>";
            var_dump($_GET);

            echo "<h1>Superglobal POST</h1>";
            var_dump($_POST);

            echo "<h1>SuperGlobal REQUEST</h1>";
            var_dump($_REQUEST);

            echo "<h1>Variavel COOKIE</h1>";
            var_dump($_COOKIE);

            echo "<h1>SupreGlobal SESSION</h1>";
            var_dump($_SESSION);

            echo "<h1>SuperGlobal ENV</h1>";
            var_dump($_ENV);

            echo "SuperGlobal SERVER";
            var_dump($_SERVER);

            echo "SuperGlobal GLOBAL";

            var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>