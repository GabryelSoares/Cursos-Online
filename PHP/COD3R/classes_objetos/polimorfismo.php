<div class="titulo">Polimorfismo</div>

<?php

abstract class Comida {
    public $peso;

}

class Arroz extends Comida {
    
}

class ArrozAGrega extends Arroz {
    
}

class Feijão extends Comida {
    
}

class Sorvete extends Comida {
    
}

class Pessoa {
    public $peso;

    function __construct($peso) {
        $this->peso = $peso;
    }

    public function comer(Comida $comida) { //Define as classes que podem ser passadas como parâmetro
        $this->peso +=$comida->peso;
    }
}

$c1 = new Arroz();
$c1->peso = 0.650;

$c2 = new ArrozAGrega();
$c2->peso = 0.250;

$c3 = new Sorvete();
$c3->peso = 1.50;

$p = new Pessoa(83.450);
$p->comer($c1);
$p->comer($c2);
$p->comer($c3);

echo $p->peso;

echo "<br>Fim!";