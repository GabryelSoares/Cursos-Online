<div class="titulo">Construtor e Destrutor</div>

<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18){
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'E morreu! <br>';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

// $pessoa = new Pessoa(); // Problema

$pessoaA = new Pessoa('Raphael', 24);
$pessoaB = new Pessoa('Gabryel');
$pessoaA->apresentar();
$pessoaB->apresentar();
unset($pessoaA);
$pessoaB = null;



