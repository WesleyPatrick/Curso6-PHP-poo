<?php
    function __autoload($classe) {
        include_once("classes/{$classe}.class.php");

    }

    spl_autoload_register('autoloader');

        $minhacasa = new Casa();
        $meucarro = new Carro();
        $eu = new Pessoa();

        print_r(get_class_methods('Casa'));
        print_r(get_class_vars('Casa'));
        print_r(get_class_('Casa'));
    
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