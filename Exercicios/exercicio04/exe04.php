<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
</head>
<body>
    <?php
        const nome = "Helio";
        $informacao = 1.82;
        $$informacao = 17;

        echo "Meu nome é " .nome. " Tenho " .${$informacao}. " anos e " .$informacao. " de altura";
    ?>
</body>
</html>