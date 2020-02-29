<div class="titulo">Herança</div>

<?php
Class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';
    }

    function __destruct(){
        echo 'Pessoa diz: Tchau!!<br>';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login){
        // $this->nome = $nome;
        // $this->idade = $idade;
        parent::__construct($nome,$idade);
        $this->login = $login;
        echo 'Usuário Criado!<br>';
    }

    function __destruct(){
        echo 'Usuário diz: Tchau!!<br>';
        parent::__destruct();
    }

    public function apresentar(){
        echo "@{$this->login}: ";
        parent::apresentar();
    }
}

$usuario = new Usuario('Gabryel', 24, 'gabryelfhsoares');
$usuario->apresentar();
unset($usuario);










