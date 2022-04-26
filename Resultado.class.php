<?php

require_once("Cadastro.class.php"); 

//o campo Nome deve passar o valor para o método setNome
//e você deverá imprimir o valor pelo método getNome

//echo $_GET ['txtNome'];

$cadastro = new Cadastro();

$cadastro->setNome($_GET ['txtNome']);
echo "Nome: " . $cadastro->getNome();

/*class Resultado{
    private $nome;
    private $email;

    public function _x(){// "_" indicar contrutor

    $cadastro=new Cadastro();    
    $cadastro->setEmail($_POST('email'));
    $cadastro->setNome($_POST('nome'));
    
    echo $cadastro->getNome()."<br>". $cadastro->getEmail();
    }
}*/

?>