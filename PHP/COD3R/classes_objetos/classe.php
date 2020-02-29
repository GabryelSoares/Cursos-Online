<div class="titulo">Primeira Classe</div>

<?php
class Cliente {
    // atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar(){
        return "Nome: {$this->nome} Idade: {$this->idade}";
    }
}

$c1 = new Cliente();
$c1->nome = 'Gabryel';
echo $c1->nome, '<br>';
$c1->idade = 24;

$c2 = new Cliente;
$c2->nome = 'Raphael';
echo $c2->nome, '<br>';
$c2->idade = 24;

echo $c1->apresentar(), '<br>';
echo $c2->apresentar();









