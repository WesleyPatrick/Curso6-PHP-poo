<?php
    include_once('classes/Carrinho.class.php');
    include_once('classes/Item.class.php');

    $shopcar = new Carrinho;
    $shopcar->NomeCliente = "Carlos José";
    $shopcar->inserirItem(1, "Carrinho de bebê", 100, 1);

    echo $shopcar->NomeCliente . "<br>";
    echo $shopcar->retornarItem() . "<br>"
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