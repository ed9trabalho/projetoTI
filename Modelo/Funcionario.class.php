<?php


class Funcionario {
   private $id_funcionario;
   private $nome;
   private $login;
   private $senha;
   private $email;
   
   function __construct() {
       
   }
   function getId_funcionario() {
       return $this->id_funcionario;
   }

   function getNome() {
       return $this->nome;
   }

   function getLogin() {
       return $this->login;
   }

   function getSenha() {
       return $this->senha;
   }

   function getEmail() {
       return $this->email;
   }

   function setId_funcionario($id_funcionario) {
       $this->id_funcionario = $id_funcionario;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setLogin($login) {
       $this->login = $login;
   }

   function setSenha($senha) {
       $this->senha = $senha;
   }

   function setEmail($email) {
       $this->email = $email;
   }


   
}



?>