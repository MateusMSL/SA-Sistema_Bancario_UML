<?php

class Usuario {

    public $id_usuario;
    public $nome;
    public $idade;
    public $cpf;
    public $senha;
    private $numero_conta;
    public $valor_saque;
    public $valor_transferencia;
    public $valor_deposito;
    public $limite;
    public $data_extrato;


    function getID() {
        return $this->id_usuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getCPF() {
        return $this->cpf;
    }

    function getSenha() {
        return $this->senha;
    }

    function getNumero_conta() {
        return $this->numero_conta;
    }

    function getValorSaque() {
        return $this->valor_saque;
    }

    function getValorTransferencia() {
        return $this->valor_transferencia;
    }

    function getValorDeposito() {
        return $this->valor_deposito;
    }

    function getLimite() {
        return $this->limite;
    }

    function getDataExtrato() {
        return $this->data_extrato;
    }

    function setID($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setCPF($cpf) {
        $this->cpf = $cpf;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setNumero_conta($numero_conta) {
        $this->numero_conta = $numero_conta;
    }

    function setValorSaque($valor_saque) {
        $this->valor_saque = $valor_saque;
    }

    function setValorTransferencia($valor_transferencia) {
        $this->valor_transferencia = $valor_transferencia;
    }

    function setValorDeposito($valor_deposito) {
        $this->valor_deposito = $valor_deposito;
    }

    function setLimite($limite) {
        $this->limite = $limite;
    }

    function setDataExtrato($data_extrato) {
        $this->data_extrato = $data_extrato;
    }

    public function RealizarSaque(Usuario $usuario1, Conta $conta1) {

        $usuario1->setValorSaque($usuario1->getValorSaque());
        $conta1->setSaldo($conta1->getSaldo());
        $usuario1->setLimite($usuario1->getLimite());

        if($usuario1->getValorSaque() > $usuario1->getLimite()) {
            return "Você ultrapassou o limite";
        }

       $saldo = $conta1->getSaldo() - $usuario1->getValorSaque();

       return $saldo;
    }

    public function RealizarDeposito(Usuario $usuario2, Conta $conta2) {

        $usuario2->setValorDeposito($usuario2->getValorDeposito());
        $conta2->setSaldo($conta2->getSaldo());

       $saldo = $conta2->getSaldo() + $usuario2->getValorDeposito();

       return $saldo;
    }

    public function RealizarTransferencia(Usuario $usuario1, Conta $conta1, Usuario $usuario2, Conta $conta2) {

        $usuario1->setValorTransferencia($usuario1->getValorTransferencia());
        $conta1->setSaldo($conta1->getSaldo());
        $usuario2->setValorTransferencia($usuario1->getValorTransferencia());
        $conta2->setSaldo($conta2->getSaldo());

        $saldo1 = $conta1->getSaldo() - $usuario1->getValorTransferencia();

        $saldo2 = $conta2->getSaldo() + $usuario2->getValorTransferencia();

        return "Saldo cliente 1: " . $saldo1 . " / Saldo cliente 2: " . $saldo2;
    }


    public function VisualizarSaldo(Conta $conta2) {
        
        $saldo = $conta2->getSaldo();

        return $saldo;
    }

    public function EmitirExtrato() {

        echo "<!DOCTYPE html>
        <html lang='pt-br'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <link rel='stylesheet' href=../style.css'>
                <title>SA Banco</title>
            </head>
        
            <body>
                <p class='p1'><strong>ID: </strong> ". $this->id_usuario ." </p>
                <p class='p1'><strong>Dinheiro Sacado:</strong> R$ " . $this->valor_saque . "</p>
                <p class='p1'><strong>Dinheiro Depositado </strong> R$ ". $this->valor_deposito ." </p>
                <p class='p1'><strong>Transferência </strong> R$ ". $this->valor_transferencia ." </p>
                <p class='p1'><strong>Data de emissão do extrato: </strong> ". $this->data_extrato ." </p>
            </body>
        </html>";

    }
}


?> 