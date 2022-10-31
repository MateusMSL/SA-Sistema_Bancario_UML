<?php

 class Login {

    public $cpf;
    public $senha;
    public $tentativas;

    function getCPF() {
        return $this->cpf;
    }

    function getSenha() {
        return $this->senha;
    }

    function getTentativas() {
        return $this->tentativas;
    }

    function setCPF($cpf) {
        $this->cpf = $cpf;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setTentativas($tentativas) {
        $this->tentativas = $tentativas;
    }

    public function ValidarLogin(Usuario $usuario, Login $login) {

        $usuario->setCPF($usuario->getCPF());
        $usuario->setSenha($usuario->getSenha());

        $login->setCPF($login->getCPF());
        $login->setSenha($login->getSenha());
        
        if($login->getCPF() == $usuario->getCPF() && $login->getSenha() == $usuario->getSenha()) {
            return "Logado com sucesso";  
        }

        return "Senha ou CPF incorretos";

    }

    public function LimitarTentativas(Login $login) {
        
        $login->setTentativas($login->getTentativas());

        if($login->getTentativas() == 4) {
            return "Tentativas excedidas";
        }
        
        return "Tentativas não excedidas";

    }

    public function BloquearAcesso(Login $login) {

        $login->setTentativas($login->getTentativas());

        if($login->getTentativas() == 4){
            return "Acesso a conta temporariamente bloqueado!";
        }

        return "Acesso liberado";

    }

 }

?>