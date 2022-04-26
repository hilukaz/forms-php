<?php

class Cadastro{
   
    private $nome;
    private $email;
    private $bairro;
    private $cep;

    public function setNome($nome){
        $this->nome=$nome;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setBairro($bairro){
        $this->bairro=$bairro;
    }
    public function getBairro(){
        return $this->bairro;
    }

    public function setCep($email){
        $this->cep=$cep;
    }
    public function getCep(){
        return $this->cep;
    }
}