<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebendo Info</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Recebendo os Resultados</h1>
    </header>

    <main>
        <?php
            $nome = $_GET["nome"] ?? "indefinido";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            

            echo "<p>Olá, muito prazer <strong>$nome $sobrenome</strong>!";
        
        
        ?>

        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </main>
</body>
</html>