<?php
    include_once('classes/Conta.class.php');
    include_once('classes/ContaPoupanca.class.php');
    include_once('classes/ContaCorrente.class.php');

    // instanciar um objeto da classe conta corrente
    $conta_corrente = new ContaCorrente('341','0001','010101-x','Andre Luiz','1234',150, 1000);
    
    // instanciar um objeto da classe conta poupanca
    $conta_poupanca = new ContaPoupanca('202','0001','020202-x','Wesley Patrick Ochakowski','12224',2000, 4000);

    // Ver saldo 
    echo $conta_corrente->RetornarSaldo() . "<br>";
    echo $conta_poupanca->RetornarSaldo() . "<br>";

    //depositar
    $conta_corrente->Depositar(500);
    $conta_poupanca->Depositar(500);

    // Ver saldo 
    echo $conta_corrente->RetornarSaldo() . "<br>";
    echo $conta_poupanca->RetornarSaldo() . "<br>";

    //realizar saque
    echo $conta_corrente->Sacar(1000);
    echo $conta_poupanca->Sacar(3000);

    // Ver saldo 
    echo $conta_corrente->RetornarSaldo() . "<br>";
    echo $conta_poupanca->RetornarSaldo() . "<br>";


?>