<?php
    class Item {
        public $ProdutoID;
        public $NomeProduto;
        public $Preco;
        public $Quantidade;

        function inserirItem($ProdutoID, $NomeProduto, $preco, $Quantidade) {
            $this ->ProdutoID = $ProdutoID;
            $this ->NomeProduto = $NomeProduto;
            $this ->Preco = $preco;
            $this ->Quantidade = $Quantidade;
        }

        function mostraItem() {
            return "Item: {$this->NomeProduto}, Preco: {$this->Preco},  Qtd: {$this->Quantidade}";
        }
    }
?>