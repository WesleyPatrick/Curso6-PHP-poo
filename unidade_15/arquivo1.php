<?php
    $xml = simplexml_load_file('xml/simples.xml');

    //print_r($xml)
    echo $xml->nomeproduto . "<br>";
    echo $xml->descricao . "<br>";
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