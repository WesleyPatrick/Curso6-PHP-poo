<?php
    include_once("classes/MeuXML.cass.php");

    $meuXML = new MeuXML('xml/produtos.xml');

    //echo $meuXML->numeroElementos();
    $meuXML->listagemArquivo();

?>

