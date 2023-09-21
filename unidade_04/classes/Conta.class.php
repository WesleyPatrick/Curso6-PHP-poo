<?php
    class Conta {
        function __construct($Banco, $Agencia, $Conta, $NomeCliente, $Senha, $Saldo) {
            $this-> Banco = $Banco;
            $this->Agencia = $Agencia;
            $this->Conta = $Conta;
            $this->NomeCliente = $NomeCliente;
            $this->Agencia = $Agencia;
            $this->Saldo = $Saldo;
        }

        function RetornarSaldo() {
            return $this->Saldo;
        }

        function DepositarConta($valor) {
            if( $valor > 0 ){
                $this->Saldo += $valor;
            }
        }

        function SacarConta($valor) {
            if( $valor < $this->Saldo ){
                $this->Saldo -= $valor;
            }
        }

        function __destruct() {
            echo "Objeto Conta {$this->Conta} esta finalizado";
        }
    }
?>