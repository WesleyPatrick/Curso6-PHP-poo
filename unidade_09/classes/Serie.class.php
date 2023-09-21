<?php
    include_once('classes/Filme.class.php');

    class Serie extends Filme {
        const Distribuicao = "Netflix";

        public static $valor;

        function __construct($Temporada) {
            echo parent::Nome . " - " . $Temporada
 . " (" . self::Distribuicao . ") - avaliação " . self::$valor . "<br>";      
    }

    function retornarSinopse() {
        return "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sit molestiae atque temporibus dignissimos totam iusto? Non consequatur ab possimus, nostrum eveniet voluptates dolores ducimus maxime quod. Saepe, corrupti odio.";
    }
}
?>
