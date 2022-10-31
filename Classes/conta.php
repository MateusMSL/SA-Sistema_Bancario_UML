<?php

 class Conta {

    public $saldo;
    public $numero_conta;
    public $valor_saque;

    function getSaldo(){
      return $this->saldo;
    }

    function getNumero_conta() {
      return $this->numero_conta;
    }

    function setSaldo($saldo){
      $this->saldo = $saldo;
    }

    function setNumero_conta($numero_conta) {
      $this->numero_conta = $numero_conta;
    }

 }


?>