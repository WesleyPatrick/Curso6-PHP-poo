<?php
    include_once('classes/Conta.class.php');

    //instanciar objeto
    $conta_corrente = new Conta('341','0001', '010101-x', 'Wesley Patrick', '1234', 150);

    //Mostrar objeto na tela
    print_r($conta_corrente);

    //depositar 1000
    $conta_corrente->DepositarConta(1000);

    // Sacar
    $conta_corrente->SacarConta(300);
   
    //Mostrar saldo 
    echo $conta_corrente->RetornarSaldo() . "<br>";
?>