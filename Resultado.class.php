<?php

require_once("Cadastro.class.php");

class Resultado{
    private $nome;
    private $email;

    public function _x(){// "_" indicar contrutor

    $cadastro=new Cadastro();    
    $cadastro->setEmail($_POST('email'));
    $cadastro->setNome($_POST('nome'));
    
    echo $cadastro->getNome()."<br>". $cadastro->getEmail();
    }
}

?>