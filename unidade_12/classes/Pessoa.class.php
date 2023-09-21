<?php
    class Pessoa{
        private $Nome;
        private $Altura;
        private $Fumante;

        function __construct($Nome) {
            $this->Nome = $Nome;
        }

        function __set($prop,$valor) {
           if($prop == 'Altura');
            if(is_float($valor)) {
                $this->Altura = $valor;
            } else {
                $this->Altura = 'Sem altura definida';
            }
        }

        function __get($prop){
            if($prop == 'Altura') {
                return $this->Altura;
            }
        }
    }
?>