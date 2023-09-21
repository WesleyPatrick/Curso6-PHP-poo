<?php
    class MeuXML{
        private $arquivoXML;

        public function __construct($arquivo){
            $this->arquivoXML = simplexml_load_file($arquivo);
        }

        public function numeroElementos() {
            return $this->arquivoXML->count();
        }

        public function listagemArquivo() {
            $xml = $this->arquivoXML;
            foreach($xml->children() as $elemento) {
                echo "<ul>";
                    foreach($elemento as $elemento => $valor)
                    echo "<li> $elemento:$valor </li>";
                echo "</ul>";
            }
            
        }
    }
?>