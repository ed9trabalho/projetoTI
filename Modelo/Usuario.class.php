<?php


class Usuario {
    private $id_usuario;
    private $nome;
    private $secretaria;
    private $cpf;
    private $secretario;
    private $telefone;
    private $email;
    
    function __construct() {
        
    }
    function getId_usuario() {
        return $this->id_usuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getSecretaria() {
        return $this->secretaria;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getSecretario() {
        return $this->secretario;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSecretaria($secretaria) {
        $this->secretaria = $secretaria;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setSecretario($secretario) {
        $this->secretario = $secretario;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }
  
}
?>