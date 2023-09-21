<?php
    include_once('classes/Serie.class.php');

    Serie::$valor = 5;
    echo Serie::retornarSinopse() . "<br> <br>";

    $brba1 = new Serie("1a temporada");
    $brba2 = new Serie("2a temporada");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Documento sem título</title>
    </head>

    <body>
    </body>
</html>