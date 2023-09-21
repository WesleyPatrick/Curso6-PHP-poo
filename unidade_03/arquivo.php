<?php
    include_once('classes/Produto.class.php');

    // Criar o objeto
    $produto = new Produto;

    // Determinar propriedades ao objeto
    $produto->Codigo = 1;
    $produto->NomeProduto = "Curso PHP Fundamental";
    $produto->Preco = 180;

    //adicionar estoque
    $produto->AdicionarEstoque(5);
    
    $produto->RetirarEstoque(7);

    // Mostrar na tela
    $produto->imprimirProduto();


    echo "o inventario do produto {$produto->NomeProduto} é de {$produto->SaldoInventario()}";
?>