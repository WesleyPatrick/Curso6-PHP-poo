<?php
    $xml = simplexml_load_file('xml/produtos.xml');

    //print_r($xml->produto->count());

    /*
    foreach( $xml->produto->children() as $elemento => $valor){

        echo "$elemento:  . $valor . <br>";

    }
    */

    

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
        <?php
            foreach($xml->children() as $elemento) {
                echo "<ul>";
                    foreach($elemento as $elemento => $valor)
                    echo "<li> $elemento:$valor </li>";
                echo "</ul>";
            }
        ?>
    </body>
</html>