<?php
    $xml = simplexml_load_file('xml/produtos.xml');

    //print_r($xml->produto->count());



    echo "nome do produto: " . $xml->produto->nomeproduto . "<br>";
    echo "descrição do produto: " . $xml->produto->descricao . "<br>";
    echo "preço: " . $xml->produto->precounitario;

    //echo $xml->nomeproduto . "<br>";
    //echo $xml->descricao . "<br>";
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