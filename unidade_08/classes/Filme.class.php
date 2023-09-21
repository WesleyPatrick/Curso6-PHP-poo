<?php

    class Filme {
        protected $NomeFilme;
        private $AnoLancamento;
        private $Genero;
        private $Elenco;

        public function setNomeFilme($nome) {
            $this->NomeFilme = $nome;
        }

        public function getNomeFilme() {
            return $this->NomeFilme;
        }


    }


?>