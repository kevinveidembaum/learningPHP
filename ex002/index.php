<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hora</title>
</head>
<body>
    <?php
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " . date("d/M/Y");
        echo " e é exatamente " . date("G:i:s T");
    ?>
</body>
</html>