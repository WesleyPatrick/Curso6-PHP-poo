<?php

    class Carrinho {
        public $pedidoID;
        public $NomeCliente;
        public $Item;

        function __construct(){
            $this->Item = new Item;
        }

        function inserirItem($ProdutoID, $NomeProduto, $preco, $Quantidade) {
            $this->Item->inserirItem($ProdutoID, $NomeProduto, $preco, $Quantidade);
        }

        function retornarItem() {
            return $this->Item->mostraItem();
        }
    }
?>